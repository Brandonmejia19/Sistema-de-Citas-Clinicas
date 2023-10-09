@extends("menu")
@section("content")
<form action="{{route('updatem',$consultam)}}" method="post">
@csrf
Cargo:<input type="text" name="cargo" value="{{$medico->cargo}}"><br>
Nombres:<input type="text" name="nombre" value="{{$medico->nombre}}"><br>
Apellidos:<input type="text" name="apellido" value="{{$medico->apellido}}"><br>
Telefono:<input type="text" name="telefono" value="{{$medico->telefono}}"><br>
Correo:<input type="text" name="correo" value="{{$medico->correo}}"><br>
<input type="submit" name="bte" value="Guardar">
</form>
@endsection