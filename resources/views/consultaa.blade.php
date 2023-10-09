@extends("menu")
@section("content")
<style>
table, th, td {
  border:1px solid black;
}
</style>
<table><tr><td>Id</td><td>Sintomas</td><td>Padecimientos</td><td>Examenes</td>
<td>Editar</td><td>Borrar</td></tr>
@foreach ($consulta as $consultaa)
<tr>
<td>{{$consultaa->id}}</td><td>{{$consultaa->sintomas}}</td><td>{{$consultaa->padecimientos}}</td><td>{{$consultaa->examenes}}</td>
<td><a href="{{route('actualizara',$consultaa->id)}}">Editar</a> </td>
<td>
<form action="{{route('eliminara',$consultaa->id)}}" method="post">
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