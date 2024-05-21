<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUser extends Controller
{
    public function LoginUser (){
        return view ('login');
    }
}
