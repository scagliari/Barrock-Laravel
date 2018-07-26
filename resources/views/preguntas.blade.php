<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("css/style.css")}}"> <!-- este archivo css lo hice para porque el logo es gigante y necesitaba achicarlo un poco-->
    <link rel="stylesheet" href="{{asset("css/styledesktop.css")}}">
    <title>Barrock Brewery</title>
    <link rel="shortcut icon" href="{{asset("images/barrockfavicon.png")}}">
  </head>
  <body>

    <div class="main">
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

          <h1>PREGUTAS FRECUENTES</h1>
          <h3>¿Cómo es la primera compra?</h3>
            <p>Elegís variedades de cerveza, y luego te preguntaremos si devolvés o no envases botellón. </p>
          <h3>¿Cómo me llega la cerveza?</h3>
            <p>Nuestros vehículos van hasta tu casa, te dan los botellones llenos y retiran los envases vacíos.</p>
          <h3>¿Si no tengo botellón vacío puedo pedir?</h3>
            <p>Sí. Sino tenés botellones también vendemos nuevos ($115 c/u).</p>
          <h3>¿Cualquier botellón sirve?</h3>
            <p>Cualquier botellón de 1,9 Litros, ya sea color caramelo o transparente. Siempre que tenga su correspondiente tapa.</p>
          <h3>¿Puedo retirar la cerveza?</h3>
            <p>Barrock envía los pedidos directamente de las fábricas a tu puerta, por lo que no es posible retirarlas.</p>
          <h3>¿Cómo calculo el precio?</h3>
            <p>Si tenés, es $149 por botellón que recargás. Sino tenés botellón sumá $115 por botellón que pidas.</p>


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
    </div>
  </body>
</html>
