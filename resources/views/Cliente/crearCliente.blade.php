@extends('Layouts.navbar')

@section('page-content')
<div class="col-12" style="margin-top: 10px;">
    <h1>Crear Cliente</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">

            <form action="{{ route('agregarCliente') }}" method="POST" class="form-horizontal" role="form" id="bootstrap" enctype="multipart/form-data">
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Apellido</label>
                        <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Cedula</label>
                        <input name="cedula" type="text" class="form-control" id="cedula" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Correo</label>
                        <input name="correo" type="text" class="form-control" id="correo" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Telefono</label>
                        <input name="telefono" type="text" class="form-control" id="telefono" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <button class="btn btn-success" style="margin-top: 20px;">Guardar</button>
                    <a class="btn btn-danger" style="margin-top: 20px;" href="{{ route('indexCliente')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection