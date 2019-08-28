<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumThread extends Model
{
    public function replies()
    {
        return $this->hasMany('App\Models\ThreadReply');
    }

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function addView()
    {
        ++$this->views;
        $this->save();
    }
}
