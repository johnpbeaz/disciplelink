<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    public function gettingStarted()
    {
        return view('user.getting-started');
    }

    public function terms()
    {
        return view('user.terms');
    }
}
