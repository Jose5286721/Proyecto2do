<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carretera;
use App\Models\Comunidad;
use App\Models\Tramo;
use App\Models\TramoComunidad;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $params = array(
            array("desc"=>"Carreteras","cantidad"=>Carretera::all()->count(),"icon"=>"zmdi zmdi-turning-sign","color"=>"green"),
            array("desc"=>"Comunidades","cantidad"=>Comunidad::all()->count(),"icon"=>"zmdi zmdi-accounts","color"=>"orange"),
            array("desc"=>"Tramos","cantidad"=>Tramo::all()->count(),"icon"=>"zmdi zmdi-arrow-split","color"=>"red"),
            array("desc"=>"Tramo Comunidad","cantidad"=>TramoComunidad::all()->count(),"icon"=>"zmdi zmdi-accounts-list","color"=>"blue")
        );
        return view('home',array("secciones"=>$params));
    }
}
