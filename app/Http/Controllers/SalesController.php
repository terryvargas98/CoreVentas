<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sales;
use App\Services\ServiceProducto;

class SalesController extends Controller
{
    public ServiceProducto $Serviceproductos;
   

    public function RegistrarVentaPorProductoGet(Producto $Producto){


        return view('VentaPorProducto',compact('Producto'));
    }
    public function RegistrarVentaPorProductoPost(Producto $Producto,Request $request){
 
      Producto::where('id', $Producto['id'])->decrement('cantidad',request('cantidad'));
      $totalventa = $Producto['precio'] * request('cantidad');
      $NewSales = new Sales;
      $NewSales->cantidad = request('cantidad');
      $NewSales->producto=$Producto['descripcion'];
      $NewSales->total=$totalventa;
      $NewSales->save();
      $NuevoCliente = new Cliente;
        $NuevoCliente->totalcompra = $totalventa;
        $NuevoCliente->save();
        return view('inicio');
    }

}
