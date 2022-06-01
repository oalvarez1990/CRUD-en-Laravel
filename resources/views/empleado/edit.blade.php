Editar empleados

<form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">

    @csrf

    {{ method_field('PACHT') }}

@include('empleado.form');

</form>
