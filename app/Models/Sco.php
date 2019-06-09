<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sco extends Model
{
    const IMAGE_PATH = 'uploads/sco/';

    public function files()
    {
        return $this->hasMany('App\Models\ScoFile');
    }

    public function next()
    {
        return self::where('id', '>', $this->id)
                            ->orderBy('id', 'asc')
                            ->first();
    }

    public function previous()
    {
        return self::where('id', '<', $this->id)
                            ->orderBy('id', 'desc')
                            ->first();
    }
}
