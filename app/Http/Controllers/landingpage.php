<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingpageuser extends Controller
{
    public function Dashboardpage (){
        return view ('landingpage');
    }
}
