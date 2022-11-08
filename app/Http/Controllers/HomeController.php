<?php

namespace App\Http\Controllers;

use App\Tarefas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tarefas = Tarefas::get();

        return view('/home', ["tarefas" => $tarefas]);
    }
}
