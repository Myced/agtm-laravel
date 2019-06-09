<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loi extends Model
{
    const DEFAULT_IMAGE = '/site/images/loi.jpg';
    const IMAGE_PATH = 'uploads/loi/';

    public function files()
    {
        return $this->hasMany('App\Models\LoiFile');
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
