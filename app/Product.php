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
        return $this->hasMany(Multimedia::class);
    }

    public function categoria(){
        return $this->belongsTo(Category::class);
    }
}
