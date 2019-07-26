<?php

namespace App\Http\Controllers;

use App\Models\AgentRequest;
use Illuminate\Http\Request;
use App\Models\AgentComplain;

class AgentsController extends Controller
{
    public function index()
    {
        //return all the agents
        return view('site.agents');
    }

    public function showComplainForm()
    {
        return view('site.agents_complain_form');
    }

    public function storeComplain(Request $request)
    {
        $complain = new AgentComplain;

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

    public function requestForm()
    {
        return view('site.looking_for_agent');
    }

    public function requestStore(Request $request)
    {
        //validate the form
        $agentRequest = new AgentRequest;

        if(auth()->user())
        {
            $agentRequest->user_id = auth()->user()->id;
        }

        $agentRequest->country_id = $request->country;
        $agentRequest->purpose = $request->purpose;
        $agentRequest->report  = $request->report;
        $agentRequest->costing = $request->costing;
        $agentRequest->message = $request->message;

        $agentRequest->save();

        session()->flash("success", "Your request has been saved. You will be contacted later");

        return back();
    }
}
