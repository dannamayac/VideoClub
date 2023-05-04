@extends('Layouts.navbar')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    @section('page-content')
            <table id="clientes" class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <th>{{$cliente -> nombre}}</th>
                    <th>{{$cliente -> apellido}}</th>
                    <th>{{$cliente -> cedula}}</th>
                    <th>{{$cliente -> correo}}</th>
                    <th>{{$cliente -> telefono}}</th>
                    <th>
                    <form action="{{ route('vistaEditarCliente',['id' => $cliente->id]) }}" method="POST" class="form-horizontal" role="form" id="bootstrap">
                                    @method('POST')
                                    <button class="btn btn-success edit-button">Editar</button>
                                    </form>
                                    <br>
                                    <form action="{{ route('eliminarCliente', $cliente->id) }}" method="POST">
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a type="button" class="btn btn-outline-primary" href="{{route('vistaCrearCliente')}}" style="margin-top: 20px;">Crear Cliente</a>


    @endsection