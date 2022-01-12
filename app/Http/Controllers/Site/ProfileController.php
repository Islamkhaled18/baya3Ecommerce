<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Store;

class ProfileController extends Controller
{
    public function index($id)
    {
        $userId = User::with(['profile'])->where('id', $id)->first();
        $profile = $userId->profile;
        $stores = Store::get();
        $my_orders = OrderItem::where('user_id',$id)->get();

        return view('site.profile', compact('profile', 'userId','stores','my_orders'));
    }


    public function profilePhoto(Request $request)
    {

        $userId = User::first();

        $profile = $userId->profile;

        if ($request->hasFile('user_photo')) {

            $file = $request['user_photo'];
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = public_path('Uploads/users');
            $file->move($path, $fileName);
        }

        if ($profile) {
            $profile->update([

                'user_photo'       => $fileName,
            ]);
        }

        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->back();
    }


    public function update(Request $request)
    {


        $userId = User::with(['profile'])->first();


        $profile = $userId->profile;

        $userId->update([

            'email'    => $request->email,
            'mobile'    => $request->mobile,
            'password' => bcrypt($request->password),

        ]);

        $profile->update([
            'user_id'   => auth()->user()->id,
            'name'    => $request->name,
            'governorate'    => $request->governorate,
            'city'    => $request->city,
            'address'    => $request->address,
            'bith_date'    => $request->bith_date,
            'gender'    => $request->gender,
        ]);



        return redirect()->back();
    }

    public function destroyProduct($id){
        $my_order = OrderItem::find($id);
        $my_order->delete();
        return redirect()->back();


    }
}
