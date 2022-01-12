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
                        <span>@lang('dashboard.update')</span>
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
                    @lang('front.notofications') {{auth()->user()->Notifications->count()}}
                    <i class="fa fa-bell-o"></i>
                </a>
                <a href="{{route('store.chat.withUser')}}">
                    @lang('front.messages') {{App\Models\Chat::count()}}
                    <i class="fa fa-comment-o"></i>
                </a>
                
            </div>
            </div>
        </div>
    </div>

    <main class="main-content col-xs-12">
        <div class="profile-wrap store-wrap col-xs-12">
            <div class="container">
                <button type="button" class="op-pro-filter">
                    <i class="fa fa-info-circle"></i>
                    @lang('front.side_menu')
                </button>
                <div class="prof-sidebar col-md-3 col-xs-12">
                    <div class="s-inner">
                        <a href="{{route('store.profile' , $stores->id)}}" class="active">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/1.png" alt="">
                                @lang('dashboard.about_us')
                        </a>
                        <a href="{{route('store.storeCategories' , $stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/2.png" alt="">
                            @lang('dashboard.categories') ({{App\Models\Category::count()}})
                        </a>
                        <a href="{{route('allProducts.myStore',$stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            @lang('dashboard.products') ({{App\Models\Product::count()}})
                        </a>
                        <a href="{{route('store.edit' , $stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/4.png" alt="">
                             @lang('dashboard.basic_information')
                        </a>
                        <a href="{{route('store.orders',$stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            الطلبات الوادة (109)
                        </a>
                    </div>
                </div>
                <div class="prof-content col-md-9 col-xs-12">
                    <div class="min-head col-xs-12">
                        <h3> {{$stores->store_name ?? '--' }}</h3>
                        <a href="#" class="address-map">
                            <i class="fa fa-map-marker"></i>
                            {{$stores->store_address ?? '--' }}
                        </a>
                    </div>
                    <div class="min-body col-xs-12">
                        <div class="nabza">
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <img src="{{ url('assets/front') }}/images/nabza/1.png" alt="">
                                    <h3>@lang('dashboard.products')</h3>
                                    <p>{{App\Models\Product::count()}}</p>
                                </div>
                            </div>
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <img src="{{ url('assets/front') }}/images/nabza/2.png" alt="">
                                    <h3>@lang('dashboard.all_categories')</h3>
                                    <p>{{App\Models\Category::count()}}</p>
                                </div>
                            </div>
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <img src="{{ url('assets/front') }}/images/nabza/3.png" alt="">
                                    <h3>@lang('front.created_at')</h3>
                                    <p>{{$stores->created_at ?? '--' }}</p>
                                </div>
                            </div>
                            
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

 

@endsection
