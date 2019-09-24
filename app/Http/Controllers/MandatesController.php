<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MandateComplain;

class MandatesController extends Controller
{
    public function index()
    {
        return view('site.mandates');
    }

    public function showComplainForm()
    {
        return view("site.mandates_complain_form");
    }

    public function storeComplain(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $complain = new MandateComplain;

        if(auth()->user())
        {
            $complain->user_id = auth()->user()->id;
        }

        $complain->name = $request->name;
        $complain->tel  = $request->tel;
        $complain->email = $request->email;
        $complain->title  = $request->title;
        $complain->description = $request->description;

        $complain->save();

        session()->flash("success", "Complain Sent");

        return back();
    }

    public function showRequestForm()
    {
        return view('site.mandates_request_form');
    }

    public function storeRequest(Request $request)
    {
        session()->flash('success', 'Request Saved');

        return back();
    }
}
