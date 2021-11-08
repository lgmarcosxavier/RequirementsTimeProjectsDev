<?php

namespace App\Controllers\Auth;

use Leaf\Auth;
use App\Models\Proyecto;

class HomeController extends Controller
{
    public function index()
    {
        Auth::guard("auth");

        $proyectos = Proyecto::where('estado', '=', 1)->get();

        // echo view("pages.auth.home");
        echo view("listarproyectos", [
            'proyectos' =>  $proyectos,
            'total'     =>  count($proyectos)
        ]);

        // $blade = $app->blade;
        // echo $blade->render("listarproyectos", [
        //     'proyectos' =>  $proyectos
        // ]);
    }
}
