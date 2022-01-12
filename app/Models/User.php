<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Profile;
use App\Models\Store;
use App\Models\Product;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password', 'mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {

        return $this->hasOne(Profile::class, 'user_id');
    }

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function favouritelist(){
        return $this->belongsToMany(Product::class, 'wishlists')->withTimeStamps();
    }   
    
    public function favouritelistHas($productId)
    {
        return Self::favouritelist()->where('product_id',$productId)->exists();
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
