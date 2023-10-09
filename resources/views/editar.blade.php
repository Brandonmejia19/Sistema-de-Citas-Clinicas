@extends("menu")
@section("content")
<form action="{{route('update',$cita)}}" method="post">
@csrf
Id_paciente:<input type="numeric" name="id_paciente" value="{{$cita->id_paciente}}"><br>
Fecha:<input type="date" name="fecha_cita" value="{{$cita->fecha_cita}}"><br>
Id_medico:<input type="text" name="id_medico" value="{{$cita->id_medico}}"><br>
Id_consulta:<input type="text" name="id_consulta" value="{{$cita->id_consulta}}"><br>
<input type="submit" name="bte" value="Guardar">
</form>
@endsection