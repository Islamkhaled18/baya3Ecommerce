@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>السلع المفضلة</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>السلع المفضلة</li>
            </ul>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="wishlist-wrap col-xs-12">

            <div class="container">

                @foreach ($all_product as $product)

                    <div class="block col-md-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <a href="#">
                                    <img src="{{ asset($product->image_one) }}" alt="">
                                </a>
                            </div>
                            <div class="i-data">
                                <div class="i-inner">
                                    <a href="#" class="title">{{ $product->product_name }}</a>
                                    <p>
                                        <span>{{ $product->new_price }}جنية</span>
                                        <a href="#" class="removeFromFavouriteList addToFavouriteList t-remove rem"
                                            data-product-id="{{ $product->id }}"> حذف</a>
                                    </p>

                                </div>
                                <div class="i-auth">
                                    <a href="#">
                                        <img src="{{ asset($stores->store_logo_image) }}" alt="">
                                        {{ $stores->store_name }}
                                    </a>
                                </div>
                                <button type="button" class="btn btn-trans product-add add-cart"
                                    data-url="{{ route('cart.add') }}" data-id="{{ $product->id }}">اضف للسلة</button>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </main>


@endsection


@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            countFav();

            function countFav() {
                $.ajax({
                    method: 'GET',
                    url: "{{ Route('product.countFav') }}",
                    success: function(response) {
                        $('.countFavProd').html('');
                        $('.countFavProd').html(response.count);
                    }
                });
            }
        });


        $(document).on('click', '.addToFavouriteList', function(e) {
            e.preventDefault();
            var token = $('input[name=_token]');
            @guest()
                $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'post',
                url: "{{ Route('favourite.store') }}",
                data: {
                    productId: $(this).attr('data-product-id'),
                },
                headers: {
                    'X-CSRF-TOKEN': token.val()
                },
                success: function(data) {
                    countFav();
                }
            });
        });

        $(document).on('click', '.removeFromFavouriteList', function(e) {
            e.preventDefault();
            var token = $('input[name=_token]');
            @guest()
                $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'delete',
                url: "{{ Route('favourite.destroy') }}",
                data: {
                    productId: $(this).attr('data-product-id'),
                },
                headers: {
                    'X-CSRF-TOKEN': token.val()
                },
                success: function(data) {
                    location.reload();
                }
            });
        });


        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); //end if ajax sutup

            $(document).on('click', '.add-cart', function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                var url = $(this).data('url');
                var method = 'post';

                $.ajax({
                    url: url,
                    method: method,
                    data: {
                        id: id
                    },
                    success: function(data) {

                        $('.cart-count').html(data.count);

                    },
                    error: function(data) {
                        console.log(data);
                    },

                }); //end of ajax

            }); //end of click

            $('.product-quntty-up').on('click', function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                var rowId = $(this).data('rowid');
                var url = $(this).data('url');
                var method = 'post';
                var qtyval = parseInt($('.product-quntty-' + id).val());


                $.ajax({
                    url: url,
                    method: method,
                    data: {
                        quantity: qtyvalup,
                        row_id: rowId,
                    },
                    success: function(data) {

                        $('.cart-count').html(data.count);
                        $('.cart-totle').html(data.subtotal);

                        $('.product-sub-totle-' + id).html(data.product.qty * data.product
                            .new_price);

                    }, //end of success

                }); //this ajax

            }); //end of product quntty

            $('.product-quntty-down').on('click', function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                var rowId = $(this).data('rowid');
                var url = $(this).data('url');
                var method = 'post';
                var qtyval = parseInt($('.product-quntty-' + id).val());
                qtyvalup = qtyval - 1;

                if (qtyvalup == '0') {

                    qtyvalup = 1;
                    $('.product-quntty-' + id).val(1);

                } else {

                    var qtyval = parseInt($('.product-quntty-' + id).val(qtyvalup));
                }

                $.ajax({
                    url: url,
                    method: method,
                    data: {
                        quantity: qtyvalup,
                        row_id: rowId,
                    },
                    success: function(data) {

                        $('.cart-count').html(data.count);
                        $('.cart-totle').html(data.subtotal);

                        $('.product-sub-totle-' + id).html(data.product.qty * data.product
                            .new_price);

                    }, //end of success

                }); //this ajax

            }); //end of product quntty

        });
    </script>
@endsection
