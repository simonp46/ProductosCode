<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Home extends BaseController
{
    public function index()
    {
        $crud= new CrudModel();
        $datos= $crud->listarProductos();
        $dato=[
            "datos"=>$datos
        ];
        return view('index',$dato);
    }
    public function guardar()
    {
       $datos = [
           "IdProducto" => $_POST['identificacion'],
           "Nombre" => $_POST['name'],
           "Descripcion" => $_POST['description'],
           "VlrUnidad" => $_POST['price']
       ];

        $crud= new CrudModel();
        $respuesta= $crud->insertar($datos);

        if ($respuesta > 0) {
            return redirect()->to(base_url().'/')->with('mensaje','1');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
    }
}
