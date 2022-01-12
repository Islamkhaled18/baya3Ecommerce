@extends('layouts.app')

@section('content')

    {{-- <div class="store-cover col-xs-12">
        <div class="cover-top col-xs-12">
            <button type="button" class="upload-cover">
                <i class="fa fa-camera"></i>
                <input type="file"
                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </button>
            <img src="images/cover.png" id="blah" alt="">
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
                        <img src="images/products/matgr.png" id="blah1" alt="">
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
    </div> --}}
    <main class="main-content col-xs-12">
        <div class="profile-wrap store-wrap col-xs-12">
            <div class="container">
                <button type="button" class="op-pro-filter">
                    <i class="fa fa-info-circle"></i>
                    القائمة الجانبية
                </button>
                <div class="prof-sidebar col-md-3 col-xs-12">
                    <div class="s-inner">
                        <a href="{{route('store.profile' , $stores->id)}}" >
                            <img src="{{ url('assets/front') }}/images/matgr-icons/1.png" alt="">
                            نبذة عن المتجر
                        </a>
                        <a href="{{route('store.storeCategories' , $stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/2.png" alt="">
                            الأقسام ({{App\Models\Category::count()}})
                        </a>
                        <a href="{{route('allProducts.myStore',$stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            المنتجات ({{App\Models\Product::count()}})
                        </a>
                        <a href="{{route('store.edit' , $stores->id)}}">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/4.png" alt="">
                            بيانات التواصل
                        </a>
                        <a href="{{route('store.orders',$stores->id)}}" class="active">
                            <img src="{{ url('assets/front') }}/images/matgr-icons/3.png" alt="">
                            الطلبات الوادة (109)
                        </a>
                    </div>
                </div>
                <div class="prof-content col-md-9 col-xs-12">
                    <div class="min-head col-xs-12">
                        <h3>الطلبات المستلمة</h3>

                       
                    </div>
                    <div class="orders-list col-xs-12">
                        <div class="o-inner">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>تفاصيل المنتج</th>
                                        <th>تاريخ الطلب</th>
                                        <th>الحالة</th>
                                        <th>السعر الاجمالى</th>
                                        <th>اعدادات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($store_orders as $store_order )
                                        <tr>
                                            <td>
                                                <div class="item-info">
                                                    <div class="i-img">
                                                        <a href="#">
                                                            <img src="{{asset($store_order->product->image_one)}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="i-data">

                                                        <div class="i-inner">
                                                            <a href="#" class="title"></a>
                                                            <p>
                                                                <span>رقم الطلب:{{$store_order->order_id}}</span>
                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$store_order->created_at}}</td>
                                            <td>مرحلة الاعداد</td>
                                            <td><span>{{$store_order->price}} جنية</span></td>
                                            <td>
                                                <a href="#" class="btn btn-trans" data-tool="tooltip" title="قبول الطلب">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                                <a href="#" class="btn btn-trans rem" data-tool="tooltip" title="حذف الطلب">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
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
