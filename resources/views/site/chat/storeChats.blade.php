@extends('layouts.app')

@section('content')

    <div class="store-cover col-xs-12">
        <div class="cover-top col-xs-12">
            <button type="button" class="upload-cover">
                <i class="fa fa-camera"></i>
                <input type="file"
                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
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
                            <input type="file"
                                onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                        </button>
                        <img src="{{ url('assets/front') }}/images/products/matgr.png" id="blah1" alt="">
                    </div>
                    <div class="st-prof-data">
                        <h3>محل المدينة المنورة</h3>
                        <span>(ساعات)</span>
                    </div>
                </div>
                <div class="st-actions">
                    <a href="#">
                        الاشعارات 10
                        <i class="fa fa-bell-o"></i>
                    </a>
                    <a href="#">
                        الرسائل 10
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
                <button type="button" class="op-pro-filter">
                    <i class="fa fa-comment-o"></i>
                    المحادثات
                </button>
                {{-- <form action="{{route('messages.users',$stores->id)}}" method="get"> --}}

                <input hidden name="user_id" value="{{ $stores->user_id }}" />


                <div class="prof-sidebar col-md-4 col-xs-12">
                    <div class="chat-sidebar col-xs-12">
                        <div class="ch-side-head col-xs-12">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <input type="search" class="form-control" placeholder="ابحث عن اشخاص">
                                    <button type="submit" class="btn">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="chat-sidebar-body col-xs-12">
                            <ul>
                                @isset($allusers)
                                    @foreach ($allusers as $user)
                                        <li>
                                            <div class="i-img">
                                                <img src="{{ url('assets/front') }}/images/users/1.png" alt="">
                                            </div>
                                            <div class="i-data">
                                                {{-- <h3>{{$user->profile->name}}</h3> --}}
                                                {{-- <a data-toggle="collapse" data-parent="#accordion"
                                                    href="#user{{ $user->id }}">{{ $user->profile->name }}</a> --}}

                                                <a
                                                    href="{{ route('store.chat.withUser', ['user_id' => $user->id]) }}">{{ $user->profile->name }}</a>
                                                <p>
                                                    <span>20/04/2020</span>
                                                    <span>10:10 pm</span>
                                                </p>
                                                <button type="button" class="del-chat-person">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </div>
                                        </li>

                                    @endforeach
                                @endisset


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="prof-content col-md-8 col-xs-12">
                    <div class="min-head col-xs-12">
                        <h3>الرسائل
                            <span>الشامسي للاكترونيات</span>
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
                                    {{-- @php
                                        $user = App\Models\Chat::where('store_id', $stores->id)
                                            ->where('user_id', $chat->user_id)
                                            ->get();
                                        $store = App\Models\Chat::where('store_id', $stores->id)->get();
                                    @endphp --}}


                                    <div class="msg-item {{  $stores->id ? 'outer' : '' }}">
                                        <div class="msg-auth">
                                            @if ($chat->store_id == $stores->id)
                                                <div class="au-img">
                                                    <a href="#">
                                                        <img src="https://ui-avatars.com/api/?background=random&name=islam"
                                                            id="blah" alt="your image">
                                                    </a>
                                                </div>
                                            @else
                                                <div class="au-img">
                                                    @if ($stores->store_logo_image === null)
                                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $stores->store_name ?? '--' }}"
                                                            id="blah" alt="your image">
                                                    @else
                                                        <img src="{{ url('Uploads/stores') }}/{{ $stores->store_logo_image }}"
                                                            id="blah" alt="your image">
                                                    @endif
                                                </div>
                                            @endif

                                            @if ($chat->store_id == $stores->id)
                                                <div class="au-data">
                                                    <a href="#">#</a>
                                                    <p>
                                                        <span>{{ $chat->created_at }}</span>
                                                    </p>
                                                </div>
                                            @else
                                                <div class="au-data">
                                                    <a href="#">{{ $stores->store_name }}</a>
                                                    <p>
                                                        <span>{{ $chat->created_at }}</span>
                                                    </p>
                                                </div>
                                            @endif

                                        </div>
                                        @if ($chat->store_id == $stores->id)
                                            <div class="msg-body">
                                                <p>{{ $chat->body }}</p>
                                            </div>

                                        @else
                                            <div class="msg-body">
                                                <p>{{ $chat->body }}</p>
                                            </div>
                                        @endif

                                    </div>



                                    {{-- <div class="msg-item">
                                            <div class="msg-auth">
                                                <div class="au-img">
                                                    <a href="#">
                                                        <img src="{{ url('assets/front') }}/images/user-icons/user-img.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="au-data">
                                                    <a href="#">{{$profile->name}}</a>
                                                    <p>
                                                        <span>{{$chat->created_at}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msg-body">
                                                <p>{{$chat->body}}</p>
                                            </div>
                                        </div> --}}


                                @endforeach
                            @endif

                        </div>
                        <div class="msg-field">
                            <form action="#" class="d-flex" method="post">
                                @csrf
                                <input hidden value="{{ auth()->user()->id }}" type="text" id="user-id">
                                <input hidden value="{{ $stores->id }}" type="text" id="store-id">
                                {{-- <input hidden value="{{ $profile->id }}" type="text" id="profile-id"> --}}

                                <input hidden value="{{ LaravelLocalization::setLocale() }}" type="text" id="site-lang">

                                <div class="form-group">
                                    <input type="text" name="body" id="chat-text" class="form-control"
                                        placeholder="رسالتك" />
                                    <button class="btn" id="send-message">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- </form> --}}

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
            url = "{{ route('message.store') }}";
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
