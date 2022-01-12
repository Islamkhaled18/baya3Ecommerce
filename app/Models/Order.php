<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\user;
use App\Models\Profile;
use App\Models\Transaction;
use App\Models\OrderStatus;


class Order extends Model
{
    const PAID = 'paid';
    const UNPAID = 'unpaid';
    
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }//end of user
    public function profile()
    {
        return $this->belongsTo(Profile::class);
        
    }//end of user

    public function item()
    {
        return $this->belongsTo(OrderItem::class,'order_id');

    }//end of item

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function orderStatus()
    {

        return $this->hasOne(OrderStatus::class, 'order_id');
    }
}
