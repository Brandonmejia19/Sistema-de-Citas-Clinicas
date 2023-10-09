<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medico;

class MedicoController extends Controller
{
    //metodo para guardar
    public function store(Request $request){
        $medico=new medico(); //nuevo objeto del modelo citas
        $medico->cargo=$request['cargo'];
        $medico->nombre=$request['nombre'];
        $medico->apellido=$request['apellido'];
        $medico->telefono=$request['telefono'];
        $medico->correo=$request['correo'];
        
        $medico->save();
        $mensaje="datos guardados";
        return view ("medicos",compact("mensaje"));
        }
       
        public function index()
{

$medicos=medico::paginate();
return view("consultam",compact("medicos"));
}
public function editarm($id)
{ //consultar registro para mostrarlo al editar
$medicos=medico::find($id);
return view("editarm",compact("medicos"));
}
public function updatem(Request $request,medico $medico){
//obtener los datos a modificar hacer la actualización
$medico->cargo=$request['cargo'];
$medico->nombre=$request['nombre'];
$medico->apellido=$request['apellido'];
$medico->telefono=$request['telefono'];
$medico->correo=$request['correo'];
$medico->save();
$mensaje="datos actualizados";
return redirect()->route("consultam")->with('mensaje','Se actualizó 
correctamente');
}   

public function deletem($id)
{
    $medico=medico::find($id);
    $medico->deletem();
    return redirect()->route("consultam")->with('mensaje', 'Se borro el registro');
}

        

}
