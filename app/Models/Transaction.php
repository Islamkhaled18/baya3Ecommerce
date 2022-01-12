<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Profile;



class Transaction extends Model
{
    protected $table = "transactions";
    protected $guarded =[];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function orderitem()
    {
        return $this->belongsTo(OrderItem::class);
    }


    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function profile()
    {
        $this->belongsTo(Profile::class);
    }

}
