@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>{{ $categories->category_name }}</h3>
            <ul>
                <li>
                    <a href="{{ route('store.profile', $stores->id) }}">الرئيسية</a>
                </li>
                <li>
                    <a href="{{ route('store.storeCategories', $stores->id) }}">{{ $categories->category_name }}</a>
                </li>
                <li>{{ $product->product_name }}</li>
            </ul>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="single-wrap col-xs-12 product_data">
            <div class="container">
                <div class="single-img col-md-5 col-xs-12">
                    <div class="all">
                        <div class="slider">
                            <div class="owl-carousel owl-theme one">
                                <div class="item-box">
                                    <img src="{{ asset($product->image_one) }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ asset($product->image_two) }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ url('assets/front') }}/images/products/11.png" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ url('assets/front') }}/images/products/12.png" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ url('assets/front') }}/images/products/13.png" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ url('assets/front') }}/images/products/14.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slider-two">
                            <div class="owl-carousel owl-theme two">
                                <div class="item active">
                                    <img src="{{ asset($product->image_one) }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset($product->image_two) }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ url('assets/front') }}/images/products/11.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ url('assets/front') }}/images/products/12.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ url('assets/front') }}/images/products/13.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ url('assets/front') }}/images/products/14.png" alt="">
                                </div>
                            </div>
                            <div class="left-t nonl-t">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="right-t">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-share">
                        <span>مشاركة هذا المنتج</span>
                        <div class="social">
                            <a href="#" class="fb">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="insta">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" class="tw">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="tg">
                                <i class="fa fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-data col-md-7 col-xs-12">
                    <div class="seller-info">
                        <a href="#" class="info-title">
                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                            <span>{{ $stores->store_name }}</span>
                        </a>
                        <a href="{{ route('allProducts.myStore', $stores->id) }}" class="btn btn-blue btn-trans">تصفح
                            منتجات المتجر</a>
                        <a href="#" class="btn btn-follow btn-trans">متابعه</a>
                        <b>295 المتابعين</b>
                    </div>
                    <div class="product-info">
                        <h3>{{ $product->product_name }}</h3>
                        <span>حاله السلعه: {{ $product->product_status }}</span>
                        <div class="rate-sys">
                            <i class="fa fa-star-half-o active"></i>
                            <i class="fa fa-star-half-o active"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="price-sys">
                            <p>{{ $product->new_price }} جنية</p>
                        </div>
                        <div class="extra-info">

                            <p>{{ $product->product_disc }}</p>
                        </div>
                        <div class="l-colors">
                            <div class="form-group">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="radio" name="rad">
                                            <span style="background-color: firebrick"></span>
                                            <b>احمر</b>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="rad">
                                            <span style="background-color: blue"></span>
                                            <b>ازرق</b>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="rad">
                                            <span style="background-color: forestgreen"></span>
                                            <b>اخضر</b>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="rad">
                                            <span style="background-color: deeppink"></span>
                                            <b>بينك</b>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="rad">
                                            <span style="background-color: darkorange"></span>
                                            <b>برتقالي</b>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-storage">
                            <span>المخزون :{{ $product->product_quantity }} قطعة</span>
                        </div>
                    </div>
                    <div class="product-delivery">
                        <p>
                            لتسليم في <b>{{ $stores->store_governorate }}</b>, {{ $stores->store_address }}
                            <a href="#" data-target="#change_address" data-toggle="modal">(تغيير المدينة)</a>
                            موعد التسليم المتوقع <b>السبت, 25 أبريل</b>
                        </p>
                    </div>
                    <div class="product-actions">
                        <input type="hidden" value="{{ $product->id }}" class="product_id">
                        <span>{{ trans('dashboard.quantity') }}</span>
                        <div class="number">
                            <button class="inc qtybutton waves-effect increment-btn action-plus">+</button>
                            <input type="text" value="1" name="quantity" class="plus-minus-box qty-btn action-input">
                            <button class="dec qtybutton waves-effect decrement-btn action-minus">-</button>
                        </div>

                        <button type="button" class="btn btn-trans product-add add-cart"
                            data-url="{{ route('cart.add') }}" data-id="{{ $product->id }}">اضف للسلة</button>

                        

                        <button type="button" class="btn btn-trans addToFavouriteList"
                            data-product-id="{{ $product->id }}">اضف للمفضلة</button>
                    </div>
                </div>
                <div class="single-tabs col-xs-12">
                    <ul class="nav-tabs">
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#desc">وصف المنتج</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#review">التقييم</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#shipp">معلومات الشحن</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="desc">
                            <p>{{ $product->product_disc }}</p>

                        </div>
                        <div class="tab-pane fade" id="review">
                            @if (!$comment)
                                <div class="empty-revs">لا يوجد تعليقات الان</div>

                            @else
                                <div class="revs post-comments">


                                    <div class="rev-item">
                                        <ul id="new_comment">
                                            @foreach ($product->comments as $comment)
                                                <li>
                                                    <div class="r-img">
                                                        <img src="{{ url('assets/front') }}/images/notifications/1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="r-data">
                                                        <a href="#">{{ $comment->profile->name }}</a>
                                                        <span>منذ {{ $comment->created_at }} دقائق</span>
                                                        <p>{{ $comment->user_comment }}</p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>

                            @endif



                            <div class="add-rev">
                                <h3>اضف تقييم</h3>
                                <div class="stars">
                                    <input class="star star-5" id="star-5" type="radio" name="star">
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star">
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star">
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star">
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star">
                                    <label class="star star-1" for="star-1"></label>
                                </div>

                                <form action="" method="post">
                                    @csrf
                                    <input hidden value="{{ $product->id }}" type="text" id="product-id">
                                    <input hidden value="{{ LaravelLocalization::setLocale() }}" type="text"
                                        id="site-lang">

                                    <div class="form-group">
                                        <span>اضف رسالة</span>
                                        <textarea name="user_comment" id="user-comment-text"
                                            class="form-control"></textarea>
                                        <button type="submit" id="save-comment-btn" class="btn">ارسال</button>
                                    </div>

                                </form>
                                <div>
                                    <span class="text-danger" id="error"></span>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="shipp">
                            <h4>ما المدة الزمنية التي يستغرقها الطلب للوصول؟</h4>
                            <p>من 24 إلى 48 ساعة داخل مدينة الرياض ، أما في باقي المدن فنقوم بإيصالها في اليوم التالي من
                                تاريخ الطلب أي خلال 24 ساعة إلى شركة الشحن لتصل إلى مدينتك خلال يوم إلى ثلاثة أيام ، أما إذا
                                كان المنتج غير متوفر سنقوم بإعلام العميل متى يمكن توفير المنتج.</p>
                            <h4>كم هي تكاليف توصيل الطلب؟</h4>
                            <ul>
                                <li>رسوم التوصيل الدفع عند الإستلام : داخل الرياض 24 ريال وباقي المدن 29 ريال .</li>
                                <li>رسوم التوصيل تحويل بنكي أو فيزا : الرياض 19 ريال وباقي المدن 24 ريال .</li>
                            </ul>
                            <h4>ماهي شركات الشحن ؟</h4>
                            <p>شركة سمسا ، وشركة أرامكس .</p>
                            <h4>ماهي طرق الدفع المتاحة بالموقع؟</h4>
                            <p>الدفع عند الاستلام ، أو التحويل البنكي عبر البنوك المحلية (الراجحي ، الأهلي) ، أو عن طريق
                                البطاقة الإئتمانية (الفيزا - ماستركارد).</p>
                            <h4>ماذا بعد تحويل المبلغ؟</h4>
                            <p>بعد التأكد من تحويل العميل المبلغ المطلوب سيتم شحن المنتج أو المنتجات المطلوبة عن طريق شركات
                                الشحن (سمسا ، أرامكس) وبعد ذلك سيتم إرسال رسالة لإيميل المشتري برقم التتبع الخاص بالشحنة حتى
                                يعلم العميل أول بأول عن موعد وصول الشحنة وبذلك ينتهي عمل متجر "زاد" إلى هنا.</p>
                        </div>
                    </div>
                </div>
                <div class="latest-ads col-xs-12">
                    <ul class="nav-tabs">
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#t1">منتجات لنفس المتجر</a>
                        </li>
                    </ul>
                    <div class="l-slider owl-carousel owl-theme">
                        @foreach ($related_products as $related_product)
                            <div class="item">
                                <div class="product-i">
                                    <div class="i-img">
                                        <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                        <div class="labels">
                                            <span class="label l-blue">{{ $related_product->product_status }}</span>
                                            <span
                                                class="label l-green">{{ $related_product->percent_of_discount }}</span>
                                        </div>
                                        <div class="i-controls">
                                            <a href="#" data-tool="tooltip" title="عرض سريع">
                                                <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                            </a>
                                            <a href="#" data-tool="tooltip" class="add-cart" title="اضافة للسلة">
                                                <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                            </a>
                                            <a href="#" data-product-id="{{ $product->id }}" data-tool="tooltip"
                                                class="btn btn-trans addToFavouriteList" title="اضافة للمفضلة">
                                                <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                            </a>


                                        </div>
                                    </div>
                                    <div class="i-data">
                                        <a href="#" class="title">{{ $related_product->product_name }}</a>
                                        <div class="rate-sys">
                                            <i class="fa fa-star-half-o active"></i>
                                            <i class="fa fa-star-half-o active"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="price-sys">
                                            <span>{{ $related_product->new_price }} جنية</span>
                                            <span class="old">{{ $related_product->old_price }} جنية</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#save-comment-btn").click(function(e) {
            e.preventDefault();
            let lang = $('#site-lang').val();
            let url = "{{ route('products.send.comment') }}";
            var token = $('input[name=_token]');
            let text = $('#user-comment-text').val();

            let product_id = $('#product-id').val();
            var dt = new Date();
            let created_at = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
            if (!$('#user-comment-text').val()) {
                $('#error').html('write the comment');
            } else {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        text: text,
                        product_id: product_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': token.val()
                    },
                    success: function(data) {
                        let new_comment = `<li>
                                                <div class="r-img">
                                                    <img src="{{ url('assets/front') }}/images/notifications/1.png" alt="">
                                                </div>
                                                <div class="r-data">
                                                    <a href="#">${name}</a>
                                                    <span>منذ ${created_at} دقائق</span>
                                                    <p>${text}</p>
                                                </div>
                                            </li>

                    `;
                        $('#new_comment').append(new_comment);
                        $('#user-comment-text').val('');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
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
                    if (data.favourited)
                        $('.alert-modal').css('display', 'block');
                    else
                        $('.alert-modal2').css('display', 'block');
                    countFav();
                }
            });
        });


            
        $(document).on('click', '.close', function () {
            $('.alert-modal' ).css("display", "none");
        });

        $(document).on('click', '.close', function () {
            $('.alert-modal2').css("display", "none");
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
