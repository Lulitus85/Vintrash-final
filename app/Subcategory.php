<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $guarded =[];

    public function producto()
    {
        return $this->hasMany(Product::class);
    }

    public function categorias(){
        return $this->belongsTo(Category::class);
    }
}
