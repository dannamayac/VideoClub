<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function index()
    {
        $clientes=Cliente::all();
        return view('Cliente.cliente',compact('clientes'));
    }
    public function vistaCrearCliente()
    {
        return view('Cliente.crearCliente');
    }
    public function agregarCliente(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula = $request->cedula;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;

        $cliente->save();

        return redirect()->route('indexCliente');
    }
    public function vistaEditarCliente($id){

        $cliente=Cliente::find($id);
        return view('Cliente.editarCliente',compact('cliente'));
    }
    public function editarCliente(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula = $request->cedula;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;

        $cliente->save();

        return redirect()->route('indexCliente');
    }
    public function eliminarCliente($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('indexCliente');
    }
}
