<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    //

    public function index (){

        $ev = new \App\Models\Evento;

        $ev->evento_id = 10;

        // return $ev;
        return view('eventos.index',compact('ev'));
    }
}
