@extends('Layouts.navbar')

@section('page-content')
<div class="col-12" style="margin-top: 10px;">
    <h1>Editar Pelicula</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">

            <form action="{{ route('editarPelicula',['id' => $pelicula -> id]) }}') }}" method="POST" class="form-horizontal" role="form" id="bootstrap" enctype="multipart/form-data">
            @method('PUT')   

                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="{{$pelicula -> nombre}}" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Sinopsis</label>
                        <textarea name="sinopsis" type="text" class="form-control" id="sinopsis" placeholder="{{$pelicula -> sinopsis}}" aria-describedby="defaultFormControlHelp"></textarea>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Precio Unitario</label>
                        <input name="precio_unitario" type="text" class="form-control" id="precio_unitario" placeholder="{{$pelicula -> precio_unitario}}" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                    <label for="defaultFormControlInput" class="form-label">Tipo</label>
                        <select name="tipo" class="form-select" aria-label="Default select example">
                        <option value="1">Nuevo Lanzamiento</option>
                        <option value="2">Pelicula Normal</option>
                        <option value="3">Pelicula Vieja</option>
                        </select>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Genero</label>
                        <input name="genero" type="text" class="form-control" id="genero" placeholder="{{$pelicula -> genero}}" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Fecha Estreno</label>
                        <input name="fecha_estreno" type="date" class="form-control" id="fecha_estreno" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input name="imagen" type="file" class="form-control" id="imagen" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <button class="btn btn-success" style="margin-top: 20px;">Actualizar</button>
                    <a class="btn btn-danger" style="margin-top: 20px;" href="{{ route('indexPelicula')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection