<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialRunningController extends Controller
{
    public function index()
    {
        return view('socialRunningTracker/socialRunning');
    }
}
