<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
  <link rel="stylesheet" href="{{asset("css/styledesktop.css")}}">
  <title>Barrock Brewery</title>
  <link rel="shortcut icon" href="{{asset("images/barrockfavicon.png")}}">

</head>
  <body>
    <div class="loQueVaFixed">
      <div class="logo" id="logo">

        <a href="{{ url('/') }}"><img src="{{asset("images/barrock Brewery.png")}}"></a>

      </div>
      <nav class ="rubros">
                <ul>
                  <a href="{{ url('/') }}"><li>Inicio</li></a>
                  <a href="{{ url('preguntas') }}"><li>Preguntas</li></a>
                  <a href="{{ url('contacto') }}"><li>Contacto</li></a>
                  <a href="{{ route('register') }}"><li>Registrate</li></a>
                  <a href="{{ route('login') }}"><li>Login</li></a>
                </ul>
          </nav>

    </div>

    <div class="contenedorpreguntas">

      <div class="preguntas">

        <h1>Agregar Nueva Cerveza</h1>
       <form class="" action="{{ url('/crear') }}" method="post">
         @csrf
         <div class="form-group">
           <label for="Nombre">Nombre
             <input type="text" name="Nombre" value="">
           </label>
         </div>
         <div class="form-group">
           <label for="Precio">Precio</label>
           <input type="text" name="Precio" value="">
         </div>
         <div class="form-group">
           <label for="Stock">Stock</label>
           <input type="text" name="Stock" value="">
         </div>
         <div class="form-group">
           <button type="submit" name="agregar">Agregar</button>
         </div>

      </div>
      <div class="imagenpreguntas">
      <img src="{{asset("images/preguntas.jpg")}}" style="width: 100%;">
      </div>
    </div>





       <footer>
         <div class="contenedor">
           <div class="copy">
             <p id="copyright">® Copyright 2018</p>
           </div>
           <div class="copy2">
             <p>Cerveza artesanal significa independencia. Significa crear con ingredientes naturales,
               significa permanentemente descubrir, significa materias primas orgánicas, significa
               elaborar pensando siempre en la mejor calidad y en el respeto hacia la comunidad.</p>
           </div>
           <div class="redes2">
             <ul class="social">
               <li><a href="http://www.facebook.com" target="_blank"><img style="width: 100%;" src="{{asset("images/facebook-black-logo.jpg")}}" alt=""></a></li>
             </ul>
           </div>
         <!--ACA IRIA ANCLA-->
         </div>
       </footer>
  </body>
</html>
