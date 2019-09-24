<?php

namespace App\Http\Controllers;

use App\Models\AgentInfo;
use Illuminate\Http\Request;
use App\Models\UserAccountType;

class ProfileController extends Controller
{
    public function showProfile()
    {
        return view("user.profile");
    }

    public function updateAgentInfo(Request $request)
    {
        //validate the information provided
        // $this->validate($request, [
        //
        // ]);

        //save the agent info
        $user = auth()->user();

        if($user->agent_info == null)
        {
            $agentInfo = new AgentInfo;
        }
        else {
            $agentInfo = AgentInfo::where('user_id', $user->id)->first();
        }

        $FIELD_AGENT_ID = 1; //the id of the field agent account type in the DB

        $agentInfo->user_id = $user->id;
        $agentInfo->country_id = $request->agent_country;
        $agentInfo->language_id = $request->language;
        $agentInfo->agent_purpose_id = $request->purpose;
        $agentInfo->expected_report_id  = $request->expected_report;
        $agentInfo->education_level_id = $request->education_level;
        $agentInfo->costing_id = $request->costing;
        $agentInfo->products = $request->products;

        $agentInfo->save();

        session()->flash("Agent Info has been Updated");


        //indicate that the account has been updated.
        $this->indicateAccountUpdated($FIELD_AGENT_ID);


        return back();
    }

    private function indicateAccountUpdated($account_type_id)
    {
        $user = auth()->user();

        $userAccountype = UserAccountType::where('user_id', $user->id)
                                        ->where('account_type_id', $account_type_id)
                                        ->first();

        $userAccountype->filled = true;

        $userAccountype->save();

        //send out an event to notify the admins of this change.

    }
}
