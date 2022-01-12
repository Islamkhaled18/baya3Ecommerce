@extends('layouts.app')

@section('content')

    <div class="hero-bread col-xs-12" style="background-image: url({{ asset('assets/front/images/bread-cover.png') }})">
        <div class="container">
            <h3>متابعة الشراء</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    <a href="#">سلة الطلبات</a>
                </li>
                <li>متابعة الشراء</li>
            </ul>
        </div>
    </div>
    <main class="main-content col-xs-12">
        <div class="orders-wrap col-xs-12">
            <div class="checkout-wrap col-xs-12">
                <div class="container">
                    <form action="{{ route('payment.process') }}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="block col-md-8 col-xs-12">
                            <div class="min-head col-xs-12">
                                <h3>بيانات الدفع</h3>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>الاسم </h4>
                                    <input type="text" name="name" value="{{ $profiles->name }}" placeholder="First Name"
                                        class="form-control" disabled>
                                </div>

                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>البريد الالكتروني</h4>
                                    <input type="text" placeholder="email" name="email" value="{{ $users->email }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>رقم الهاتف</h4>
                                    <input type="number" name="mobile" value="{{ $users->mobile }}" placeholder="Phone No"
                                        class="form-control" disabled>
                                </div>

                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>عنوان</h4>
                                    <input type="text" name="address" value="{{ $profiles->address }}"
                                        placeholder="Address " class="form-control" disabled>
                                </div>

                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>المدينه</h4>
                                    <input type="text" name="city" value="{{ $profiles->city }}" placeholder="Address "
                                        class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-4 col-xs-12">
                            <div class="min-head col-xs-12">
                                <h3>اجمالي الدفع</h3>
                            </div>
                            <div class="widget col-xs-12">
                                <div class="inner">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>المنتج</th>
                                                <th>الاجمالي</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td> {{ $item->product_name }} </td>
                                                    <td><span
                                                            class="product-sub-totle-{{ $item->id }}">{{ $item->price * $item->quantity }}
                                                            جنية</span></td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td>اجمالي السعر</td>
                                                <td>{{ $orders->total_price }} جنيه</td>
                                            </tr>
                                            {{-- <tr>
                                                    <td>مصاريف الشحن</td>
                                                    <td>00.00 جنيه</td>
                                                </tr> --}}
                                        </tbody>
                                        {{-- <tfoot>
                                                <tr>
                                                    <th>الاجمالي الكلي</th>
                                                    <th>124.00 جنيه</th>
                                                </tr>
                                            </tfoot> --}}
                                    </table>

                                </div>
                            </div>
                            <div class="min-head col-xs-12">
                                <h3>طرق الدفع</h3>
                            </div>
                            <div class="widget col-xs-12">
                                <div class="inner">
                                    <ul>
                                        {{-- <input type="hidden" name="amount" value="{{ $amount }}"> --}}
                                        <div class="d-block my-3">
                                            <div class="custom-radio">
                                                <input name="PaymentMethodId" type="radio" value="2" class=""
                                                    checked="" required="">
                                                <label class="custom-control-label" for="credit">Visa</label>
                                            </div>
                                            <div class="custom-radio">
                                                <input name="PaymentMethodId" type="radio" value="2" class=""
                                                    required="">
                                                <label class="custom-control-label" for="debit">Master Card</label>
                                            </div>
                                            <div class="custom-radio">
                                                <input name="PaymentMethodId" type="radio" value="6" class=""
                                                    required="">
                                                <label class="custom-control-label" for="paypal">Mada</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cc-name">Name on card</label>
                                                <input type="text" class="form-control" id="cc-name" placeholder=""
                                                    required="">
                                                <small class="text-muted">Full name as displayed on card</small>
                                                <div class="invalid-feedback">
                                                    Name on card is required
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="cc-number">Credit card number</label>
                                                <input type="text" class="form-control" name="ccNum" id="cc-number"
                                                    placeholder="" required="">
                                                <div class="invalid-feedback">
                                                    Credit card number is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">Expiration</label>
                                                <input type="text" class="form-control" name="ccExp" id="cc-expiration"
                                                    placeholder="" required="">
                                                <div class="invalid-feedback">
                                                    Expiration date required
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">CVV</label>
                                                <input type="text" class="form-control" name="ccCvv" id="cc-cvv"
                                                    placeholder="" required="">
                                                <div class="invalid-feedback">
                                                    Security code required
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <button type="submit" class="btn submit-payment">تابع عملية الدفع</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
