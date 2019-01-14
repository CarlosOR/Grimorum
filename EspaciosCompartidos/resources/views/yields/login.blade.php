@extends('layout.master')

@section('title')
LogIn
@endsection

@section('content')
<div style="height: 120px"></div>
  
  @if($sigin)
  <div class="alert alert-info">Ahora puedes iniciar sesion </div> 
  @endif
<div class="m-5">
    <form action="/iniciar" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"  >
    <div class="form-group">
        <label for="exampleInputEmail1"> Identificacion </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345" name="id_usuario" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contrasena</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contrasena" name="pass" required>
    </div>
    @if($error)
  <div class="alert alert-danger">{{$msError}} </div> 
  @endif
    <button type="submit" class="btn btn-primary" style="background: #2c3e50;">LogIn</button>
    </form>
</div>
@endsection

