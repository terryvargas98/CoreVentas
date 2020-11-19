@extends('layout')


@section('Container')
<form class="form-group mt-2 ml-2 " method="POST" action="{{route('ActivarPlugin')}}">
 @csrf
{{-- <div class="form-check">
    <input name="plugin" type="radio" class="form-check-input" value="puntos">
    <label class="form-check-label" for="exampleCheck1" >Plugin Puntos </label>
</div>
<div class="form-check">
  <input name="plugin" type="radio" class="form-check-input" value="reportes">
  <label class="form-check-label" for="exampleCheck1" >Plugin Reportes </label>
</div>
  <div class="">
    <button type="submit"> enviar </button>
  </div> --}}
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Plugin</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Agregar</th>
        <th scope="col">Eliminar </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Puntos</td>
        <td>Plugin para vizualizar los puntos por cada venta</td>
        <td><button type="submit" name="puntos" value="puntos"> Agregar </button></td>
        <td><button type="submit"> Eliminar </button></td>
        
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Reportes</td>
        <td>Plugin para vizualizar reportes de las ventas</td>
        <td><button type="submit" name="reportes" value="reportes"> Agregar </button></td>
        <td><button type="submit"> Eliminar </button></td>
      </tr>
    </tbody>
  </table>
 
 
</form>   
@endsection