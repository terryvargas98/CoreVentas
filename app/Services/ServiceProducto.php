<?php

namespace App\Services;
use App\Models\Producto;


 class ServiceProducto {

    public function ListProductos(){
        $ProductosList = Producto::all();
        return $ProductosList;
    }

    public function FindProducto(Request $req){
        

    }

}