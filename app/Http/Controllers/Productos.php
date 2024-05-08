<?php

namespace App\Http\Controllers;

use App\Models\Producto_model;
use Illuminate\Http\Request;

class Productos extends Controller
{
    public function index(){
        $productos = Producto_model::all();
        return $productos;
    }

    public function get_product_by_id(Request $request){
        $productos = Producto_model::find($request->id);
        return $productos;
    }

    public function guardar_editar(Request $request){

        if($request->id == 0){
            $productos = new Producto_model();
        }
        else {
            $productos = Producto_model::find($request->id);
        }
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->precio = $request->precio;
        $productos->cantidad = $request->cantidad;
        $productos->save();

        return $productos;
        
    }

    public function eliminar(Request $request){

        $productos = Producto_model::find($request->id);
        $productos ->delete();
        return "OK";
    }

}
