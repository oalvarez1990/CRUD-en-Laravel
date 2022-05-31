Formulario Creacion de empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">Nombre Completo</label>
    <input type="text" name="Nombre" id="Nombre">
     <br>
     <label for="Nombre">Apelido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>
    <label for="Nombre">Apelido Materno</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
    <br>
    <label for="Email">Correo Electronico</label>
    <input type="text" name="Correo" id="Correo">
    <br>
    <label for="Nombre">Fotografia</label>
    <input type="file" name="Foto" id="Foto">
    <br>

    <input type="submit" value="Guardar">
    <br>

</form>