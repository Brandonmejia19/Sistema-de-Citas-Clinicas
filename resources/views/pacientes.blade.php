@extends("menu")
@section("content")
<form action="guardarp" method="post">
@csrf

Nombre:<input type="text" name="nombre"><br>
Apellido:<input type="numeric" name="apellido"><br>
Direccion:<input type="text" name="direccion"><br>
Telefono:<input type="numeric" name="telefono"><br>
Dui:<input type="numeric" name="dui"><br>
Edad:<input type="text" name="edad"><br>
Sexo:<input type="text" name="sexo"><br>
<input type="submit" name="bte" value="Guardar">
</form>


@if (isset($mensaje))
{{$mensaje}}
@endif
@endsection 