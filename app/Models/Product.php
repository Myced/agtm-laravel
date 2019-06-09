<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //product image path
    const IMAGE_PATH = 'uploads/products/';

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
