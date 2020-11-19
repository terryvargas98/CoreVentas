<?php

namespace App\Http\Controllers;

use App\Services\ServiceProducto;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function CreateProducto(Request $req){
        
        $MiProducto = new Producto();
        
        $MiProducto= Producto::create($req->all());

        return redirect()->route('producto')->with('status','Producto registrado con exito');
        
    }

    public function listarProducto(){
        $ServiceProdu = new ServiceProducto;
        $ListaProductos = $ServiceProdu->ListProductos();
        return view('ListProducto',compact('ListaProductos'));
    }
    public function productos_all(){
        $ServiceProdu = new ServiceProducto();
        $ListaProductos = $ServiceProdu->ListProductos();

        
        return \response(\json_encode($ListaProductos),200)->header('Content-type','text/plain');
    }

    
}
