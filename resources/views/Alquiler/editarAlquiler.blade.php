@extends('Layouts.navbar')


    @section('page-content')

    <div class="col-12" style="margin-top: 10px;">
    <h1>Editar Alquiler</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">

            <form action="{{ route('agregarAlquiler',[$pelicula -> id]) }}" method="POST" class="form-horizontal" role="form" id="bootstrap" enctype="multipart/form-data">
                <input type="hidden" name="total" id="total">
                <input type="hidden" name="tipo_pelicula" id="tipo_pelicula" value="{{ $pelicula->tipo }}">
                <input type="hidden" name="precio_unitario" id="precio_unitario" value="{{ $pelicula->precio_unitario }}">
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label" >Cedula Cliente</label>
                        <input name="id_cliente" type="text" class="form-control" id="nombre" placeholder="{{$alquiler -> Cliente -> nombre}}" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Fecha Inicio</label>
                        <input name="fecha_inicio" type="date" class="form-control" id="fecha_inicio" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Fecha Final</label>
                        <input name="fecha_fin" type="date" class="form-control" id="fecha_fin" aria-describedby="defaultFormControlHelp" />
                    </div>

                    <div class="col-12"style="margin-top:20px;">
                        <div class="">
                            El valor a pagar es de <span id="totalPagar"></span>
                        </div>
                    </div>
                   
                    <button class="btn btn-success" style="margin-top: 20px;">Guardar</button>
                    <a class="btn btn-danger" style="margin-top: 20px;" href="{{ route('indexAlquiler')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection

@section('page-scripts')
    <script>
        function calcularFecha(){
            let txt_fecha_inicio = $('#fecha_inicio').val();
            let txt_fecha_fin = $('#fecha_fin').val();
            let fecha_inicio = new Date(txt_fecha_inicio);
            let fecha_fin = new Date(txt_fecha_fin);

            let diferencia_milisegundos = fecha_fin.getTime() - fecha_inicio.getTime();

            let diferencia_dias = Math.floor(diferencia_milisegundos / (1000 * 60 * 60 * 24));


            if(txt_fecha_inicio.length > 0 && txt_fecha_fin.length > 0) {
                let tipoPelicula = $('#tipo_pelicula').val();
                let dias_adicionales = 0;
                let total = 0;
                let precio_unitario = $('#precio_unitario').val();
                switch(tipoPelicula) {
                    case "1":
                        total = precio_unitario * diferencia_dias;
                    break;

                    case "2":
                        if (diferencia_dias <= 3) {
                        total = precio_unitario * diferencia_dias;
                        } else {
                        let dias_adicionales = diferencia_dias - 3;
                        total = precio_unitario * 3 + (precio_unitario * 1.15 * dias_adicionales);
                        }
                    break;

                    case "3":
                        if (diferencia_dias <= 5) {
                        total = precio_unitario * diferencia_dias;
                        } else {
                        let dias_adicionales = diferencia_dias - 5;
                        total = precio_unitario * 5 + (precio_unitario * 1.10 * dias_adicionales);
                        }
                    break;
                }

                $('#totalPagar').html(`$ ${total}`);
                $('#total').val(total);
            }
        }

        const selectFechaInicio = document.querySelector('#fecha_fin');
        const selectFechaFin = document.querySelector('#fecha_fin');

        selectFechaInicio.addEventListener('focusout', (event) => {
            calcularFecha()
        });

        selectFechaFin.addEventListener('focusout', (event) => {
            calcularFecha()
        });
    </script>
@endsection

    