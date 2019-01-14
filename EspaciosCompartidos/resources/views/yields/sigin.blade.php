@extends('layout.master')

@section('title')
SigIn
@endsection

@section('content')
<div class="container">
<form action="/sigin" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"  >
    <div style="height: 150px"></div>
        @if(strlen($msError) > 0)
            <div class="alert alert-danger">
                <p>
                {{$msError}}
                </p>
            </div>
        @endif
        <h2 style="color: #18bc9c;">Registrate para ver el mejor contenido</h2>
        <div class="m-5">
            <div class="form-group">
                <label for="identificacion">Identificacion</label>
                <input type="number" class="form-control" id="identificacion" 
                    placeholder="123456789" name="Id_Usuario" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Apellido</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellido" name="Apellido" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Telefono</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono" name="Telefono" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  name="Password1" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background: #2c3e50;">Registrarse</button>
        </div>
        
    </form>
</div>


@endsection