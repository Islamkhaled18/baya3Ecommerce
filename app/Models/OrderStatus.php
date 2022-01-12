<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $table = "ordersStatus";
    protected $guarded =[];

    public function orders()
    {
        return $this->belongsTo(order::class);

    }//end of order

    public function orderItems()
    {
        return $this->belongsTo(OrderItem::class);

    }//end of orderItem

    public function store()
    {
        return $this->belongsTo(Store::class);

    }//end of store
}
