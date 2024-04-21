<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gymcamp</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



        <!-- Preguntar como cargar el CSS jasrGamer
        <link  type="text/css" href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link  type="text/css" href="/css/home.css" rel="stylesheet">
        <link  type="text/css" href="css/home.css" rel="stylesheet">

        <link  type="text/css" href="..\css\home.css" rel="stylesheet">
        <link  type="text/css" href="css\home.css" rel="stylesheet">
        <link  href="..\css\home.css" rel="stylesheet">
        <link  href="css\home.css" rel="stylesheet"> -->


    </head>
    <body>
    <!-- <app-header [isHome]="true"></app-header> -->
  <div class="wrapper">
      <div class="container">
          <div class="row">

              <div class="text-center">
                <!-- Preguntar como se carga la imagen, y el CSS -->
                  <!-- <img class="img_gym" src="assets/images/GymCamp.png" alt="Imagen encabezado" >
                  <img class="img_gym" src="../../storage/imagges/GymCamp.png" alt="Imagen encabezado" >
                  <img src = «../../storage/imagges/GymCamp.png» alt="Imagen encabezado" />
                  <img src = «../storage/imagges/GymCamp.png» alt="Imagen encabezado" />
                  <img src = «storage/imagges/GymCamp.png» alt="Imagen encabezado" />
                  <img src = «imagges/GymCamp.png» alt="Imagen encabezado" />
                  <img src = «GymCamp.png» alt="Imagen encabezado" />


                  <img class="img_gym" src="http://gymcamp.test/../../storage/imagges/GymCamp.png" alt="Imagen encabezado">
                  <img class="img_gym" src="http://gymcamp.test//../../storage/imagges/GymCamp.png" alt="Imagen encabezado">
                  <img class="img_gym" src="http://gymcamp.test/../storage/imagges/GymCamp.png" alt="Imagen encabezado"> -->
                  <img class="img_gym" src="http://gymcamp.test/storage/imagges/GymCamp.png" alt="Imagen encabezado">
                  <img class="img_gym" src="http://gymcamp.test/imagges/GymCamp.png" alt="Imagen encabezado">
                  <img class="img_gym" src="http://gymcamp.test/GymCamp.png" alt="Imagen encabezado">
              </div>

              <form action="{{ route('form.submit') }}" method="POST" autocomplete="off">
                @csrf

                <div class="form-row">
                    <div class="text-center">
                      
                    <h1 class="xd">Tipo de documento</h1>
                        <label class="xd">Tipo de documento</label>
                        <select name="documentType">
                            @foreach($documentTypes as $type)
                                <option value="{{ $type['label'] }}">{{ $type['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="text-center">
                        <label>Número de identificación</label>
                        <input type="text" name="document" placeholder="1234567890">
                        @error('document')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="text-center">
                        <button type="submit">Aceptar</button>
                    </div>
                </div>
              </form>

              
              <div class="text-center">
                  <img class="imagen" src="https://img.freepik.com/foto-gratis/hombre-joven-fitness-estudio_7502-5008.jpg?size=626&ext=jpg&ga=GA1.1.946239694.1713571200&semt=sph" alt="Imagen de portada">
              </div>

              <div class="text-center">
                  <img class="imagen" src="https://img.freepik.com/foto-gratis/vista-angulo-hombre-musculoso-irreconocible-preparandose-levantar-barra-club-salud_637285-2497.jpg" alt="Imagen entrenamiento">
              </div>
                
              <div class="text-center">
                  <button class="login" (click)="login()">Ingresar</button>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>
