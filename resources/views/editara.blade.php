@extends("menu")
@section("content")
<form action="{{route('editarp',$consulta)}}" method="post">
@csrf
Id:<input type="numeric" name="id" value="{{$consulta->id}}"><br>
Sintomas:<input type="text" name="sintomas" value="{{$consulta->sintomas}}"><br>
Padecimientos:<input type="text" name="id_medico" value="{{$consulta->padecimientos}}"><br>
Examenes:<input type="text" name="examenes" value="{{$consulta->examenes}}"><br>
<input type="submit" name="bte" value="Guardar">
</form>
@endsection