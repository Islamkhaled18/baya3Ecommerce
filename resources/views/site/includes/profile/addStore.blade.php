<div class="min-head col-xs-12">
    <h3>@lang('front.store_details')</h3>
</div>
<div class="min-body col-xs-12">
    <form action="{{route('profile.addStore')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.store_name')</h5>
            <input type="text" name="store_name" value="{{old('store_name')}}" class="form-control">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.store_type')</h5>
            <input type="text" name="store_type" value="{{old('store_type')}}" class="form-control">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.store_phone') </h5>
            <input type="text" class="form-control" value="{{old('store_phone')}}" name="store_phone">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.store_governorate')</h5>
            <input type="text" class="form-control" value="{{old('store_governorate')}}" name="store_governorate">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.store_city')</h5>
            <input type="text" class="form-control" value="{{old('store_city')}}" name="store_city">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.store_address') </h5>
            <input type="text" class="form-control" value="{{old('store_address')}}" name="store_address">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5> @lang('front.store_email')</h5>
            <input type="email" class="form-control" value="{{old('store_email')}}" name="store_email">
        </div>
        {{-- <div class="form-group col-md-6 col-xs-12">
            <h5>العنوان على الخريطة</h5>
            <a href="#" class="btn" data-target="#pick_address" data-toggle="modal">اضافة عنوان</a>
        </div> --}}
        <div class="form-group col-md-12 col-xs-12">
            <h5>@lang('front.store_description')</h5>
            <textarea class="form-control" value="{{old('store_description')}}" name="store_description"></textarea>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5> @lang('front.shipping_price') </h5>
            <input type="number" class="form-control" value="{{old('shipping_price')}}" name="shipping_price">
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h5>@lang('front.shipping_period')</h5>
            <input type="text" class="form-control" value="{{old('shipping_period')}}" name="shipping_period">
        </div>
        {{-- <div class="form-group col-md-4 col-xs-12">
            <h5>صورة شعار المتجر (200*200)</h5>
            <div class="f-img">
                <label>
                    <img src="{{ url('assets/front') }}/images/camera.png" alt="" class="pc">
                    <input type="file"
                        onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                    <img src="" id="blah1" alt="">
                </label>
            </div>
        </div>
        <div class="form-group col-md-8 col-xs-12">
            <h5>صورة الغلاف (200*1366)</h5>
            <div class="f-img">
                <label>
                    <img src="{{ url('assets/front') }}/images/camera.png" alt="" class="pc">
                    <input type="file"
                        onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                    <img src="" id="blah2" alt="">
                </label>
            </div>
        </div> --}}
        <div class="form-group col-md-12 col-xs-12">
            {{-- <label>
                <input type="checkbox">
                <span>أوافق على الشروط والاحكام</span>
            </label> --}}
            <button type="submit" class="btn">@lang('front.add_new_store')</button>
        </div>
    </form>
</div>

