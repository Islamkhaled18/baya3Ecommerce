<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table= 'chats';
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class ,'profile_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class ,'store_id');
    }
}
