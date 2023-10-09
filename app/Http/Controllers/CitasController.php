<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citas;

class CitasController extends Controller
{
    //metodo para guardar
    public function store(Request $request){
        $cita=new citas(); //nuevo objeto del modelo citas
        $cita->id_paciente=$request['id_paciente'];
        $cita->fecha_cita=$request['fecha_cita'];
        $cita->id_medico=$request['id_medico'];
        $cita->id_consulta=$request['id_consulta'];
        
        $cita->save();
        $mensaje="datos guardados";
        return view ("citas",compact("mensaje"));
        }
       
        public function index()
{
$cita=citas::paginate();
return view("consulta",compact("cita"));
}
public function editar($id)
{ //consultar registro para mostrarlo al editar
$cita=citas::find($id);
return view("editar",compact("cita"));
}
public function update(Request $request,citas $cita){
//obtener los datos a modificar hacer la actualización
$cita->id_paciente=$request['id_paciente'];
$cita->fecha_cita=$request['fecha_cita'];
$cita->id_medico=$request['id_medico'];
$cita->id_consulta=$request['id_consulta'];

$cita->save();
$mensaje="datos actualizados";
return redirect()->route("consulta")->with('mensaje','Se actualizó 
correctamente');
}   

public function delete($id)
{
    $cita=citas::find($id);
    $cita->delete();
    return redirect()->route("consulta")->with('mensaje', 'Se borro el registro');
}

        

}
