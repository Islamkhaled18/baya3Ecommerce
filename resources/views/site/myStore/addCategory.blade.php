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
                        {{-- <a href="{{route('store.orders',$orderitems->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            الطلبات الوادة (109)
                        </a> --}}
                    </div>
                </div>
                <div class="prof-content col-md-9 col-xs-12">
                    <div class="min-head col-xs-12">
                        <h3>@lang('dashboard.categories')
                            <span> @lang('dashboard.add_new_category')</span>
                        </h3>
                    </div>
                    <div class="min-body col-xs-12">
                        <form action="{{ route('store.categories') }}" method="post" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group col-md-6 col-xs-12">
                                <h5>@lang('dashboard.category_name') </h5>
                                <input type="text" name="category_name" class="form-control"
                                    value="{{ old('category_name') }}">
                            </div>

                            <div class="form-group col-md-6 col-xs-12">

                                <input type="hidden" class="form-control" value="{{ $stores->id }}" name="store_id">
                            </div>

                            <div class="form-group prime-img col-md-4 col-xs-12">
                                <h5>@lang('dashboard.category_photo') </h5>
                                <div class="f-img">
                                    <label>

                                        <i class="fa fa-camera"></i>

                                        @if ($categories->category_photo === null)
                                            <img src="https://ui-avatars.com/api/?background=random&name={{ $categories->category_name }}"
                                                id="blah" alt="your image">
                                        @else
                                            <img src="{{ url('Uploads/categories') }}/{{ $categories->category_photo }}"
                                                id="blah" alt="your image">
                                        @endif
                                        <input type="file" name="category_photo"
                                            onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">

                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-xs-12">
                                
                                <button type="submit" class="btn">@lang('dashboard.save')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
