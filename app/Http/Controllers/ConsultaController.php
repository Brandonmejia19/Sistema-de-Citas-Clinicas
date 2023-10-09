<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consulta;


class ConsultaController extends Controller
{

        //metodo para guardar
        public function store(Request $request){
            $consulta=new consulta(); //nuevo objeto del modelo citas
            $consulta->id=$request['id'];
            $consulta->sintomas=$request['sintomas'];
            $consulta->padecimientos=$request['padecimientos'];
            $consulta->examenes=$request['examenes'];
           
            
            $consulta->save();
            $mensaje="datos guardados";
            return view ("consultas",compact("mensaje"));
            }
           
            public function index()
    {
    $consulta=consulta::paginate();
    return view("consultaa",compact("consulta"));
    }
    public function editara($id)
    { //consultar registro para mostrarlo al editar
    $consulta=consulta::find($id);
    return view("editara",compact("consulta"));
    }
    public function updatea(Request $request,consulta $consulta){
    //obtener los datos a modificar hacer la actualización
    $consulta->id=$request['id'];
    $consulta->sintomas=$request['sintomas'];
    $consulta->padecimientos=$request['padecimientos'];
    $consulta->examenes=$request['examenes'];
   
    $consulta->save();
    $mensaje="datos actualizados";
    return redirect()->route("consultaa")->with('mensaje','Se actualizó 
    correctamente');
    }   
    
    public function deletea($id)
    {
        $consulta=consulta::find($id);
        $consulta->delete();
        return redirect()->route("consultaa")->with('mensaje', 'Se borro el registro');
    }
    
            
    
    }
    

