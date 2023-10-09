@extends("menu")
@section("content")
<form action="guardar" method="post">
@csrf

Id_paciente:<input type="numeric" name="id_paciente"><br>
fecha:<input type="date" name="fecha_cita"><br>
Id_medico:<input type="numeric" name="id_medico"><br>
Id_consulta:<input type="numeric" name="id_consulta"><br>
<input type="submit" name="bte" value="Guardar">
</form>


@if (isset($mensaje))
{{$mensaje}}
@endif
@endsection 