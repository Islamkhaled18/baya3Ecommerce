<?php

namespace App\Models;

use App\Model\OrderItem;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Product extends Model
{
    protected $table ="products";
    protected $guarded =[];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }




}
