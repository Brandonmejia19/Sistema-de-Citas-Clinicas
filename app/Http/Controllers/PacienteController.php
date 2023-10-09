<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;

class PacienteController extends Controller
{
    public function store(Request $request){
        $paciente=new paciente(); //nuevo objeto del modelo citas
        $paciente->nombre=$request['nombre'];
        $paciente->apellido=$request['apellido'];
        $paciente->direccion=$request['direccion'];
        $paciente->telefono=$request['telefono'];
        $paciente->dui=$request['dui'];
        $paciente->edad=$request['edad'];
        $paciente->sexo=$request['sexo'];
        
        
        $paciente->save();
        $mensaje="datos guardados";
        return view ("pacientes",compact("mensaje"));
        }
       
        public function index()
{

$pacientes=paciente::paginate();
return view("consultap",compact("pacientes"));
}
public function editarp($id)
{ //consultar registro para mostrarlo al editar
$paciente=paciente::find($id);
return view("editarp",compact("pacientes"));
}
public function updatep(Request $request,paciente $paciente){
//obtener los datos a modificar hacer la actualización
        $paciente->nombre=$request['nombre'];
        $paciente->apellido=$request['apellido'];
        $paciente->direccion=$request['direccion'];
        $paciente->telefono=$request['telefono'];
        $paciente->dui=$request['dui'];
        $paciente->edad=$request['edad'];
        $paciente->sexo=$request['sexo'];

$paciente->save();
$mensaje="datos actualizados";
return redirect()->route("consultap")->with('mensaje','Se actualizó 
correctamente');
}   

public function deletep($id)
{
    $paciente=paciente::find($id);
    $paciente->deletep();
    return redirect()->route("consultap")->with('mensaje', 'Se borro el registro');
}

}
