<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Store;
use App\Models\Comment;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $guarded = [];

    public $timestamps = true;

    protected $dates = [
        'bith_date',
    ];


    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function Stores()
    {
        return $this->hasMany(Store::class);
    }

    
    public function comments(){
        return $this->hasMnay(Comment::class);
    }
    public function order()
    {

        return $this->hasOne(Order::class, 'user_id');
    }

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transaction()
    {

        return $this->hasOne(Transaction::class, 'user_id');
    }

    public function chats(){
        return $this->hasMany(Chat::class);
    }

}
