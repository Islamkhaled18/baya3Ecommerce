@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>سلة الطلبات</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>سلة الطلبات</li>
            </ul>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="orders-wrap col-xs-12 product_data">
            <div class="container">
                <div class="cart-wrap col-xs-12">
                    <div class="orders-list col-xs-12">
                        <div class="o-inner">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>تفاصيل المنتج</th>
                                        <th>الصفات</th>
                                        <th>الكمية</th>
                                        <th>السعر الاجمالى</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                        <tr class="cart-item cart-item-{{ $item->id }}">
                                            <td>
                                                <div class="item-info">
                                                    <div class="i-img">
                                                        <a href="#">
                                                            <img src="{{ asset($item->model->image_one) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="i-data">
                                                        <div class="i-auth">
                                                            <a href="#">
                                                                <img src="{{ asset($stores->store_logo_image) }} " alt="">
                                                                {{ $stores->store_name }}
                                                            </a>
                                                        </div>
                                                        <div class="i-inner">
                                                            <a href="#"
                                                                class="title">{{ $item->model->product_name }}</a>
                                                            <p>
                                                                <span>{{ $item->price }}جنية</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>اللون : اسود</p>

                                            </td>
                                            <td>
                                                <input type="hidden" class="product_id"
                                                    value="{{ $item->product_id }}">
                                                <div class="number">
                                                    <button
                                                        class="inc qtybutton waves-effect changQuantity increment-btn product-quntty-up"
                                                        data-id="{{ $item->id }}"
                                                        data-url="{{ route('cart.update') }}"
                                                        data-rowId="{{ $item->rowId }}">+</button>
                                                    <input type="text" value="{{ $item->qty }}"
                                                        class="plus-minus-box qty-btn product-quntty-{{ $item->id }}"
                                                        id="add-cart-product-{{ $item->id }}" title="Quantity Number"
                                                        name="quantity">
                                                    <button
                                                        class="dec qtybutton waves-effect changQuantity decrement-btn product-quntty-down"
                                                        data-id="{{ $item->id }}"
                                                        data-url="{{ route('cart.update') }}"
                                                        data-rowId="{{ $item->rowId }}">-</button>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="product-sub-totle-{{ $item->id }}">{{ $item->price * $item->qty }}
                                                    جنية</span></td>
                                            <td>
                                                <button type="reset"
                                                    class="btn t-remove cart-delete-{{ $item->id }} removal-product"
                                                    data-id="{{ $item->id }}" data-rowId="{{ $item->rowId }}">
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="cart-destroy" hidden>
                        {{ route('cart.destroy') }}
                    </div>
                    <div class="order-total col-xs-12">
                        <div class="inner col-md-4 col-xs-12">
                            <ul>
                                <li>
                                    المبلغ الكلى
                                    <span class="cart-totle">{{ Cart::subtotal() }} </span>
                                </li>
                                <li>
                                    مصاريف الشحن
                                    <span class="shipping_price">{{$stores->shipping_price}}</span>
                                </li>
                                <li>
                                    الاجمالى
                                    <span class="cart_finalTotal"> {{ Cart::subtotal() + $stores->shipping_price}}   </span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-trans">الرجوع للموقع</a>
                            <a href="{{route('cart.continue')}}" class="btn">متابعة الشراء</a>
                        </div>
                    </div>
                </div>

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


        $('.product-quntty-up').on('click', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var rowId = $(this).data('rowid');
            var url = $(this).data('url');
            var method = 'post';
            var qtyval = parseInt($('.product-quntty-' + id).val());
            
            qtyvalup = qtyval + 1;
            $('.product-quntty-' + id).val(qtyvalup);

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
                    $('.product-sub-totle-' + id).html(data.product.qty * data.product.price);


                    var ship = parseInt($('.shipping_price').text());
                    
                    $('.cart_finalTotal').html(data.subtotal + ship);

                   
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
                    $('.product-sub-totle-' + id).html(data.product.qty * data.product.price);
                    
                }, //end of success
            }); //this ajax
        }); //end of product quntty

        $(document).on('click', '.removal-product', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var rowId = $(this).data('rowid');
            var url = $('#cart-destroy').text();
            var method = 'post';
            $.ajax({
                url: url,
                method: method,
                data: {
                    row_id: rowId
                },
                success: function(data) {
                    $('.cart-item-' + id).remove();
                    $('.cart-count').html(data.count);
                    $('.cart-totle').html(data.subtotal);
                }, //end of success
            }); //this ajax 

        }); //end of product-removal button
    </script>
@endsection
