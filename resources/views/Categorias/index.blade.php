@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="uper">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Categoria</td>
                    <td>Creacion</td>
                    <td>Actualizacion</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($catego as $Categorias)
                    <tr>
                        <td>{{ $Categorias->id }}</td>
                        <td>{{ $Categorias->category }}</td>
                        <td>{{ $Categorias->create }}</td>
                        <td>{{ $Categorias->update }}</td>
                        <td>{{ $Categorias->action }}</td>
                        
                        <td><a href="{{ route('Categorias.edit', $Categorias->id) }}" class="btn btn-primary">Edita</a></td>
                        <td>
                            <form action="{{ route('Categorias.destroy', $Categorias->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        @endsection
