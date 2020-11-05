@extends('layout')


@section('Container')
<form class="form-group m-4   w-25" method="POST" action="{{route('RegistrarVentaPorProducto_post',$Producto)}}">
  @csrf
    <h3>Registrar venta por producto </h3>
    <div class="form-group ">
    </div>
    <div>
      <label for="exampleInputPassword1">Producto : {{$Producto['descripcion']}}</label> </label>
      <div>
   <div>
    <label for="exampleInputPassword1" >Precio : <label> ${{$Producto['precio']}} soles </label> </label>
    <div>
    <div class="form-group">
      <label for="exampleInputPassword1">Cantidad</label>
      <input type="number" class="form-control-range" name="cantidad" id="exampleInputPassword1">
    </div>
  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

