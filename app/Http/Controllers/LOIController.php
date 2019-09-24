<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LOIController extends Controller
{
    public function index()
    {
        return view('site.lois');
    }

    public function showLookingForm()
    {
        return view('site.looking_for_loi');
    }

    public function storeLOILookingInfo(Request $request)
    {
        //validate
        session()->flash('success', 'Your Request has been saved. <br> Thanks');

        return back();
    }
}
