<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Vuelo;
class VuelosController extends Controller
{
    public function crear(){
        return view('inicio');
    }
    public function vuelos(){
        $vuelos = new Vuelo();
        //$vuelos=Vuelo::where('A',$vuelos->fecha_de_salida)->get();
        $vuelos= Vuelo::all();
        return view('vuelos', compact ('vuelos'));
    }

    public function crearvuelo(){

        return view('nuevoVuelo');
    }

    public function vueloguardar(Request $request){
        $vuelo = new Vuelo();
        $vuelo->numeroVuelo = $request->input('numeroVuelo');
        $vuelo->origen = $request->input('origen');
        $vuelo->destino = $request->input('destino');
        $vuelo->numeroAsientos = $request->input('numeroAsientos');
        $vuelo->fecha_de_salida = $request->input('fecha_de_salida');
        $vuelo->save();
        return redirect('/principal/vuelos');
    }


}
