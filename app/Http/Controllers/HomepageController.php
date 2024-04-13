<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomepageController extends Controller
{
    public function index () {
        return view('user.homepage');
    }
    public function search (Request $request) {

       $query = $request->input('query');
       $artisans = User::where('artisan', 'like', '%' . $query . '%')->get();

       return view('user.homepage', ['artisans' => $artisans, 'query' => $query]);
    }
}
