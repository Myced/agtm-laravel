<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $emails = Subscription::orderBy('id', 'desc')->paginate(30);

        return view('admin.subscriptions', compact('emails'));
    }

    public function add()
    {
        return view('admin.subscription_add');
    }

    public function store(Request $request)
    {
        $email = Subscription::where('email', '=', $request->email)->first();

        if(!is_null($email))
        {
            if(!$email->status)
            {
                $email->status = true;
                $email->save();
            }

            session()->flash('info', 'This email is already in the subscription list');
            return back();
        }

        $email = new Subscription;

        $email->email = $request->email;

        $email->save();

        session()->flash('success', 'Email added to subscription list');

        return back();
    }

    public function edit($id)
    {
        $email = Subscription::find($id);

        return view('admin.subscription_edit', compact('email'));
    }

    public function update(Request $request, $id)
    {
        $email = Subscription::find($id);

        $email->email = $request->email;

        $email->save();

        session()->flash('success', 'Email Updated');

        return back();
    }

    public function destroy($id)
    {
        Subscription::destroy($id);

        session()->flash('success', 'Email Deleted');

        return back();
    }

    public function enable($id)
    {
        $email = Subscription::find($id);

        $email->status = true;

        $email->save();

        session()->flash('succes', 'Email Address Disabled');

        return back();
    }
}
