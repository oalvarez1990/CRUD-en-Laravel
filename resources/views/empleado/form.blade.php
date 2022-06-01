{{-- Creacion de formulario para CRUD --}}
<label for="Nombre">Nombre Completo</label>
<input type="text" name="Nombre" value="{{ $empleado-> Nombre }}" id="Nombre">
 <br>
 <label for="Nombre">Apelido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{ $empleado-> ApellidoPaterno }}" id="ApellidoPaterno">
<br>
<label for="Nombre">Apelido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{ $empleado-> ApellidoMaterno }}" id="ApellidoMaterno">
<br>
<label for="Email">Correo Electronico</label>
<input type="text" name="Correo" value="{{ $empleado-> Correo }}" id="Correo">
<br>
<label for="Nombre">Fotografia</label>
{{ $empleado-> Foto }}"
<input type="file" name="Foto"  id="Foto">
<br>
<input type="submit" value="Guardar">
<br>