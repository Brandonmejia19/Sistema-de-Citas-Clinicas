@extends("menu")
@section("content")
<form action="{{route('pacientes',$editarp)}}" method="post">
@csrf
Nombre:<input type="text" name="nmbre" value="{{$paciente->nombre}}"><br>
Apellidos:<input type="text" name="apellido" value="{{$paciente->apellido}}"><br>
Direccion:<input type="text" name="direccion" value="{{$paciente->direccion}}"><br>
Telefono:<input type="text" name="telefono" value="{{$paciente->telefono}}"><br>
Dui:<input type="text" name="dui" value="{{$paciente->dui}}"><br>
Edad:<input type="text" name="edad" value="{{$paciente->edad}}"><br>
Sexo:<input type="text" name="sexo" value="{{$paciente->sexo}}"><br>
<input type="submit" name="bte" value="Guardar">
</form>
@endsection