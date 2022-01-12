@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="container">
            <button type="button" class="op-filter">
                <i class="fa fa-cog"></i>
                بحث متقدم
            </button>
            
            <div class="stores-inner col-md-9 col-xs-12">
                <div class="min-head col-xs-12">
                    <h3> يوجد {{App\Models\Store::count()}} متجر</h3>
                   
                </div>
                <div class="latest-ads col-xs-12">
                    <div class="row">

                        @foreach ($stores as $store )

                            <div class="block col-md-4 col-sm-6 col-xs-12">
                                <div class="b-inner">
                                    <div class="b-img">
                                        <img src="{{asset($store->store_logo_image)}}" alt="">
                                        
                                    </div>
                                    <div class="b-data">
                                        
                                        <a href="{{route('store.profile',$store->id)}}">
                                            {{$store->store_name}}
                                            <span>({{$store->store_type}})</span>
                                        </a>
                                        <p>
                                            <i class="fa fa-map-marker"></i>
                                            {{$store->atore_governorate}}
                                        </p>
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
