<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MandateRequest extends Model
{
    const PURPOSES = [
        'sellers'  => "Source for Sellers",
        'buyers' => "Source for Buyers"
    ];

    const REPORTS = [
        'sco_loi' => 'SCO/LOI',
        'sco_data' => "SCO + Company full set Data",
        'site_vist' => "Site Visit and Meetings"
    ];

    const CONSTING = [
        '100' => "100 USD",
        '150' => "150 USD",
        '500' => '500 USD'
    ];
}
