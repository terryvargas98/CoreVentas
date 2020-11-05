@extends('layout')

@section('Container')
<form class="form-group m-4    w-25" method="POST" action="{{route('RegistrarProducto')}}">
  @csrf
    <h3>Registrar un Producto </h3>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <input type="text" class="form-control-range" name="descripcion" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Cantidad</label>
        <input type="number" class="form-control-range" name="cantidad" id="exampleInputPassword1">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Precio</label>
        <input type="number" class="form-control-range" name="precio" id="exampleInputPassword1">
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection