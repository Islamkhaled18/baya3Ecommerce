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
                    <div class="ads-head col-xs-12">
                        <div class="min-head col-md-9 col-xs-12">
                            <h3> يوجد {{ App\Models\Product::count() }} منتج</h3>
                            <select class="form-control">
                                <option>ترتيب حسب</option>
                                <option>المضاف( من الاحدث للاقدم) </option>
                                <option>المضاف( من الاقدم للاحدث) </option>
                                <option>المباع</option>
                            </select>
                        </div>
                        <a href="{{ route('Products.myStore.create', $stores->id) }}" class="btn btn-trans">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            <span>اضافة منتج</span>
                        </a>
                    </div>
                    <div class="latest-ads col-xs-12">
                        <div class="row">

                            @foreach ($products as $product)
                                <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-i">
                                        <div class="i-img">
                                            <img src="{{ asset($product->image_one) }}" alt="">
                                            <div class="labels">
                                                <span class="label l-blue">{{ $product->product_status }}</span>
                                                <span class="label l-green">{{ $product->percent_of_discount }}</span>
                                            </div>
                                            <div class="i-controls">
                                                <a href="{{ route('products.editProduct', $product->id) }}"
                                                    data-tool="tooltip" title="تعديل المنتج">
                                                    <img src="{{ url('assets/front') }}/images/edit.png" alt="">
                                                </a>
                                                <a href="{{ route('products.destory', $product->id) }}" data-tool="tooltip"
                                                    title="حذف المنتج" class="del">
                                                    <img src="{{ url('assets/front') }}/images/delete.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="i-data">
                                            <a href="{{ route('products.singleProduct', $product->id) }}"
                                                class="title">{{ $product->product_name }}</a>

                                            <div class="rate-sys">
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o active"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="price-sys">
                                                <span>{{ $product->new_price }} جنية</span>
                                                <span class="old">{{ $product->old_price }} جنية</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </main>



@endsection
