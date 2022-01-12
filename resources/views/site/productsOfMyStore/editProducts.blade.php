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
                        <h3>المنتجات
                            <span>تعديل منتج</span>
                        </h3>
                    </div>
                    <div class="min-body col-xs-12">
                        <form action="{{route('products.updateProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-6 col-xs-12">
                                <h5>اسم المنتج</h5>
                                <input type="text" name="product_name" class="form-control"
                                    value="{{$product->product_name}}">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h5> القسم</h5>
                                <select name="categories[]" class="select2 form-control" multiple>
                                    <optgroup label={{ trans('dashboard.choose_category') }}>
                                        @if ($categories && $categories->count() > 0)
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->category_id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h5>عدد المخزون</h5>
                                <input type="text" name="product_quantity" value="{{$product->product_quantity}}"  class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h5>السعر القديم</h5>
                                <input type="text" name="old_price" value="{{$product->old_price}}" class="form-control" value="399 جنية">
                            </div>

                            <div class="form-group col-md-6 col-xs-12">
                                <h5>السعر الجديد</h5>
                                <input type="text" name="new_price" value="{{$product->new_price}}" class="form-control" value="399 جنية">
                            </div>

                            <div class="form-group col-md-6 col-xs-12">
                                <h5>نسبه الخصم</h5>
                                <input type="text" name="percent_of_discount" value="{{$product->percent_of_discount}}" class="form-control" value="17%">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h5>حاله المنتج</h5>
                                <select class="form-control">
                                    <option name="product_status" value="{{$product->product_status}}" disabled>اختر حاله السلعه</option>
                                    <option>جديدة</option>
                                    <option>مستعملة</option>
                                    <option>قديمة</option>
                                </select>
                            </div>
                            <div class="min-head col-xs-12">
                                <h3>خصائص المنتج</h3>
                            </div>
                        

                            <div class="form-group col-md-12 col-xs-12">
                                <h5>الوصف</h5>
                                <textarea name="product_disc" value="{{$product->product_disc}}" class="form-control"></textarea>
                            </div>
                            <div class="min-head col-xs-12">
                                <h3>صور المنتج</h3>
                            </div>
                            <div class="form-group prime-img col-md-4 col-xs-12">
                                <h5>صورة المنتج الرئيسية</h5>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_one" value="{{asset($product->image_one)}}"
                                            onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah1" alt="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group ad-images col-md-8 col-xs-12">
                                <h5>صورة المنتج الفرعية <b>الحد الاقصي للمنتج 12 صورة</b></h5>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_two" value="{{asset($product->image_two)}}"
                                            onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah2" alt="">
                                    </label>
                                </div>
                                {{-- <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_three" value="{{old('image_three')}}"
                                            onchange="document.getElementById('blah3').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah3" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_four" value="{{old('image_four')}}"
                                            onchange="document.getElementById('blah4').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah4" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_five" value="{{old('image_five')}}"
                                            onchange="document.getElementById('blah5').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah5" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_six" value="{{old('image_six')}}"
                                            onchange="document.getElementById('blah6').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah6" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_seven" value="{{old('image_seven')}}"
                                            onchange="document.getElementById('blah7').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah7" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_eight" value="{{old('image_eight')}}"
                                            onchange="document.getElementById('blah8').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah8" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_nine" value="{{old('image_nine')}}"
                                            onchange="document.getElementById('blah9').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah9" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_ten" value="{{old('image_ten')}}"
                                            onchange="document.getElementById('blah10').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah10" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_eleven" value="{{old('image_eleven')}}"
                                            onchange="document.getElementById('blah11').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah11" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_twelve" value="{{old('image_twelve')}}"
                                            onchange="document.getElementById('blah12').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah12" alt="">
                                    </label>
                                </div>
                                <div class="f-img">
                                    <label>
                                        <img src="{{ url('assets/front') }}/images/camera.png" alt=""
                                            class="pc">
                                        <input type="file" name="image_therteen" value="{{old('image_therteen')}}"
                                            onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="blah2" alt="">
                                    </label>
                                </div> --}}
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                {{-- <label>
                                    <input type="checkbox">
                                    <span>أوافق على الشروط والاحكام</span>
                                </label> --}}
                                <button type="submit" class="btn">تعديل </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
