<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollController extends Controller
{
    function create()
    {
        return view('dashboard.polls.create');
    }
}
