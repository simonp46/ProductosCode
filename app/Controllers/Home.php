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
        print_r($_POST);
    }
}
