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
        <div class="login-wrap col-xs-12">
            <div class="login-info col-md-6 col-xs-12">
                <div class="inner">
                    <div class="log-caption">
                        <img src="{{ url('assets/front') }}/images/logo.png" alt="">
                        <p>نسعى أن نكون
                            عالمك الإفتراضى فى التجارة الإلكترونية
                            حلقة وصل البائع والمشترى</p>
                    </div>
                    <div class="reset-caption">
                        <img src="{{ url('assets/front') }}/images/lock.png" alt="">
                    </div>
                </div>
            </div>
            <div class="login-form col-md-6 col-xs-12">
                <a href="index.html" class="cl-form">
                    <span></span>
                    <span></span>
                </a>
                
                    <ul class="nav-tabs">
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#login">تسجيل الدخول</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#reset">نسيت كلمه السر</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#register">تسجيل جديد</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="login">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" placeholder="البريد الالكترونى" class="form-control"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" placeholder="الرقم السرى" class="form-control"
                                        id="password-field" name="password" required autocomplete="current-password">
                                    <button type="button" class="show-pass" toggle="#password-field">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span>تذكرنى</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn">دخول</button>
                                    <p>
                                        @if (Route::has('password.request'))
                                        <a href="javascript:void(0)" class="op-reset">هل نسيت كلمة السر؟</a>
                                        @endif
                                    </p>
                                </div>
                            </form>
                        </div>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf


                            <div class="tab-pane fade" id="reset">
                                <h4>اكتب البريد الالكترونى ليصلك رساله لاعادة تعين كلمة السر</h4>

                                <div class="form-group">
                                    <input type="email" placeholder="البريد الالكترونى" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn submit-payment">ارسال</button>
                                </div>

                            </div>
                        </form>



                        <div class="tab-pane fade" id="register">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" placeholder="البريد الالكترونى" class="form-control"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="رقم الهاتف" class="form-control" name="mobile"
                                        value="{{ old('mobile') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="الرقم السرى" class="form-control"
                                        id="password-field1" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button type="button" class="show-pass1" toggle="#password-field1">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="إعادة الرقم السرى" class="form-control"
                                        id="password-field2" name="password_confirmation" required
                                        autocomplete="new-password">
                                    <button type="button" class="show-pass2" toggle="#password-field2">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                                {{-- <div class="form-group">
                                    <label>
                                        <input type="checkbox">
                                        <span>
                                            أوافق على <a href="#">الشروط والاحكام</a>
                                        </span>

                                    </label>
                                </div> --}}
                                <div class="form-group">
                                    <button type="submit" class="btn">تسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    <div id="pop-outer">
        <div class="out-load">
            <div class="inner">
                <img src="{{ url('assets/front') }}/images/success.png" alt="">
                <p>تم ارسال رسالة الى بريدك الالكترونى
                    من فضلك اضغط على الرابط
                    المرسل لاستكمال التفعيل </p>
            </div>
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
    <script src="{{ url('assets/front') }}/js/select2.full.min.js"></script>
    <script src="{{ url('assets/front') }}/js/script.js"></script>
    <script>
        $('.submit-payment').click(function() {
            $('#pop-outer').addClass('active');
        });

        $('.op-reset').click(function() {
            $('.login-wrap .login-info, .login-wrap .login-form').addClass('active');
            $('.login-wrap .login-form .nav-tabs li:nth-of-type(2)').addClass('active').siblings().removeClass(
                'active');
            $('#reset').addClass('active in');
            $('#login, #register').removeClass('active in');
            $('.cl-form').attr('href', 'javascript:void(0)');
        });

        $('.cl-form').click(function() {
            $(this).attr('href', 'index.html');
            $('.login-wrap .login-form .nav-tabs li:nth-of-type(2), .login-wrap .login-info, .login-wrap .login-form, #reset, #register')
                .removeClass('active');
            $('.login-wrap .login-form .nav-tabs li:nth-of-type(1), #login').addClass('active');
        });
    </script>
</body>

</html>

{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
