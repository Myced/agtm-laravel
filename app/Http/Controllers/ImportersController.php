<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportersController extends Controller
{
    public function index()
    {
        return view('site.importers');
    }

    public function showLookingForm()
    {
        return view('site.looking_for_importers');
    }
}
