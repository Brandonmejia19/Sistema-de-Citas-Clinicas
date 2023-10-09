@extends("menu")
@section("content")
<style>
table, th, td {
  border:1px solid black;
}
</style>
<table><tr><td>Cargo</td><td>Nombre</td><td>Apellidos</td><td>Telefono</td><td>Correo</td>
<td>Editar</td><td>Borrar</td></tr>
@foreach ($medicos as $medico )
<tr>
<td>{{$medico->cargo}}</td><td>{{$medico->nombre}}</td><td>{{$medico->apellido}}</td><td>{{$medico->telefono}}</td><td>{{$medico->correo}}</td>
<td><a href="{{route('actualizarm',$medico->id)}}">Editar</a> </td>
<td>
<form action="{{route('eliminarm',$medico->id)}}" method="post">
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