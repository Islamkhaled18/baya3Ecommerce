<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Product;


class Category extends Model
{
    use HasTranslations;

    protected $table ="categories";
    protected $guarded = [];
    public $timestamps = true ;

    public $translatable = [
        'category_name'
    ];
    
    public function scopeParent($query)
    {
        return $query->where('parent_id', null);
    }

    public function scopeChild($query)
    {
        return $query->where('parent_id', '!=', null);
    }

    public function _parent()
    {
        return $this->belongsTo(Self::class,'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Self::class,'parent_id');
    }

    public function getActive()
    {
        return $this->is_active == 0 ? __('dashboard.active') : __('dashboard.notactive');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class ,'product_categories');
    }
    
}
