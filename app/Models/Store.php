<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Profile;
use App\Models\User;
use App\Models\Category;

class Store extends Model
{
    protected $table = 'stores';
    protected $guarded = [];

    public function User()
    {
        return $this->BelongsTo(User::class, 'user_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class,'store_id');
    }

    public function orderStatus()
    {

        return $this->hasOne(OrderStatus::class, 'store_id');
    }

    public function chats(){
        return $this->hasMany(Chat::class);
    }
}
