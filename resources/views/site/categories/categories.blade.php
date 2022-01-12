@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>الساعات</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>الافسام</li>
            </ul>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="container">
            <button type="button" class="op-filter">
                <i class="fa fa-cog"></i>
                بحث متقدم
            </button>
            <div class="gen-sidebar col-md-3 col-xs-12">
                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#it-3">السعر</a>
                            </h4>
                        </div>
                        <div id="it-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form action="{{route('getProduct')}}" method="GET">

                                    <div class="form-group">
                                        <div class="price-wrap">
                                            <input type="text" name="min_price" class="col-md-6 col-xs-12" style="background-color: rgb(245, 132, 27)">   
                                            <input type="text" name="max_price" class="col-md-6 col-xs-12" style="background-color:rgb(245, 132, 27)">

                                            <input type="submit" value="Filter" class="btn btn-primary">

                                            
                                            {{-- <label for="amount">السعر:</label>

                                            <input type="text" id="amount" readonly>

                                            <div id="slider-range" ></div> --}}

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        
                    </div>

                    <div class="panel panel-default layout-type">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#it-5">نوع
                                    العرض</a>
                            </h4>
                        </div>
                        <div id="it-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="form-group">
                                    <ul>
                                        <li>
                                            <label class="active-list-view">
                                                <input type="radio" name="rad1">
                                                <span>
                                                    <i class="fa fa-list-ul"></i>
                                                    عرض القائمة
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="active-grid-view">
                                                <input type="radio" name="rad1" checked>
                                                <span>
                                                    <i class="fa fa-th"></i>
                                                    عرض شبكة
                                                </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="stores-inner col-md-9 col-xs-12">

                <div class="min-head col-xs-12">
                    <h3> يوجد {{ App\Models\Product::count() }} منتج</h3>

                    <form action="{{route('sortProducts')}}" method="get">
                        <select name="sorting"  class="form-control">
                            <option>ترتيب حسب</option>
                            <option value="1" >الاحدث</option>
                            <option value="2">الأكثر مبيعا</option>
                            
                            <input type="submit"  class="btn btn-primary">
                            
                        </select>
                        
                    </form>


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
                                            <span class="label l-green">{{ $product->percent_of_discoun }}%</span>
                                        </div>
                                        <div class="i-controls">
                                            <a href="#" data-tool="tooltip" title="عرض سريع">
                                                <img src="{{ url('assets/front') }}/images/icons/quick.png" alt="">
                                            </a>
                                            <a href="#" data-tool="tooltip" title="اضافة للسلة">
                                                <img src="{{ url('assets/front') }}/images/icons/cart.png" alt="">
                                            </a>
                                            <a href="#" data-tool="tooltip" title="اضافة للمفضلة">
                                                <img src="{{ url('assets/front') }}/images/icons/fav.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="i-data">
                                        <a href="#" class="title">{{ $product->product_name }}</a>
                                        <p>{{ $product->product_disc }}</p>

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
    </main>

@endsection
