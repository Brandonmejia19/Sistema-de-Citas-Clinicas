@extends("menu")
@section("content")
<form action="guardara" method="post">
@csrf

Id_cita:<input type="numeric" name="id_cita"><br>
Sintomas:<input type="text" name="sintomas"><br>
Padecimientos:<input type="text" name="padecimientos"><br>
Examenes:<input type="text" name="examenes"><br>

<input type="submit" name="bte" value="Guardar">
</form>


@if (isset($mensaje))
{{$mensaje}}
@endif
@endsection 