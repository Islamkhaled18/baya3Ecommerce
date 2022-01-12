<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $guarded =[];

    public function profile()
    {
        return $this->belongsTo(Profile::class ,'profile_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class ,'product_id');
    }


}
