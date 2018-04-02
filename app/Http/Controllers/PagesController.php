<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function panel_control(){
      $title ='Bienvenido a Centro de Costos';
      //return view('pages.panel-control', compact('title'));
      return view('pages.panel-control')->with('title',$title);
    }
    public function puntos(){
      $title = 'Operaciones de los Puntos';
      return view('pages.puntos')->with('title',$title);
    }
    public function factura(){
        $data = array(
          'title'=> 'Operaciones de Facturas',
          'operaciones'=>['Registar','Modificar','Borrar','Consultar']
        );
        return view('pages.factura')-> with($data);
    }
}
