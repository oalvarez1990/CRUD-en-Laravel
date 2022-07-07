@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="card uper">
        <div class="card-header">
            Editar categorias
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('Categorias.update', $Categorias->id) }}">
                <div class="form-group">
                    @csrf

                    @method('PATCH')

                    <label for="country_name">El :</label>
                    <input type="text" class="form-control" name="name" value="{{ $game->name }}" />
                </div>

                <div class="form-group">
                    <label for="cases">Game Price :</label>
                    <input type="text" class="form-control" name="price" value="{{ $game->price }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection

{{-- 
	
	calculohoras = dia * undia;
	calculominutos = calculohoras * unahora;
	calculosegundos = calculominutos * unminutos;
	// Impresion de informacion datos a los usuarios 
	document.write("El/ los dia(s) son: ", dia, " dias", '<BR/>');
	document.write("horas: ", calculohoras, '<BR/>');
	document.write("Minutos: ", calculominutos, '<BR/>');
	document.write("Segundos: ", calculosegundos, '<BR/>');
    	var calculohoras, calculominutos, calculosegundos, unahora, undia, unminutos;
	var dia = new Number();
	var hora = new Number();
	var minutos = new Number();


 --}}