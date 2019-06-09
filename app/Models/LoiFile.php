<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoiFile extends Model
{
    public function loi()
    {
        return $this->belongsTo('App\Models\Loi');
    }
}
