<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Cliente;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class alquilerController extends Controller
{
    public function index($pelicula_id=null)
    {
        $alquileres=Alquiler::all();
        return view('Alquiler.alquiler',compact('alquileres'));
    }
    public function vistaCrearAlquiler($pelicula_id)
    {
        $pelicula=Pelicula::find($pelicula_id);
        return view('Alquiler.crearAlquiler',compact('pelicula'));
    }
    public function agregarAlquiler(Request $request, $id_pelicula)
    {
        $cliente = Cliente::where('cedula', $request->id_cliente)->first();
        if (!$cliente) {
            return redirect()->back()->withErrors(['message' => 'El cliente con esa cédula no existe']);
        }
        $cliente_id = $cliente->id;

        $alquiler = new Alquiler();
        $alquiler -> id_cliente = $cliente_id;
        $alquiler -> id_peliculas = $id_pelicula;
        $alquiler -> fecha_inicio = $request -> fecha_inicio;
        $alquiler -> fecha_fin = $request -> fecha_fin;
        $alquiler->valor_total = $request->total;

        
        $alquiler -> save();

        return redirect() -> route('indexAlquiler');
    }
    public function vistaEditarAlquiler($id)
    {
        $alquiler=Alquiler::find($id);
        
        return view('Alquiler.alquiler',compact('alquiler'));
    }
    public function editarAlquiler(Request $request, $id, $id_pelicula)
    {
        $cliente = Cliente::where('cedula', $request->id_cliente)->first();
        if (!$cliente) {
            return redirect()->back()->withErrors(['message' => 'El cliente con esa cédula no existe']);
        }
        $cliente_id = $cliente->id;

        $alquiler = Alquiler::find($id);
        $alquiler -> id_cliente = $cliente_id;
        $alquiler -> id_peliculas = $id_pelicula;
        $alquiler -> fecha_inicio = $request -> fecha_inicio;
        $alquiler -> fecha_fin = $request -> fecha_fin;
        $alquiler->valor_total = $request->total;


        $alquiler->save();

        return redirect()->route('indexAlquiler');
    }
    public function eliminarAlquiler($id)
    {
        $alquiler = Alquiler::find($id);
        $alquiler->delete();
        return redirect()->route('indexAlquiler');
    }
}
