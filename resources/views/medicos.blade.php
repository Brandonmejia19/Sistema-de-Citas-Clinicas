@extends("menu")
@section("content")
<form action="guardarm" method="post">
@csrf

Cargo:<input type="text" name="cargo"><br>
Nombre:<input type="text" name="nombre"><br>
Apellido:<input type="numeric" name="apellido"><br>
Telefono:<input type="numeric" name="telefono"><br>
Correo:<input type="numeric" name="correo"><br>
<input type="submit" name="bte" value="Guardar">
</form>


@if (isset($mensaje))
{{$mensaje}}
@endif
@endsection 