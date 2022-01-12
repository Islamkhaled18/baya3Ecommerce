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
                            <span>@lang('front.update')</span>
                            <input type="file"
                                onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                        </button>
                        <img src="{{ url('assets/front') }}/images/products/matgr.png" id="blah1" alt="">
                    </div>
                    <div class="st-prof-data">
                        <h3>{{ $stores->store_name ?? '--' }}</h3>
                        <span>({{ $stores->store_type ?? '--' }})</span>
                    </div>
                </div>
                <div class="st-actions">
                    <a href="#">
                        @lang('front.notifications') {{auth()->user()->Notifications->count()}}
                        <i class="fa fa-bell-o"></i>
                    </a>
                    <a href="#">
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
                        {{-- <a href="{{route('store.orders',$orderitems->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            الطلبات الوادة (109)
                        </a> --}}
                    </div>
                </div>
                <div class="prof-content col-md-9 col-xs-12">
                    <div class="ads-head col-xs-12">
                        <div class="min-head col-md-8 col-xs-12">
                            <h3>بيانات التواصل</h3>
                        </div>
                        <a href="#" class="btn btn-view">موقع المحل ع الخريطة</a>
                        <a href="#" data-target="#pick_address" data-toggle="modal" class="btn btn-edit"
                            style="display: none;"> تعديل موقع المحل ع الخريطة</a>
                    </div>
                    <div class="min-body col-xs-12">
                        <div class="dets-view col-xs-12">
                            <div class="inner">
                                <ul>
                                    <li>
                                        <span>متجر</span>
                                        {{$stores->store_name}}
                                    </li>
                                    <li>
                                        <span>نوع المتجر</span>
                                        {{$stores->store_type}}
                                    </li>
                                    <li>
                                        <span>المحافظة</span>
                                        {{$stores->store_governorate}}
                                    </li>
                                    <li>
                                        <span>المدينة</span>
                                        {{$stores->store_city}}
                                    </li>
                                    <li>
                                        <span>العنوان</span>
                                        {{$stores->store_address}}
                                    </li>
                                    <li>
                                        <span>رقم الهاتف</span>
                                        {{$stores->store_phone}}
                                    </li>
                                    <li>
                                        <span>البريد الالكترونى</span>
                                        {{$stores->store_email}}
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="edit-dets btn">تعديل</button>
                        </div>

                        <div class="dets-edit col-xs-12" style="display: none">
                            <div class="row">
                                <form action="{{route('store.update' ,$stores->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group col-md-6 col-xs-12">
                                        <h5>اسم المنتج</h5>
                                        <input type="text" name="store_name" value="{{$stores->store_name}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-xs-12">
                                        <h5>نوع المتجر</h5>
                                        <input type="text" name="store_type" value="{{$stores->store_type}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-xs-12">
                                        <h5>المحافظة</h5>
                                        <input type="text" name="store_governorate" value="{{$stores->store_governorate}}" class="form-control">

                                    </div>
                                    <div class="form-group col-md-6 col-xs-12">
                                        <h5>المدينة</h5>
                                        <input type="text" name="store_city" value="{{$stores->store_city}}" class="form-control">                                        
                                    </div>
                                    <div class="form-group col-md-6 col-xs-12">
                                        <h5>البريد الالكترونى</h5>
                                        <input type="email" name="store_email" value="{{$stores->store_email}}" class="form-control">                                        
                                    </div>
                                    <div class="form-group col-md-6 col-xs-12">
                                        <h5>رقم الهاتف</h5>
                                        <input type="number" name="store_phone" value="{{$stores->store_phone}}" class="form-control">                                        
                                    </div>
                                    <div class="form-group col-md-12 col-xs-12">
                                        <h5>العنوان بالتفصيل</h5>
                                        <input type="text" name="store_address" value="{{$stores->store_address}}" class="form-control">                                        
                                    </div>
                                    <div class="form-group col-md-12 col-xs-12">
                                        <button type="submit" class="btn">حفظ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
