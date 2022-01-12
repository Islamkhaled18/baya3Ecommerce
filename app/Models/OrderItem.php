<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = [];
    protected $table ='order_items';

    public function order()
    {
        return $this->belongsTo(Order::class);

    }//end of order

    public function product()
    {
        return $this->belongsTo(Product::class);

    }//end of product

    public function user()
    {
        return $this->belongsTo(User::class);

    }//end of user

    public function profile()
    {
        return $this->belongsTo(Profile::class);

    }//end of user

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function orderStatus()
    {

        return $this->hasOne(OrderStatus::class, 'order_item_id');
    }
}
