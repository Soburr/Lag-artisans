<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function dashboard (){
        return view('dashboard');
    }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }

}
