@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>@lang('front.profile')</h3>
            <ul>
                <li>
                    <a href="{{ route('home') }}">@lang('front.home')</a>
                </li>
                <li>{{ trans('front.myprofile') }}</li>
            </ul>
        </div>
    </div>

    <main class="main-content col-xs-12">
        <div class="profile-wrap col-xs-12">
            <div class="container">
                <button type="button" class="op-pro-filter">
                    <i class="fa fa-info-circle"></i>
                    {{ trans('front.side_menu') }}
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
                                <li class="active my_profile">
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
                                {{-- <li>
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
                                </li> --}}
                                <li class="my_orders">
                                    <a href="#">
                                        <img src="{{ url('assets/front') }}/images/user-icons/5.png" alt="">
                                        {{ trans('front.my_orders') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('user.Chat',$profile->id)}}">
                                        <img src="{{ url('assets/front') }}/images/user-icons/6.png" alt="">
                                        @lang('front.messages')
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
                        <h3>@lang('front.profile')</h3>
                        <button type="button" class="edit-prof btn">{{ trans('front.edit_user_profile') }}</button>
                    </div>
                    <div class="min-body col-xs-12">
                        <div class="f-view col-xs-12">
                            <div class="w-item">
                                <div class="w-inner">
                                    <ul>
                                        <li>
                                            <span>{{ trans('front.name') }}:</span>
                                            {{ $profile->name ?? '--' }}
                                        </li>
                                        <li>
                                            <span> {{ trans('front.email') }}:</span>
                                            {{ $userId->email ?? '--' }}
                                        </li>
                                        <li>
                                            <span> {{ trans('front.mobile') }}:</span>
                                            {{ $userId->mobile ?? '--' }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w-item">
                                <div class="w-inner">
                                    <ul>
                                        <li>
                                            <span>{{ trans('front.governorate') }}:</span>
                                            {{ $profile->governorate ?? '--' }}
                                        </li>
                                        <li>
                                            <span>{{ trans('front.city') }}:</span>
                                            {{ $profile->city ?? '--' }}
                                        </li>
                                        <li>
                                            <span> {{ trans('front.address') }}:</span>
                                            {{ $profile->address ?? '--' }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w-item">
                                <div class="w-inner">
                                    <ul>
                                        <li>
                                            <span>{{ trans('front.gender') }} :</span>
                                            {{ $profile->gender ?? '--' }}
                                        </li>
                                        <li>
                                            <span> {{ trans('front.birth_date') }}:</span>
                                            {{ $profile->bith_date ?? '--' }}
                                        </li>
                                        <li>
                                            <span>{{ trans('front.password') }}:</span>
                                            **********
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="f-edit col-xs-12">

                            <form action="{{ route('user.information') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group col-md-6 col-xs-12">
                                    <h5>{{ trans('front.name') }}</h5>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $profile->name ?? '--' }}">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5> {{ trans('front.email') }}</h5>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $userId->email ?? '--' }}">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5> {{ trans('front.mobile') }}</h5>
                                    <input type="text" class="form-control" name="mobile"
                                        value="{{ $userId->mobile ?? '--' }}">
                                </div>

                                <div class="form-group col-md-6 col-xs-12">
                                    <h5>{{ trans('front.governorate') }}</h5>
                                    <input type="text" class="form-control" name="governorate"
                                        value="{{ $profile->governorate ?? '--' }}">

                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5>{{ trans('front.city') }}</h5>
                                    <input type="text" class="form-control" name="city"
                                        value="{{ $profile->city ?? '--' }}">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5> {{ trans('front.address') }}</h5>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ $profile->address ?? '--' }}">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5>{{ trans('front.gender') }}</h5>
                                    <select class="form-control" name="gender" value="{{ $profile->gender ?? '--' }}">
                                        <option disabled> {{ trans('front.gender') }}</option>
                                        <option>{{ trans('front.male') }}</option>
                                        <option>{{ trans('front.female') }}</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5>{{ trans('front.birth_date') }} </h5>
                                    <input type="date" class="form-control" name="bith_date"
                                        value="{{ $profile->bith_date ?? '--' }}">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5> {{ trans('front.password') }}</h5>
                                    <input type="password" class="form-control" name="password"
                                        value="{{ $userId->password ?? '--' }}">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h5>{{ trans('front.password') }}</h5>
                                    <input type="password" class="form-control" name="password"
                                        value="{{ $userId->password ?? '--' }}">
                                </div>
                                <div class="form-group col-md-12 col-xs-12">
                                    <button type="submit" class="btn">{{ trans('front.update') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="store-content col-md-9 col-xs-12 hidden">
                    <div class="main-head col-xs-12">
                        <h3>@lang('front.mystore')</h3>
                        <button type="button" class="add-store btn">@lang('front.add_new_store')</button>
                    </div>
                    <div class="main-body col-xs-12">
                        <div class="w-st-view col-xs-12">

                            @isset($stores)

                                @foreach ($stores as $store)

                                    <div class="st-inner">
                                        <div class="st-img">
                                            <a href="#">
                                                <img src="{{ $store->store_logo_image ?? '--' }}" alt="">
                                            </a>
                                        </div>
                                        <div class="st-data">
                                            <div class="st-r">
                                                <a href="#" class="title">{{ $store->store_name ?? '--' }}</a>
                                                <p>({{ $store->store_type ?? '--' }})</p>
                                                <p>{{ $store->store_phone ?? '--' }}</p>
                                            </div>
                                            <div class="st-l">
                                                <p>{{ $store->store_description ?? '--' }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('store.profile', $store->id) }}" type="submit"
                                            class="btn">@lang('front.manage')</a>
                                        <a href="{{ route('store.edit', $store->id) }}"
                                            class="btn">@lang('front.edit_mystore')</a>
                                        <a href="{{ route('store.delete', $store->id) }}"
                                            class="btn">@lang('front.delete_mystore')</a>

                                    </div>

                                @endforeach

                            @endisset

                        </div>
                        <div class="w-st-add col-xs-12 hidden">
                            @include('site.includes.profile.addStore')

                        </div>
                    </div>
                </div>
                <div class="my-orders-content col-md-9 col-xs-12 hidden">
                    <div class="min-head col-xs-12">
                        <h3>{{ trans('front.my_orders') }}</h3>

                       
                        
                    </div>
                    <div class="orders-list col-xs-12">
                        <div class="o-inner">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ trans('dashboard.details') }}</th>
                                        <th> {{ trans('dashboard.date_of_order') }}</th>
                                        <th>@lang('dashboard.status')</th>
                                        <th> @lang('dashboard.price')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($my_orders as $my_order)
                                        <tr>
                                            <td>
                                                <div class="item-info">
                                                    <div class="i-img">
                                                        <a href="#">
                                                            <img src="{{asset($my_order->product->image_one)}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="i-data">
                                                        <div class="i-inner">
                                                            <a href="#" class="title">{{$my_order->product->product_name}}</a>
                                                            <p>
                                                                <span> @lang('front.order_id') {{$my_order->Order->id}}</span>
                                                                <a href="{{route('order.delete',$my_order->id)}}" class="rem">الغاء</a>
                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$my_order->Order->created_at}}</td>
                                            <td>مرحلة الاعداد</td>
                                            <td><span>{{$my_order->Order->total_price}} جنية</span></td>
                                        </tr>
                                        
                                    @endforeach

                                    
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection

@section('script')
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtWX6kRFdnvB1pFjknYIuIn5mdOmJabSY&callback=initMap">
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: -25.344,
                lng: 131.036
            };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 4,
                    center: uluru
                });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

        $(document).ready(function() {

            $(".my_store").click(function(e) {
                e.preventDefault();
                $('.my_profile').removeClass('active');
                $('.my_store').addClass('active');
                $('.prof-content').hide();
                $('.store-content').removeClass('hidden');
            });

            $(".add-store").click(function(e) {
                e.preventDefault();
                $('.w-st-view').addClass('hidden');
                $('.w-st-add').removeClass('hidden');
            });

            $(".my_profile").click(function(e) {
                e.preventDefault();
                $('.my_store').removeClass('active');
                $('.my_profile').addClass('active');
                $('.store-content').addClass('hidden');
                $('.prof-content').show();
            });

            $(".my_orders").click(function(e) {
                e.preventDefault();
                $('.my_store').removeClass('active');
                $('.my_profile').removeClass('active');
                $('.my_orders').addClass('active');
                $('.prof-content').hide();
                $('.store-content').addClass('hidden');
                $('.my-orders-content').removeClass('hidden');
            });
            $(".my_profile").click(function(e) {
                e.preventDefault();
                $('.my_store').removeClass('active');
                $('.my_orders').removeClass('active');
                $('.my_profile').addClass('active');
                $('.my-orders-content').addClass('hidden');
                $('.store-content').addClass('hidden');
                $('.prof-content').show();
            });

            $(".my_store").click(function(e) {
                e.preventDefault();
                $('.my_profile').removeClass('active');
                $('.my_orders').removeClass('active');
                $('.my_store').addClass('active');
                $('.prof-content').hide();
                $('.my-orders-content').addClass('hidden');
                $('.store-content').removeClass('hidden');
            });

        });
    </script>




@endsection
