<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportersController extends Controller
{
    public function index()
    {
        return view('site.exporters');
    }

    public function showLookingForm()
    {
        return view('site.looking_for_exporters');
    }
}
