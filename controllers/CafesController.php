<?php

namespace Controllers;
use Models\Cafes;
class CafesController extends Controller
{
    public function index()
    {

       return view('cafes/index',['cafes'=>cafes::all()]);
    }
 
    public function crear()
    {

       return view('cafes/crear');
    }
    public function agregar()
    {

      $cafes=new Cafes;
      $cafes->nombre_cafe=app()->request()->get('nombre');
      $cafes->precio=app()->request()->get('precio');
      $cafes->eslogan=app()->request()->get('frase');
      $cafes->save();
      return response()->redirect('/');



     
    }

    public function borrar($id)
    {

      Cafes::destroy($id);
      return response()->redirect('/');
    

    }
    public function editar($id)
    {
      $datoscafe=Cafes::find($id);
      return view('cafes/editar',['cafes'=>$datoscafe]);

      


     
    }
}