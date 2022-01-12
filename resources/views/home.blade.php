@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="hero-s col-xs-12">
            <div class="container">
                <div class="hero-inner col-md-9 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="hero-slider owl-carousel owl-theme">
                        <div class="item"
                            style="background-image: url({{ asset('assets/front/images/ads/3.png') }})">
                            <a href="#"></a>
                        </div>
                        <div class="item"
                            style="background-image: url({{ asset('assets/front/images/ads/2.png') }})">
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="latest-offers col-md-3 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400">
                    <div class="inner">
                        <div class="latest-head">
                            <h3>@lang('front.latest_offers')</h3>
                        </div>
                        <div class="latest-body">
                            <div class="latest-slider owl-carousel owl-theme">
                                @foreach ($pros as $pro)
                                    <div class="item">
                                        <div class="product-i">
                                            <div class="i-img">
                                                <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                                <div class="labels">
                                                    <span class="label l-blue">{{ $pro->product_status }}</span>
                                                    <span class="label l-green">{{ $pro->percent_of_discount }}</span>
                                                </div>
                                            </div>
                                            <div class="i-data">
                                                <a href="#" class="title">{{ $pro->product_name }}</a>
                                                <div class="rate-sys">
                                                    <i class="fa fa-star-half-o active"></i>
                                                    <i class="fa fa-star-half-o active"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="price-sys">
                                                    <span>{{ $pro->new_price }} جنية</span>
                                                    <span class="old">{{ $pro->old_price }} جنية</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="latest-ads col-xs-12">
            <div class="container">
                <ul class="nav-tabs col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">

                    <li>
                        <a href="#" data-toggle="tab" data-target="#t2"> @lang('front.stores') </a>
                    </li>
                </ul>
                <div class="tab-content col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">

                    <div class="tab-pane fade" id="t2">
                        <div class="l-slider owl-carousel owl-theme">
                            @foreach ($stores as $store)
                                <div class="block">
                                    <div class="b-inner">
                                        <div class="b-img">
                                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">

                                        </div>
                                        <div class="b-data">

                                            <a href="#">
                                                {{ $store->store_name }}
                                                <span>({{ $store->store_type }})</span>
                                            </a>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                {{ $store->store_address }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spec-ads col-xs-12" style="background-image: url({{ asset('assets/front/images/ads/1.png') }})">
            <a href="#"></a>
        </div>
        <div class="daily col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h3>@lang('front.latest_offers')</h3>

                </div>
                <div class="g-body col-xs-12">
                    @foreach ($pros as $pro)
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">{{ $pro->product_status }}</span>
                                        <span class="label l-green">{{ $pro->percent_of_discount }}</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" class="btn btn-trans product-add add-cart"
                                        data-url="{{ route('cart.add') }}" data-id="{{ $pro->id }}" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" class="addToFavouriteList" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">{{ $pro->product_name }}</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>{{ $pro->new_price }} جنية</span>
                                        <span class="old">{{ $pro->old_rice }} جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
        {{-- <div class="spec-ads col-xs-12" style="background-image: url({{ asset('assets/front/images/ads/2.png') }})">
            <a href="#"></a> --}}
        </div>
        <div class="daily newest col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h3>@lang('front.new_arrivals')</h3>

                </div>
                <div class="g-body col-xs-12">
                    @foreach ($pros as $new_arrival)
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/9.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">{{ $new_arrival->product_status }}</span>
                                        <span class="label l-green">{{ $new_arrival->percent_of_discount }}</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" class="btn btn-trans product-add add-cart"
                                        data-url="{{ route('cart.add') }}" data-id="{{ $new_arrival->id }}" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" class="addToFavouriteList" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title"> {{ $new_arrival->product_name }} </a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>{{ $new_arrival->new_price }} جنية</span>
                                        <span class="old">{{ $new_arrival->old_price }} جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
        <div class="disc-ads col-xs-12" style="background-image: url({{ asset('assets/front/images/ads/4.png') }})">
            <div class="container">
                <div class="cap">
                    <span class="label l-yellow" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">خصم
                        35%</span>
                    <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">تألقى بأفضل واجود أنواع
                        العطور</h3>
                    <a href="#" class="btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">تسوق
                        الان</a>
                </div>
            </div>
        </div>
        <div class="daily the-most col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h3> @lang('front.best_products')</h3>

                </div>
                <div class="g-body col-xs-12">
                    @foreach ($best_sellings as $best)
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/9.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">{{ $best->product_status }}</span>
                                        <span class="label l-green">{{ $best->percent_of_discount }}</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" class="btn btn-trans product-add add-cart"
                                        data-url="{{ route('cart.add') }}" data-id="{{ $best->id }}" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" class="addToFavouriteList" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">{{ $best->product_name }} </a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>{{ $best->new_price }} جنية</span>
                                        <span class="old">{{ $best->old_price }} جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
        <div class="clients col-xs-12">
            <div class="container">
                <div class="cl-slider owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/5.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/6.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/front') }}/images/clients/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="disting col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h3>اكثر ما يميزنا</h3>
                </div>
                <div class="g-body col-xs-12">
                    <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ url('assets/front') }}/images/feats/1.png" alt="">
                            </div>
                            <div class="i-data">
                                <h3>منتجات موثوقة</h3>
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز</p>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ url('assets/front') }}/images/feats/2.png" alt="">
                            </div>
                            <div class="i-data">
                                <h3>توصيل الطلبات</h3>
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز</p>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ url('assets/front') }}/images/feats/3.png" alt="">
                            </div>
                            <div class="i-data">
                                <h3>الدفع عند الاستلام</h3>
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="n-letter col-xs-12">
            <div class="container">
                <div class="f-logo" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ url('assets/front') }}/images/logo.png" alt="">
                </div>
                <form action="#" method="get" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="اكتب بريدك الالكترونى هنا">
                        <button type="submit" class="btn">اشترك</button>
                    </div>
                </form>
                <div class="social" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <a href="#" class="tw">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="insta">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="yt">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="#" class="fb">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>

    @include('site.includes.alerts.alert')   <!-- we can use only one with dynamic text -->
    @include('site.includes.alerts.alert2')   <!-- we can use only one with dynamic text -->
    @include('site.includes.alerts.not-logged')


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
