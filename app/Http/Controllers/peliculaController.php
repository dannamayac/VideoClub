<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class peliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('Pelicula.pelicula', compact('peliculas'));
    }
    public function vistaCrearPelicula()
    {
        return view('Pelicula.crearPelicula');
    }
    public function agregarPelicula(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->nombre = $request->nombre;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->precio_unitario = $request->precio_unitario;
        $pelicula->tipo = $request->tipo;
        $pelicula->genero = $request->genero;
        $pelicula->fecha_estreno = $request->fecha_estreno;

        // Guardar imagen
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $filename);
            $pelicula->imagen = $filename;
        }

        $pelicula->save();

        return redirect()->route('indexPelicula');
    }
    public function vistaEditarPelicula($id)
    {
        $pelicula=Pelicula::find($id);
        return view('Pelicula.editarPelicula',compact('pelicula'));
    }
    public function editarPelicula(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->nombre = $request->nombre;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->precio_unitario = $request->precio_unitario;
        $pelicula->tipo = $request->tipo;
        $pelicula->genero = $request->genero;
        $pelicula->fecha_estreno = $request->fecha_estreno;

        // Guardar imagen
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $filename);
            $pelicula->imagen = $filename;
        }

        $pelicula->save();

        return redirect()->route('indexPelicula');
    }
    public function eliminarPelicula($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return redirect()->route('indexPelicula');
    }
}
