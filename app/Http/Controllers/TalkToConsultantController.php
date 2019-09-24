<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalkToConsultantController extends Controller
{
    public function showForm()
    {
        return view('site.talk_to_consultant');
    }

    public function saveInfo(Request $request)
    {
        session()->flash('success', 'Thanks for Your request. We will get back to you');

        return back();
    }

}
