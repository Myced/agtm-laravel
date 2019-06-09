<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoFile extends Model
{
    public function sco()
    {
        return $this->belongsTo('App\Models\Sco');
    }
}
