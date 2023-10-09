@extends("menu")
@section("content")
<style>
table, th, td {
  border:1px solid black;
}
</style>
<table><tr><td>Id_paciente</td><td>Fecha</td><td>Id_medico</td><td>Id_consulta</td>
<td>Editar</td><td>Borrar</td></tr>
@foreach ($cita as $citaa )
<tr>
<td>{{$citaa->id_paciente}}</td><td>{{$citaa->fecha_cita}}</td><td>{{$citaa->id_medico}}</td><td>{{$citaa->id_consulta}}</td>
<td><a href="{{route('actualizar',$citaa->id)}}">Editar</a> </td>
<td>
<form action="{{route('eliminar',$citaa->id)}}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="Eliminar">
</form>
</td>
</tr>
@endforeach
</table>
{{Session::get('mensaje')}}
@endsection