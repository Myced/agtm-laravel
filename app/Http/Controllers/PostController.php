<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

    }

    public function report_post()
    {
        //doo other stuff here

        session()->flash('success', 'Thanks for your feedback. We look at this post');

        return back();
    }
}
