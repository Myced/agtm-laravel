<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SCOController extends Controller
{
    public function index()
    {
        return view('site.scos');
    }

    public function showLookingForm()
    {
        return view('site.looking_for_sco');
    }

    public function storeLOILookingInfo(Request $request)
    {
        //validate
        session()->flash('success', 'Your Request has been saved. <br> Thanks');

        return back();
    }
}
