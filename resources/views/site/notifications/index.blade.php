@extends('layouts.app')

@section('content')

    <div class="store-cover col-xs-12">
        <div class="cover-top col-xs-12">
            <button type="button" class="upload-cover">
                <i class="fa fa-camera"></i>
                <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </button>
            <img src="{{ url('assets/front') }}/images/cover.png" id="blah" alt="">
        </div>
        <div class="cover-bottom col-xs-12">
            <div class="container">
                <div class="st-info">
                <div class="st-prof-pic">
                    <button type="button" class="upload-prof">
                        <i class="fa fa-camera"></i>
                        <span>تحديث</span>
                        <input type="file" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                    </button>
                    <img src="{{ url('assets/front') }}/images/products/matgr.png" id="blah1" alt="">
                </div>
                <div class="st-prof-data">
                    <h3>{{$stores->store_name ?? '--' }}</h3>
                    <span>({{$stores->store_type ?? '--' }})</span>
                </div>
            </div>
            <div class="st-actions">
                <a href="{{route('notification')}}">
                    الاشعارات 10
                    <i class="fa fa-bell-o"></i>
                </a>
                <a href="{{route('store.chat.withUser')}}">
                    الرسائل {{App\Models\Chat::count()}}
                    <i class="fa fa-comment-o"></i>
                </a>
                <a href="#">
                    المتابعين
                    <i class="fa fa-group"></i>
                </a>
            </div>
            </div>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="profile-wrap store-wrap col-xs-12">
            <div class="container">
                <div class="prof-content col-xs-12">
                    <div class="min-head col-xs-12">
                        <h3>الاشعارات</h3>
                    </div>
                    <div class="min-body col-xs-12">
                        <div class="h-bottom col-xs-12">
                            <div class="block-user">
                                <div class="empty-not">
                                    <p>لا توجد اشعارات</p>
                                </div>
                                <ul class="notification-menu">
                                    <li class="menu-item-has-children">
                                        <ul class="sub-menu">
                                            <li>
                                                <div class="menu-inner">
                                                    <div class="menu-content">
                                                        <ul>
                                                            @foreach (auth()->user()->Notifications as $notification )

                                                                <li class="not-read">
                                                                    <a href="#">
                                                                        <img src="{{ url('assets/front') }}/images/notifications/1.png"
                                                                            alt="">
                                                                        <div class="a_user">
                                                                            
                                                                            <p>{{$notification->data['title']}}</p>
                                                                            <b>منذ {{$notification->created_at}} دقائق</b>
                                                                        </div>
                                                                    </a>
                                                                    <button type="button" class="cl-not">
                                                                        <i class="fa fa-close"></i>
                                                                    </button>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('script')

    <script>
        $('.cl-not').click(function () {
        $(this).parent('li').remove(); 
        });
    </script>
@endsection