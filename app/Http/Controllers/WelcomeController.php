<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('welcome');
    }
}
