@extends('Layouts.navbar')

@section('page-content')


    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($peliculas as $pelicula)
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('storage/images/' . $pelicula->imagen) }}" class="card-img-thumbnail img-responsive" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$pelicula -> nombre}}</h5>
            <p class="card-text">{{$pelicula -> sinopsis}}</p>
            <a href="{{route('vistaCrearAlquiler',[$pelicula -> id])}}" class="btn btn-primary" >Alquilar</a>
            <form action="{{route('vistaEditarPelicula',[$pelicula -> id])}}" method="POST">
                @method('POST')
                <button type="submit" class="btn btn-success" style="margin-top: 10px;">Editar Película</button>
            </form>
            <form action="{{ route('eliminarPelicula', [$pelicula->id]) }}" method="POST">
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="margin-top: 10px;">Eliminar Película</button>
            </form>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Fecha de Estreno {{date('Y-m-d', strtotime($pelicula -> fecha_estreno))}}</small>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
    <a type="button" class="btn btn-outline-primary" href="{{route('vistaCrearPelicula')}}" style="margin-top: 20px;">Crear Pelicula</a>

@endsection