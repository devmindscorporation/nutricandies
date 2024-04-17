<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpactController extends Controller
{
    public function index(){
        // $home = Home::find(1);
        // dd(auth()->user());
        return view('impacto');
    }
}
