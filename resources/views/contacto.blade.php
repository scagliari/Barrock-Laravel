<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css"> <!-- este archivo css lo hice para porque el logo es gigante y necesitaba achicarlo un poco-->
    <link rel="stylesheet" href="css/styledesktop.css">
    <title>Barrock Brewery</title>
    <link rel="shortcut icon" href="{{asset("images/barrockfavicon.png")}}">
  </head>
  <body>
    <div class="main">
      <div class="loQueVaFixed">
        <div class="logo" id="logo">

          <a href="index.html"><img src="{{asset("images/barrock Brewery.png")}}"></a>

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
      <div class="bannercontacto">
        <div class="fotocontacto"><img src="{{asset("images/contactofoto.jpg")}}" style="width: 100%;"></div>
        <div class="textocontacto"><a href="{{ route('register') }}" style="text-decoration: none; color: white"><p class="textovideo1">
        FORMÁ PARTE DE</p><p class="textovideo1">NUESTRA COMUNIDAD </p></a></div>
      </div>



      <div class="contenedorcontacto">

        <div class="contactoGlobal">
            <div class="contacto">
              <h1>CONTACTO</h1>



              <div class="seccioncontacto">
                <img src="{{asset("images/icono-dir.svg")}}" >
                <p><strong>Dirección: </strong>Av. Siempreviva 1234, Los Simpsons, Fox.</p>
              </div>

              <div class="seccioncontacto">
                <img src="{{asset("images/icono-mail.svg")}}" >
                <p><strong>E-mail:</strong> consultas@barrock.com.ar</p>
              </div>

              <div class="seccioncontacto">
                <img src="{{asset("images/icono-tel.svg")}}" >
                <p><strong>Teléfono:</strong> (011) 4577-8000</p>
              </div>

              <div class="seccioncontacto">
                <img src="{{asset("images/icono-tel.svg")}}" >
                <p><strong>Celular:</strong> (011) 1569-550900</p>
              </div>

              <div class="beneficios">
                <a href="ingresar.php"><p>¿Querés tener beneficios exclusivos? Hacé click acá.</p></a>
              </div>

            </div>
            <div class="mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1848009779!2d-58.44596108549951!3d-34.54887608047366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital+House!5e0!3m2!1sen!2sar!4v1527007463850"
              frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

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
            <li><a href="http://www.facebook.com" target="_blank"><img style="width: 100%;" src="{{asset("images/facebook-black-logo.jpg")}}" ></a></li>
          </ul>
        </div>
      <!--ACA IRIA ANCLA-->
      </div>
    </footer>

  </body>
</html>
