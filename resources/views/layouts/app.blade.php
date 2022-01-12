<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>Baya3 | Online Store</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- user -id -->
    <meta name="user-id" content="{{ auth()->user()->id ?? '--' }}">

    <!-- Css Files -->
    <link href="{{ url('assets/front') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('assets/front') }}/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!--    <link href="css/style-en.css" rel="stylesheet">-->
    <link href="{{ url('assets/front') }}/css/style-res.css" rel="stylesheet">


    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('assets/front') }}/images/faveicon.png">


    @yield('head')

</head>

<body>

    <div id="loading">
        <div class="loading">
            <div class="inner">
                <img src="{{ url('assets/front') }}/images/logo.png" alt="" data-aos="fade-right"
                    data-aos-duration="500">
            </div>
        </div>
    </div>

    <div class="wrapper col-xs-12">
        <header class="main-head col-xs-12">
            <div class="h-top col-xs-12">
                <div class="container">
                    <div class="prods-backet">
                        <ul>
                            <li>
                                <a href="{{ route('cart') }}">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="badgo cart-count">{{ Cart::count() }}</span>
                                    سلة الطلبات
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('favouritelist.product.index') }}">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="badgo countFavProd">0</span>
                                    السلع المفضلة
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-addition">
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-globe"></i>
                                    اللغة : عربي
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">عربي</a>
                                    </li>
                                    <li>
                                        <a href="#">english</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="h-mid col-xs-12">
                <div class="container">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ url('assets/front') }}/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="block-search">
                        <form action="{{ route('search') }}" method="post">
                            @csrf
                            <div class="form-group">

                                <input type="search" class="form-control" placeholder="اكتب بحثك هنا">
                                <button type="submit" class="btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="block-additional">
                        <a href="#" class="btn btn-trans">
                            <img src="{{ url('assets/front') }}/images/icons/add-ad.png" alt="">
                            <span>اضافة اعلان</span>
                        </a>
                        <a href="{{ route('profile.user', auth()->user()->id) }}" class="btn btn-trans">
                            <img src="{{ url('assets/front') }}/images/icons/add-store.png" alt="">
                            <span>{{ trans('front.add_store') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-bottom col-xs-12">
                <div class="container">
                    <ul class="main-nav">
                        <li class="current-menu-item">
                            <a href="{{ route('home') }}">{{ trans('front.home') }}</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="{{ route('AllCategories') }}">{{trans('dashboard.all_products')}}</a>

                            {{-- <ul class="sub-menu">

                                @isset($categories)
                                    @foreach ($categories as $category)
                                        <li class="menu-item-has-children">
                                            <a
                                                href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                            {{-- <ul class="sub-menu">
                                                <li>
                                                    @isset($category->childrens)
                                                        @foreach ($category->childrens as $children)
                                                            <a
                                                                href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ $children->category_name }}</a>
                                                            <ul class="sub-menu">
                                                                @isset($children->childrens)
                                                                    @foreach ($children->childrens as $_children)
                                                                        <li>
                                                                            <a
                                                                                href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ $_children->category_name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                @endisset
                                                            </ul>
                                                        @endforeach
                                                    @endisset
                                                </li>
                                            </ul> --}}

                                        {{-- </li>
                                    @endforeach
                                @endisset

                            </ul> --}}

                        </li>
                        <li>
                            <a href="{{ route('store.allStores') }}">{{ trans('front.stores') }}</a>
                        </li>

                    </ul>
                    <div class="block-user">
                        <ul class="notification-menu">
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badgo" id="notifications_count">
                                        {{ auth()->user()->Notifications->count() }}
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="menu-inner">
                                            <div class="menu-top">
                                                <h4>الاشعارات</h4>
                                                <a href="#">
                                                    <i class="fa fa-bell-o"></i>
                                                </a>
                                            </div>
                                            <div class="menu-content" id="notifications_content">
                                                <ul>
                                                    @foreach (auth()->user()->Notifications as $notification)
                                                        <li>
                                                            <a href="#">
                                                                <img src="{{ url('assets/front') }}/images/notifications/1.png"
                                                                    alt="">
                                                                <div class="a_user">

                                                                    <p>{{ $notification->data['title'] }}</p>
                                                                    <b>منذ {{ $notification->created_at }} دقائق</b>
                                                                </div>
                                                            </a>
                                                        </li>

                                                    @endforeach


                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="info-user">
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <img src="{{ url('assets/front') }}/images/user-icons/visitor-img.png" alt="">
                                    حسابي
                                </a>
                                @auth
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ route('profile.user', auth()->user()->id) }}">
                                                <i class="la la-user"></i>
                                                {{ trans('front.my_account') }}
                                            </a>
                                        <li>
                                            <a href="{{ route('logout') }}">{{ trans('front.logout') }}</a>
                                        </li>

                                </li>

                            </ul>
                        @endauth
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <header class="mob-head col-xs-12">
            <div class="m-top col-xs-12">
                <div class="container">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ url('assets/front') }}/images/logo.png" alt="">
                        </a>
                    </div>
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <input type="search" class="form-control" placeholder="اكتب بحثك هنا">
                        <button type="submit" class="btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="m-mid col-xs-12">
                <a href="javascript:void(0)" class="op-menu">
                    <i class="fa fa-bars"></i>
                    تسوق
                </a>
                <a href="javascript:void(0)">
                    <i class="fa fa-bullhorn"></i>
                    اعلان
                </a>
                <a href="javascript:void(0)">
                    <i class="fa fa-bank"></i>
                    متجر
                </a>
                <a href="javascript:void(0)" class="op-cart">
                    <i class="fa fa-shopping-basket"></i>
                    السلة
                </a>
            </div>
            <div class="main-sticky">
                <button type="button" class="off-menu">
                    <i class="fa fa-close"></i>
                </button>
                <ul class="nav-tabs">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t11">
                            <i class="fa fa-bars"></i>
                            الاقسام
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab" data-target="#t22">
                            <i class="fa fa-user"></i>
                            المستخدم
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab" data-target="#t33">
                            <i class="fa fa-cog"></i>
                            اعدادات
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="t11">
                        <ul>
                            <li class="current-menu-item">
                                <a href="#">الرئيسية</a>
                            </li>
                            <li>
                                <a href="#">نبذه عنا</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">الاقسام</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">اكسسوارات رجالي</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                        alt="">
                                                    محل محمود للساعات
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                        alt="">
                                                    محل محمود للساعات
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                        alt="">
                                                    محل محمود للساعات
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                        alt="">
                                                    محل محمود للساعات
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">اكسسورات حريمي</a>
                                    </li>
                                    <li>
                                        <a href="#">ملابس رجالي</a>
                                    </li>
                                    <li>
                                        <a href="#">ملابس اطفال</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">المتاجر</a>
                            </li>
                            <li>
                                <a href="#">شروط البيع</a>
                            </li>
                            <li>
                                <a href="#">سياسة الاسترجاع</a>
                            </li>
                            <li>
                                <a href="#">الشحن والتوصيل</a>
                            </li>
                            <li>
                                <a href="#">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="t22">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/1.png" alt="">
                                    حسابي
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/2.png" alt="">
                                    متجري
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/3.png" alt="">
                                    اشعاراتي
                                    <span class="badgo">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/3.png" alt="">
                                    اعلاناتي
                                    <span class="badgo">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/4.png" alt="">
                                    قائمة المتابعة
                                    <span class="badgo">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/5.png" alt="">
                                    طلباتي
                                    <span class="badgo">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/6.png" alt="">
                                    الرسائل
                                    <span class="badgo">7</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ url('assets/front') }}/images/user-icons/7.png" alt="">
                                    تسجيل الخروج
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="t33">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-heart"></i>
                                    <span class="badgo">3</span>
                                    السلع المفضلة
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-globe"></i>
                                    اللغة : عربي
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">عربي</a>
                                    </li>
                                    <li>
                                        <a href="#">english</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-usd"></i>
                                    LE : العملة
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">جنيه مصري (LE)</a>
                                    </li>
                                    <li>
                                        <a href="#">دولار امريكي (USD)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')


        <footer class="main-footer col-xs-12">
            <div class="f-top col-xs-12">
                <div class="container">
                    <div class="f-item col-md-3 col-xs-12">
                        <h4>معلومات</h4>
                        <ul>
                            <li>
                                <a href="#">من نحن</a>
                            </li>
                            <li>
                                <a href="#">الشحن والتوصيل</a>
                            </li>
                            <li>
                                <a href="#">الخصوصية</a>
                            </li>
                            <li>
                                <a href="#">شروط الاستخدام</a>
                            </li>
                        </ul>
                    </div>
                    <div class="f-item col-md-3 col-xs-12">
                        <h4>خدمة العملاء</h4>
                        <ul>
                            <li>
                                <a href="#">اتصل بنا</a>
                            </li>
                            <li>
                                <a href="#">إرجاع الطلب</a>
                            </li>
                            <li>
                                <a href="#">خريطة الموقع</a>
                            </li>
                            <li>
                                <a href="#">العروض المميزة</a>
                            </li>
                        </ul>
                    </div>
                    <div class="f-item col-md-3 col-xs-12">
                        <h4>اضافات</h4>
                        <ul>
                            <li>
                                <a href="#">المتاجر</a>
                            </li>
                            <li>
                                <a href="#">قسائم الهدايا</a>
                            </li>
                            <li>
                                <a href="#">نظام الاشتراكات</a>
                            </li>
                            <li>
                                <a href="#">العروض المميزة</a>
                            </li>
                        </ul>
                    </div>
                    <div class="f-item col-md-3 col-xs-12">
                        <h4>حسابي</h4>
                        <ul>
                            <li>
                                <a href="#">حسابي</a>
                            </li>
                            <li>
                                <a href="#">طلباتي</a>
                            </li>
                            <li>
                                <a href="#">قائمة رغباتي</a>
                            </li>
                            <li>
                                <a href="#">القائمة البريدية</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="f-mid col-xs-12">
                <div class="container">
                    <h3>حمل التطبيق الان</h3>
                    <a href="#" class="btn">
                        <img src="{{ url('assets/front') }}/images/icons/google.png" alt="">
                        GOOGLE PLAY
                    </a>
                    <a href="#" class="btn">
                        <img src="{{ url('assets/front') }}/images/icons/apple.png" alt="">
                        APP STORE
                    </a>
                </div>
            </div>
            <div class="f-bottom col-xs-12">
                <div class="container">
                    <p>جميع الحقوق محفوظة لمتجر بياع اون لاين &copy; 2020</p>
                    <p class="rights">
                        تصميم وبرمجة شركة
                        <a href="#">
                            <img src="{{ url('assets/front') }}/images/dev.png" alt="">
                        </a>
                    </p>
                </div>
            </div>
        </footer>
        <div class="toTop">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>

    <!-- Javascript Files -->
    <script src="{{ url('assets/front') }}/js/jquery-2.2.2.min.js"></script>
    <script src="{{ url('assets/front') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('assets/front') }}/js/aos.js"></script>
    <script src="{{ url('assets/front') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('assets/front') }}/js/countdown.js"></script>
    <script src="{{ url('assets/front') }}/js/jquery.fancybox.min.js"></script>
    <script src="{{ url('assets/front') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('assets/front') }}/js/jquery.plugin.min.js"></script>
    <script src="{{ url('assets/front') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ url('assets/front') }}/js/jquery.countdown.min-ar.js"></script>
    <script src="{{ url('assets/front') }}/js/jquery-ui.js"></script>
    <script src="{{ url('assets/front') }}/js/script.js"></script>
    <script>
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

        setInterval(function() {
            $("#notifications_count").load(window.location.href + " #notifications_count");
            $("#notifications_content").load(window.location.href + " #notifications_content");

        }, 5000);
    </script>


    @yield('script')

</body>

</html>
