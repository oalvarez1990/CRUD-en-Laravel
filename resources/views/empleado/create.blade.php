Formulario Creacion de empleados

{{-- <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data"> --}}
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">

    @csrf

    {{-- {{ method_field('Get') }} --}}

    @include('empleado.form');

</form>