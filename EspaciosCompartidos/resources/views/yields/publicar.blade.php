@extends('layout.master')

@section('title')
Publicar
@endsection

@section('content')
<div style="height: 150px"></div>
<div class="container">
        <form action="/publicar" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"  >
        <div class="m-4 text-center">
        <h1 style="color:#18bc9c;">Publica tu espacio</h1>
        </div>
            <div class="row-10">
                <div class="col">
                    <div class="input-group m-1">
                        <input type="text" class="form-control" id="Nombre" placeholder="Nombre del espacio"
                             name="Nombre" required>
                    </div>
                </div>
            </div>
            <div class="row-10">
                <div class="col">
                    <div class="input-group m-1">
                        <input type="number" class="form-control" id="Tamano" placeholder="Tamaño en metros cuadrados"
                             name="Tamano" required>
                    </div>
                </div>
            </div>
            <div class="form-group text-left m-4">
                @include('layout.tipo_espacio')
            </div>
            <div class="form-group text-left m-4">
                @include('layout.tiempo')
                <button type="submit" class="btn btn-primary m-3" style="background: #2c3e50;">Publcicar Espacio</button>
            </div>
        </form>
    </div>
@endsection