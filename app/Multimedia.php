<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $guarded = [];

    public function producto(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
