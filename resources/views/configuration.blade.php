@extends('layout')


@section('Container')
<form class="form-group mt-2 ml-2 " method="POST" action="{{route('ActivarPlugin')}}">
 @csrf
<div class="form-check">
    <input name="plugin" type="radio" class="form-check-input">
    <label class="form-check-label" for="exampleCheck1" >Plugin Puntos </label>
</div>
  <div class="">
    <button class="btn-primary" type="submit"> Activar </button>
  </div>
 
 
</form>   
@endsection