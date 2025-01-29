<?php

namespace App\Controllers;
use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index(): string
    {
        $ProductosModel = new ProductosModel();

        $productos = $ProductosModel ->findALL();

        return view('productos/index', ['productos' => $productos]);
    }
    public function ver($id){
        $productosModel = new ProductosModel();
        $producto = $productosModel ->find($id);
        if($producto === null){
            return redirect()->to(base_url('productos'))->with('error', 'Producto no encontrado');
        }
        
        return view('productos/ver', ['producto'=> $producto]);
    }
}
