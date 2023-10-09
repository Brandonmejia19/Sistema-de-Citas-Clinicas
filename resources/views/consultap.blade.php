@extends("menu")
@section("content")
<style>
table, th, td {
  border:1px solid black;
}
</style>
<table><tr><td>Nombre</td><td>Apellidos</td><td>Direccion</td><td>Telefono</td><td>Dui</td><td>Edad</td><td>Sexo</td>
<td>Editar</td><td>Borrar</td></tr>
@foreach ($pacientes as $paciente )
<tr>
<td>{{$paciente->nombre}}</td><td>{{$paciente->apellido}}</td><td>{{$paciente->direccion}}</td><td>{{$paciente->telefono}}</td><td>{{$paciente->dui}}</td><td>{{$paciente->edad}}</td><td>{{$paciente->sexo}}</td>
<td><a href="{{route('actualizarp',$paciente->id)}}">Editar</a> </td>
<td>
<form action="{{route('eliminarp',$paciente->id)}}" method="post">
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