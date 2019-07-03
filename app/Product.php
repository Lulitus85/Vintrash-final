<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function multimedia(){
        return $this->hasMany(Multimedia::class,'product_id');
    }

    public function categoria(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subcategoria(){
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
}

