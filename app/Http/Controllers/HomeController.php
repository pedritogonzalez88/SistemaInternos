<?php

namespace App\Http\Controllers;

use App\Models\Interno;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $listaInterno = Interno::all();
        return view('home', compact('listaInterno'));
    }
}
