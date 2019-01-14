@extends('layout.master')

@section('title')
Buscar
@endsection

@section('content')
<style>
        .sidenav {
            height: 100%;
            width: 300px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #a68d00;
            overflow-x: hidden;
            padding-top: 20px;
        }
</style>
 <div style="height: 100px"></div>
    <div class="row">
        <div class="col-3">
            <div class="rounded text-center sidenav">
                <div style="height: 90px;"></div>

                <form action="" method="POST">
                    <div class="row-10">
                        <div class="col">
                            <div class="input-group m-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"> <img class="img-fluid" style="width: 20px; height: 20px;"
                                            src="https://image.flaticon.com/icons/png/512/57/57477.png">
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="¿Que estas buscando?"
                                    aria-describedby="inputGroupPrepend" name="txtBuscar" required>
                            </div>
                        </div>
                    </div>
                    <div class="m-3">
                        <div class="form-group text-left">
                            @include('layout.tipo_espacio')
                        </div>
                        <div class="form-group text-left">  
                             @include('layout.tiempo')
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="m-5">
                <h2 style="color: #a68d00;">
                    Encuentra el lugar de oficina, local comercial, bodega y consultorio que estas buscando y comparte
                    gastos con los espacios
                </h2>
            </div>

            <div class="row mt-3">
                <div class="col-4">
                    <img class="rounded img-fluid" src="http://www.wtcbarcelona.com/images/news_promos/la-oficina-del-futuro.jpg"
                        alt="Ups no se pudo cargar la imagen">
                </div>
                <div class="col-8">
                    <div class="m-3">
                        <h5>
                            Consultorio de odontología en Mazurén
                        </h5>
                        <p>
                            Arriendo por horas Espacio a compartir: 13m2
                        </p>
                        <p style="font-size: 13px">
                            ¿Buscas un espacio
                            para compartir?
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-
                            dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repre-
                            henderit in voluptate velit esse cillum dolore eu fugiat
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <img class="rounded img-fluid" src="http://lafabricadeltiempo.es/wp-content/uploads/trabajo-en-oficina.jpg"
                        alt="Ups no se pudo cargar la imagen">
                </div>
                <div class="col-8">
                    <div class="m-3">
                        <h5>
                            Consultorio de odontología en Mazurén
                        </h5>
                        <p>
                            Arriendo por horas Espacio a compartir: 13m2
                        </p>
                        <p style="font-size: 13px">
                            ¿Buscas un espacio
                            para compartir?
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-
                            dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repre-
                            henderit in voluptate velit esse cillum dolore eu fugiat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection