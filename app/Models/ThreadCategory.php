<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThreadCategory extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Models\ForumThread');
    }
}
