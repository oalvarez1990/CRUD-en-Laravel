Mostrar lista de empleado

{{-- Inicio cabecera de formulario --}}
<table class="table table-light">
    <thead class="thead-lignt">
        <tr>
            <th>Registro N.</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo Electronico</th>
            <th>Accion</th>

        </tr>

    </thead>

    {{-- Cuerpo de la tabla --}}
    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->Foto }}</td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                   <a href="{{ url('/empleado/'. $empleado->id.'/edit') }}">
                       Editar
                   </a>
                   {{-- <a href="{{ url('/empleado/'. $empleado->id.'/create') }}">
                       Crear
                   </a> --}}
                    
                    {{-- Se crea metodo para borrar dato --}}
                    <form action="{{ url('/empleado/' . $empleado->id) }}" method="post">
                        @csrf
                        {{-- COnvertir el metodo delete --}}
                        {{ method_field('DELETE') }}
                        <input type="submit" onclic="return confirm ('¿uieres Borrar?')" 
                        value="Borrar">
                    </form>
                </td>


            </tr>
        @endforeach
    </tbody>

</table>
