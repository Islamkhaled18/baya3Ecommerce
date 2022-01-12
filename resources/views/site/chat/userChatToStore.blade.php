@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>رسائل الشامسي للاكترونيات</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    <a href="#"> الملف الشخصي</a>
                </li>
                <li>
                    <a href="#">الرسايل</a>
                </li>
                <li> الشامسي للاكترونيات</li>
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
                                    <a href="{{ route('user.Chat', $profile->id) }}">
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
                        <h3>الرسائل
                            <span> {{$stores->store_name}}</span>
                        </h3>
                        <div class="msg-search">
                            <a href="javascript:void(0)" class="op-msg-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="search-form">
                                <form action="#" method="get">
                                    <a href="javascript:void(0)" class="cl-msg-search">
                                        <i class="fa fa-close"></i>
                                    </a>
                                    <input type="search" class="form-control" placeholder="ابحث في الرسائل">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="msg-wrap col-xs-12">
                        <div class="msg-inner" id="chat">
                            @if (!$chats)
                                <div class="msg-empty">
                                    <p>لا يوجد لديك رسائل</p>
                                </div>
                            @else

                                @foreach ($chats as $chat)
                                @php
                                    $user = App\Models\Chat::where('user_id',auth()->user()->id)->get();
                                    $store = App\Models\Chat::where('store_id',$chat->id)->get();
                                @endphp
                                   
                                    <div class="msg-item {{auth()->user()->id == $chat->user_id ? '' :'outer'}}">
                                        <div class="msg-auth">
                                            @if(auth()->user()->id == $chat->user_id )
                                                <div class="au-img">
                                                    <a href="#">
                                                        <img src="{{ url('Uploads/users') }}/{{ $profile->user_photo }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            @else
                                                <div class="au-img">
                                                   

                                                    @if ($stores->store_logo_image === null)
                                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $stores->store_name ?? '--' }}"
                                                            id="blah" alt="your image">
                                                    @else
                                                        <img src="{{ url('Uploads/stores') }}/{{ $stores->store_logo_image }}" id="blah"
                                                            alt="your image">
                                                    @endif
                                                </div>
                                            @endif

                                            @if(auth()->user()->id == $chat->user_id )
                                                <div class="au-data">
                                                    <a href="#">{{$profile->name}}</a>
                                                    <p>
                                                        <span>{{$chat->created_at}}</span>
                                                    </p>
                                                </div>
                                            @else
                                                <div class="au-data">
                                                    <a href="#">{{$stores->store_name}}</a>
                                                    <p>
                                                        <span>{{$chat->created_at}}</span>
                                                    </p>
                                                </div>
                                            @endif

                                        </div>
                                        @if (auth()->user()->id == $chat->user_id)
                                            <div class="msg-body">
                                                <p>{{$chat->body}}</p>
                                            </div>
                                            
                                        @else
                                            <div class="msg-body">
                                                <p>{{$chat->body}}</p>
                                            </div>
                                        @endif
                                        
                                    </div>

                                    {{-- <div class="msg-item outer">
                                        <div class="msg-auth">
                                            <div class="au-img">
                                                <a href="#">
                                                    <img src="{{ url('assets/front') }}/images/products/matgr.png"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="au-data">
                                                <a href="#">{{$stores->store_name  ?? '--'}}</a>
                                                <p>
                                                    <span>{{$chat->created_at ?? '--'}}<span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="msg-body">
                                            <p>{{$chat->body ?? '--'}}</p>
                                        </div>
                                    </div> --}}

                                @endforeach
                            @endif

                        </div>
                        <div class="msg-field">
                            <form action="#" class="d-flex" method="post">
                                @csrf
                                <input hidden value="{{ $userId->id }}" type="text" id="user-id">
                                <input hidden value="{{ $stores->id }}" type="text" id="store-id">
                                <input hidden value="{{ $profile->id }}" type="text" id="profile-id">

                                <input hidden value="{{ LaravelLocalization::setLocale() }}" type="text"
                                    id="site-lang">

                                <div class="form-group">
                                    <input type="text" name="body" id="chat-text" class="form-control" placeholder="رسالتك"/>
                                    <button class="btn" id="send-message" >
                                        <i class="fa fa-paper-plane-o"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('script')

    <script>
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        setInterval(function() {
        
            $("#chat").load(window.location.href + " #chat");
        
        }, 1000);
  
        $("#send-message").click(function(e) {
            e.preventDefault();
            let lang = $('#site-lang').val();
            url ="{{ route('message.store') }}";
            var token = $('input[name=_token]');
            let text = $('#chat-text').val();
            
            let user_id = $('#user-id').val();
            let store_id = $('#store-id').val();
            let profile_id = $('#profile-id').val();

            var dt = new Date();
            let created_at = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
            if (!$('#chat-text').val()) {
                $('#error').html('write the message');
            } else {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        body: text,
                        store_id: store_id,
                        user_id: user_id,
                        profile_id: profile_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': token.val()
                    },
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        });
        
    </script>

@endsection



