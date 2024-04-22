<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depoimentos;
use App\Models\Home;
use App\Models\Galeria;
use App\Models\Posts;
use App\Models\Comunidade;
use App\Models\Opcoe;
use App\Models\Pacote;


class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
