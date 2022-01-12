@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png')}})">
        <div class="container">
            <h3>الرسايل</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    <a href="#"> الملف الشخصي</a>
                </li>
                <li>الرسايل</li>
            </ul>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="profile-wrap col-xs-12">
            <div class="container">
                <button type="button" class="op-pro-filter">
                    <i class="fa fa-info-circle"></i>
                    القائمة الجانبية
                </button>
                <div class="prof-sidebar col-md-3 col-xs-12">
                    <div class="inner">
                        <div class="user-info">

                            <form action="{{ route('profile.photo') }}" enctype="multipart/form-data" method="POST">

                                <div class="alert alert-danger print-error-msg" style="display:none">
                                    <ul></ul>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @csrf

                                <div class="prof-img">
                                    <label>
                                        <i class="fa fa-camera"></i>
                                        <span>{{ trans('front.change') }}</span>
                                        <input type="file" name="user_photo"
                                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                        @if ($profile->user_photo === null)
                                            <img src="https://ui-avatars.com/api/?background=random&name={{ $profile->name ?? '--' }}"
                                                id="blah" alt="your image">
                                        @else
                                            <img src="{{ url('Uploads/users') }}/{{ $profile->user_photo }}" id="blah"
                                                alt="your image">
                                        @endif


                                    </label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success upload-image" type="submit">
                                        {{ trans('front.upload_image') }}

                                    </button>
                                </div>
                            </form>


                            <h3>{{ $profile->name ?? '--' }}</h3>
                            <p>{{ $userId->email ?? '--' }}</p>
                            <p>{{ $userId->mobile ?? '--' }}</p>
                        </div>
                        <div class="user-links">
                            <ul>
                                <li class="my_profile">
                                    <a href="#">
                                        <img src="{{ url('assets/front') }}/images/user-icons/1.png" alt="">
                                        @lang('front.profile')
                                    </a>
                                </li>
                                <li class="my_store">
                                    <a href="#">
                                        <img src="{{ url('assets/front') }}/images/user-icons/2.png" alt="">
                                        @lang('front.mystore')
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ url('assets/front') }}/images/user-icons/3.png" alt="">
                                        اعلاناتى
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ url('assets/front') }}/images/user-icons/4.png" alt="">
                                        قائمة المتابعه
                                    </a>
                                </li>
                                <li class="my_orders">
                                    <a href="#">
                                        <img src="{{ url('assets/front') }}/images/user-icons/5.png" alt="">
                                        طلباتى
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{route('user.Chat',$profile->id)}}">
                                        <img src="{{ url('assets/front') }}/images/user-icons/6.png" alt="">
                                        الرسائل
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}">
                                        <img src="{{ url('assets/front') }}/images/user-icons/7.png" alt="">
                                        {{ trans('front.logout') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="prof-content col-md-9 col-xs-12">
                    <div class="min-head col-xs-12">
                        <h3>الرسائل</h3>
                    </div>
                    <div class="chat-wrap col-xs-12">
                        @foreach ($stores as $store )
                            <div class="ch-itm col-xs-12">
                                <a href="{{route('user.chat.WithStore',$store->id)}}" class="ms-title">
                                    <div class="i-img">
                                        <img src="{{ url('assets/front') }}/images/products/matgr.png" alt="">
                                    </div>
                                    <span>{{$store->store_name}}</span>
                                </a>
                                <a href="#" class="rem">
                                    <img src="{{ url('assets/front') }}/images/delete.svg" alt="">
                                </a>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
