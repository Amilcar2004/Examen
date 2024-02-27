<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    public function tipoasiento(){
        $tipoasiento= new TipoAsiento();        //$tipoasiento=TipoAsiento::where('A',$tipoasiento->estado)->get();
        $tipoasiento=  TipoAsiento::all();
        return view('tiposAsientos', compact('tipoasiento'));
    }

    public function crearasiento(){
        return view('agregarTipoAsiento');
    }

    public function asientocreado(Request $request){
        $asiento = new TipoAsiento();
        $asiento->descripcion = $request->input('descripcion');
        $asiento->precio = $request->input('precio');
        $asiento->estado = $request->input('estado');
        $asiento->save();
        return redirect('/principal/tiposasientos');
    }

    public function editarasiento(){
        return view('editarAsiento');
    }

    public function eliminarasiento(){
        $asiento = new TipoAsiento();
        return view('editarAsiento');
    }
}
