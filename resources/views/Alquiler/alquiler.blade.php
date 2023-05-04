@extends('Layouts.navbar')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    @section('page-content')

    <table id="alquileres" class="table">
            <thead>
                <tr>
                    <th>Nombre Cliente</th>
                    <th>Nombre Pelicula</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Valor Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alquileres as $alquiler)
                <tr>
                    <th>{{$alquiler -> Cliente -> nombre}}</th>
                    <th>{{$alquiler -> Pelicula -> nombre}}</th>
                    <th>{{date('Y-m-d', strtotime($alquiler->fecha_inicio))}}</th>
                    <th>{{date('Y-m-d', strtotime($alquiler -> fecha_fin))}}</th>
                    <th>{{$alquiler -> valor_total}}</th>
                    <th>
                    <form action="{{ route('vistaEditarAlquiler',['id' => $alquiler->id]) }}" method="POST" class="form-horizontal" role="form" id="bootstrap">
                        @method('POST')
                        <button class="btn btn-success edit-button">Editar</button>
                        </form>
                        <br>
                        <form action="{{ route('eliminarAlquiler', $alquiler->id) }}" method="POST">
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>

    @endsection