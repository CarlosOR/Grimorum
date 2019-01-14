@extends('layout.master')

@section('title')
Home
@endsection

@section('content')
    <!-- Header -->
    <header class="masthead bg-secondary text-white text-center">
      <div class="container">
          @if($loged)
        <h1> Bienvenido <strong><?php echo $user ?></strong> </h2>
        @endif
        <h3 class="text-uppercase p-5">Espacios perfectos para compartir gastos 
y rentabilizar los lugares que no usas</h3>    
        <div class="row">
            <div class="col">
                
            <div class="rounded mx-auto d-block box m-2">
                <div class="mx-auto d-block line"></div>
                <h4>¿Tienes un espacio para compartir?</h4>
                <p>
                Tendrás la oportunidad de ofrecer y 
compartir los espacios que no utilizas 
generando ingresos extra
                </p>
            </div>
            <div class="rounded mx-auto d-block line mybtn" style="background: #005370;">
              <form action="/publicar">
                <button class="btn" type="submit" style="width: 100%;" ><strong>Publicar</strong></button>
              </form>
                
            </div>
            </div>
           
        
            <div class="col">
              
            <div class="rounded mx-auto d-block box m-2">
            <div class="mx-auto d-block line1"></div>
                <h4>Buscas un espacio para compartir?</h4>
                <p>
                Encuentra el lugar de oficina, local 
comercial, bodega y consultorio que 
estas buscando.
                </p>
            </div>
            <div class="rounded mx-auto d-block line mybtn" style="background: #8f8000;">
            <form action="/buscar">
                <button type="submit" style="width: 100%;" class="btn" value="Buscar"><strong>Buscar</strong></button>
            </form>
            </div>
            </div>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="instrucciones">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0 m-5">Comparte tu espacio</h2>
        <div class="row">
        <img class="img-fluid" src=" {{ asset('img/Boceto.png') }}" alt="">
        </div>
      </div>
    </section>

    <!-- Preguntas Section -->
    <section class="bg-secondary text-white mb-0" id="askme">
      <div class="container">
        <h2 class="text-center text-uppercase text-white m-5">Preguntas Frecuentes</h2>
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <h4 class="lead">¿Como Compartir tu espacio?</h4>
                <a class="lead text-center" style="color: white;" href="#instrucciones">Has Clic Aqui</a>
          </div>
          <div class="col-lg-4 mr-auto">
            <h4 class="lead">¿Agun costo adicional?</h4>
                <p>Ninguno unicamente el precio del contratista</p>
          </div>
        </div>
      </div>
    </section>


@endsection