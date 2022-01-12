<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>Baya3 | Online Store</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Files -->
    <link href="{{ url('assets/front') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('assets/front') }}/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!--    <link href="css/style-en.css" rel="stylesheet">-->
    <link href="{{ url('assets/front') }}/css/style-res.css" rel="stylesheet">


    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('assets/front') }}/images/faveicon.png">

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
                                <a href="javascript:void(0)">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="badgo">3</span>
                                    سلة الطلبات
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="badgo">3</span>
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
            <div class="h-mid col-xs-12">
                <div class="container">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ url('assets/front') }}/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="block-search">
                        <form action="#" method="get">
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected disabled>كل الاقسام</option>
                                    <option>رجالي</option>
                                    <option>نسائي</option>
                                    <option>اطفالي</option>
                                </select>
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
                        <a href="#" class="btn btn-trans">
                            <img src="{{ url('assets/front') }}/images/icons/add-store.png" alt="">
                            <span>اضافة متجر</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-bottom col-xs-12">
                <div class="container">
                    <ul class="main-nav">
                        <li class="current-menu-item">
                            <a href="#">الرئيسية</a>
                        </li>
                        <li>
                            <a href="#">نبذه عنا</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">الاقسام</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">اكسسوارات رجالي</a>
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
                    <div class="block-user">
                        <ul class="notification-menu">
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badgo">3</span>
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
                                            <div class="menu-content">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ url('assets/front') }}/images/notifications/1.png"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ url('assets/front') }}/images/notifications/2.png"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ url('assets/front') }}/images/notifications/3.png"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ url('assets/front') }}/images/notifications/4.png"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ url('assets/front') }}/images/notifications/5.png"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
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
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <img src="{{ url('assets/front') }}/images/user-icons/7.png" alt="">
                                            تسجيل الدخول
                                        </a>
                                    </li>

                                </ul>
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
                    <form action="#" method="get">
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
        <main class="main-content col-xs-12">
            <div class="hero-s col-xs-12">
                <div class="container">
                    <div class="hero-inner col-md-9 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
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
                                <h3>اخر العروض</h3>
                            </div>
                            <div class="latest-body">
                                <div class="latest-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product-i">
                                            <div class="i-img">
                                                <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                                <div class="labels">
                                                    <span class="label l-blue">جديد</span>
                                                    <span class="label l-green">-10%</span>
                                                </div>
                                            </div>
                                            <div class="i-data">
                                                <a href="#" class="title">ساعه ذكية من هواوى</a>
                                                <div class="rate-sys">
                                                    <i class="fa fa-star-half-o active"></i>
                                                    <i class="fa fa-star-half-o active"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="price-sys">
                                                    <span>400 جنية</span>
                                                    <span class="old">900 جنية</span>
                                                </div>
                                            </div>
                                            <div class="i-count">
                                                <div class="count-down" data-countdown-year="2020"
                                                    data-countdown-month="6" data-countdown-day="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-i">
                                            <div class="i-img">
                                                <img src="{{ url('assets/front') }}/images/products/2.png" alt="">
                                                <div class="labels">
                                                    <span class="label l-blue">جديد</span>
                                                    <span class="label l-green">-10%</span>
                                                </div>
                                            </div>
                                            <div class="i-data">
                                                <a href="#" class="title">ساعه ذكية من هواوى</a>
                                                <div class="rate-sys">
                                                    <i class="fa fa-star-half-o active"></i>
                                                    <i class="fa fa-star-half-o active"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="price-sys">
                                                    <span>400 جنية</span>
                                                    <span class="old">900 جنية</span>
                                                </div>
                                            </div>
                                            <div class="i-count">
                                                <div class="count-down1" data-countdown-year="2020"
                                                    data-countdown-month="8" data-countdown-day="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cat-s col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>تسوق عبر الاقسام</h3>
                    </div>
                    <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="cat-slider owl-carousel owl-theme">
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q1.png') }})">

                                            <span>مكملات غذائية</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q2.png') }})">
                                            <span>نظارات</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q3.png') }})">
                                            <span>شنط حريمى</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q4.png') }})">
                                            <span>دهب وفضة</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q5.png') }})">
                                            <span>ساعات</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q6.png') }})">
                                            <span>ملابس نسائية</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <a href="#">
                                        <div class="s-img"
                                            style="background-image: url({{ asset('assets/front/images/sectors/q1.png') }})">
                                            <span>مكملات غذائية</span>
                                        </div>
                                        <h3>
                                            <img src="{{ url('assets/front') }}/images/icons/dropdown-store.png"
                                                alt="">
                                            يوجد 10 متاجر داخل القسم
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-ads col-xs-12">
                <div class="container">
                    <ul class="nav-tabs col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#t1">اخر الإعلانات المضافة</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#t2">اخر المحلات المضافة</a>
                        </li>
                    </ul>
                    <div class="tab-content col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="tab-pane fade active in" id="t1">
                            <div class="l-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="product-i">
                                        <div class="i-img">
                                            <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                            <div class="labels">
                                                <span class="label l-blue">جديد</span>
                                                <span class="label l-green">-10%</span>
                                            </div>
                                            <div class="i-controls">
                                                <a href="#" data-tool="tooltip" title="عرض سريع">
                                                    <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="i-data">
                                            <a href="#" class="title">ساعه ذكية من هواوى</a>
                                            <div class="rate-sys">
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="price-sys">
                                                <span>400 جنية</span>
                                                <span class="old">900 جنية</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-i">
                                        <div class="i-img">
                                            <img src="{{ url('assets/front') }}/images/products/2.png" alt="">
                                            <div class="labels">
                                                <span class="label l-blue">جديد</span>
                                                <span class="label l-green">-10%</span>
                                            </div>
                                            <div class="i-controls">
                                                <a href="#" data-tool="tooltip" title="عرض سريع">
                                                    <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="i-data">
                                            <a href="#" class="title">ساعه ذكية من هواوى</a>
                                            <div class="rate-sys">
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="price-sys">
                                                <span>400 جنية</span>
                                                <span class="old">900 جنية</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-i">
                                        <div class="i-img">
                                            <img src="{{ url('assets/front') }}/images/products/3.png" alt="">
                                            <div class="labels">
                                                <span class="label l-blue">جديد</span>
                                                <span class="label l-green">-10%</span>
                                            </div>
                                            <div class="i-controls">
                                                <a href="#" data-tool="tooltip" title="عرض سريع">
                                                    <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="i-data">
                                            <a href="#" class="title">ساعه ذكية من هواوى</a>
                                            <div class="rate-sys">
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="price-sys">
                                                <span>400 جنية</span>
                                                <span class="old">900 جنية</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-i">
                                        <div class="i-img">
                                            <img src="{{ url('assets/front') }}/images/products/4.png" alt="">
                                            <div class="labels">
                                                <span class="label l-blue">جديد</span>
                                                <span class="label l-green">-10%</span>
                                            </div>
                                            <div class="i-controls">
                                                <a href="#" data-tool="tooltip" title="عرض سريع">
                                                    <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="i-data">
                                            <a href="#" class="title">ساعه ذكية من هواوى</a>
                                            <div class="rate-sys">
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="price-sys">
                                                <span>400 جنية</span>
                                                <span class="old">900 جنية</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-i">
                                        <div class="i-img">
                                            <img src="{{ url('assets/front') }}/images/products/5.png" alt="">
                                            <div class="labels">
                                                <span class="label l-blue">جديد</span>
                                                <span class="label l-green">-10%</span>
                                            </div>
                                            <div class="i-controls">
                                                <a href="#" data-tool="tooltip" title="عرض سريع">
                                                    <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                                    <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="i-data">
                                            <a href="#" class="title">ساعه ذكية من هواوى</a>
                                            <div class="rate-sys">
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="price-sys">
                                                <span>400 جنية</span>
                                                <span class="old">900 جنية</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t2">
                            <div class="l-slider owl-carousel owl-theme">
                                <div class="block">
                                    <div class="b-inner">
                                        <div class="b-img">
                                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                                            <a href="#">
                                                <img src="{{ url('assets/front') }}/images/icons/ok.png" alt="">
                                            </a>
                                        </div>
                                        <div class="b-data">
                                            <h4>متابعة</h4>
                                            <a href="#">
                                                محل المدينة المنورة
                                                <span>(للساعات)</span>
                                            </a>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                المهندسين
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block">
                                    <div class="b-inner">
                                        <div class="b-img">
                                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                                            <a href="#">
                                                <img src="{{ url('assets/front') }}/images/icons/ok.png" alt="">
                                            </a>
                                        </div>
                                        <div class="b-data">
                                            <h4>متابعة</h4>
                                            <a href="#">
                                                محل المدينة المنورة
                                                <span>(للساعات)</span>
                                            </a>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                المهندسين
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block">
                                    <div class="b-inner">
                                        <div class="b-img">
                                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                                            <a href="#">
                                                <img src="{{ url('assets/front') }}/images/icons/ok.png" alt="">
                                            </a>
                                        </div>
                                        <div class="b-data">
                                            <h4>متابعة</h4>
                                            <a href="#">
                                                محل المدينة المنورة
                                                <span>(للساعات)</span>
                                            </a>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                المهندسين
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block">
                                    <div class="b-inner">
                                        <div class="b-img">
                                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                                            <a href="#">
                                                <img src="{{ url('assets/front') }}/images/icons/ok.png" alt="">
                                            </a>
                                        </div>
                                        <div class="b-data">
                                            <h4>متابعة</h4>
                                            <a href="#">
                                                محل المدينة المنورة
                                                <span>(للساعات)</span>
                                            </a>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                المهندسين
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block">
                                    <div class="b-inner">
                                        <div class="b-img">
                                            <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                                            <a href="#">
                                                <img src="{{ url('assets/front') }}/images/icons/ok.png" alt="">
                                            </a>
                                        </div>
                                        <div class="b-data">
                                            <h4>متابعة</h4>
                                            <a href="#">
                                                محل المدينة المنورة
                                                <span>(للساعات)</span>
                                            </a>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                المهندسين
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spec-ads col-xs-12"
                style="background-image: url({{ asset('assets/front/images/ads/1.png') }})">
                <a href="#"></a>
            </div>
            <div class="daily col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>العروض اليومية</h3>
                        <a href="#">عرض الكل</a>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/1.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/2.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/3.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="500">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/4.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/5.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="700">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/6.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="800">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/7.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="900">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/8.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spec-ads col-xs-12"
                style="background-image: url({{ asset('assets/front/images/ads/2.png') }})">
                <a href="#"></a>
            </div>
            <div class="daily newest col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>وصل حديثا</h3>
                        <a href="#">عرض الكل</a>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/9.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/10.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/11.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="500">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/12.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/13.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="700">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/14.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="800">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/15.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="900">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/2.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="disc-ads col-xs-12"
                style="background-image: url({{ asset('assets/front/images/ads/4.png') }})">
                <div class="container">
                    <div class="cap">
                        <span class="label l-yellow" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">خصم 35%</span>
                        <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">تألقى بأفضل واجود أنواع
                            العطور</h3>
                        <a href="#" class="btn" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">تسوق الان</a>
                    </div>
                </div>
            </div>
            <div class="daily the-most col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>الأكثر مبيعا</h3>
                        <a href="#">عرض الكل</a>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/9.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/10.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/11.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="500">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/12.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/13.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="700">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/14.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="800">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/15.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="900">
                            <div class="product-i">
                                <div class="i-img">
                                    <img src="{{ url('assets/front') }}/images/products/2.png" alt="">
                                    <div class="labels">
                                        <span class="label l-blue">جديد</span>
                                        <span class="label l-green">-10%</span>
                                    </div>
                                    <div class="i-controls">
                                        <a href="#" data-tool="tooltip" title="عرض سريع">
                                            <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                            <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                        </a>
                                        <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                            <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">ساعه ذكية من هواوى</a>
                                    <div class="rate-sys">
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o active"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="price-sys">
                                        <span>400 جنية</span>
                                        <span class="old">900 جنية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="sm-ads col-xs-12">
                <div class="container">
                    <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="inner"
                            style="background-image: url({{ asset('assets/front/images/sm-ads/1.png') }})">
                            <h3>افضل غساله اوتوماتيك</h3>
                            <p> %خصم 35</p>
                            <a href="#" class="btn">تسوق الان</a>
                        </div>
                    </div>
                    <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="inner"
                            style="background-image: url({{ asset('assets/front/images/sm-ads/2.png') }})">
                            <h3>افضل غساله اوتوماتيك</h3>
                            <p> %خصم 35</p>
                            <a href="#" class="btn">تسوق الان</a>
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
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
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
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
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
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
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

</body>

</html>
