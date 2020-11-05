@extends('layout')


@section('Container')

<table class="table table-bordered w-50 m-3">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($ListaProductos as $Producto)
      <tr>
      
      <th scope="row">{{$Producto['id']}}</th>
          <td>{{$Producto['descripcion']}}</td>
          <td>{{$Producto['precio']}}</td>
          <td>{{$Producto['cantidad']}}</td>
      <td> <a href="{{Route('RegistrarVentaPorProducto_get',$Producto)}}"> Comprar </a> </td> 
      </tr>
      @empty
        @endforelse
    </tbody>
  </table>
    
@endsection