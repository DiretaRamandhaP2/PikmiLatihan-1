<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    public function dashboardAdmin()
    {
        return view('pages.admin.dashboard');
    }

    public function dashboardGuru()
    {
        return view('pages.guru.dashboard');
    }


}
