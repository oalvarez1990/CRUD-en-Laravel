Creacion de categoria

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="card uper">
        <div class="card-header">
            Agregar categorias
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
            {{-- Iniciamos --}}
            <form method="post" action="{{ route('Categorias') }}">
            {{-- <form method="post" action="{{ url('/Categorias') }}"> --}}
                {{-- <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data"> --}}

                <div class="form-group">
                    @csrf

                    <label for="country_name">Id:</label>
                    <input type="text" class="form-control" name="name" />
                </div>

                <div class="form-group">
                    <label for="cases">Categoria :</label>
                    <input type="text" class="form-control" name="price" />
                </div>
                <div class="form-group">
                    <label for="cases">Creacion :</label>
                    <input type="text" class="form-control" name="price" />
                </div>
                <div class="form-group">
                    <label for="cases">Actualizacion :</label>
                    <input type="text" class="form-control" name="price" />
                </div>
                <div class="form-group">
                    <label for="cases">Accion :</label>
                    <input type="text" class="form-control" name="price" />
                </div>

                <button type="submit" class="btn btn-primary">Agregar Categoria</button>
            </form>
        </div>
    </div>
@endsection
