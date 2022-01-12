@extends('layouts.app')

@section('content')

    <div class="search-wrap col-xs-12">
        <div class="container">
            <div >
                @if (!$searchResult)

                    {{ 'no data' }}

                @else
                <div class="latest-ads col-xs-12">
                    <ul class="nav-tabs">
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#t1">نتائج البحث</a>
                        </li>
                    </ul>
                    <div class="">
                            <div class="item">
                                <div class="product-i">
                                    <div class="i-img">
                                        <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                        <div class="labels">
                                            <span class="label l-blue">{{ $searchResult->product_status }}</span>
                                            <span
                                                class="label l-green">{{ $searchResult->percent_of_discount }}</span>
                                        </div>
                                        <div class="i-controls">
                                            <a href="#" data-tool="tooltip" title="عرض سريع">
                                                <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                            </a>
                                            <a href="#" data-tool="tooltip" class="add-cart" title="اضافة للسلة">
                                                <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                            </a>
                                            <a href="#" data-product-id="{{ $searchResult->id }}" data-tool="tooltip"
                                                class="btn btn-trans addToFavouriteList" title="اضافة للمفضلة">
                                                <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                            </a>


                                        </div>
                                    </div>
                                    <div class="i-data">
                                        <a href="#" class="title">{{ $searchResult->product_name }}</a>
                                        <div class="rate-sys">
                                            <i class="fa fa-star-half-o active"></i>
                                            <i class="fa fa-star-half-o active"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="price-sys">
                                            <span>{{ $searchResult->new_price }} جنية</span>
                                            <span class="old">{{ $searchResult->old_price }} جنية</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

                @endif

            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        setInterval(function() {
            $("#notifications_count").load(window.location.href + " #notifications_count");
            $("#notifications_content").load(window.location.href + " #notifications_content");

        }, 5000);

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
                    if (data.favourited)
                        $('.alert-modal').css('display', 'block');
                    else
                        $('.alert-modal2').css('display', 'block');
                    countFav();
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

