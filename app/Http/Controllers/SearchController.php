<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function search (Request $request) {
       $search = $request->input('search');
       $artisans = User::query()->where('artisan', 'LIKE', "%{$search}%")->get();

       return view('homepage', compact('artisans'));
    }
}
