<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/styledesktop.css")}}">
    <title>Barrock Brewery</title>
    <style>
      @media (min-width: 1200px) {


      body {
        background-color: white;
        text-align: left;
      }

      #titulopreguntasfrecuentes h1{
        font-size: 40px;
        width: 496px;
      }

      .mapa img{
        display: block;
        width: 800px;
      }

      nav {
        height: 88px;
        background-color: #004e1e;
        padding:0;
      }

      nav ul li {
        height: 88px;
        padding-top: 33px;
      }

      .logo img {
        width: 118px;
        margin: 0 0 0 50px;
      }

      h1 {
        font-size: 30px;
        margin: 0px auto;
        margin-bottom: 10px;
      }

      p {
        font-size: 16px;
      }

      .h2 h1 {
        width: 225px;
      }

      .contenedor {
        width: 90%;
        margin: 10px auto;
      }

      .contenedorcontacto {
        width: 95%;
        margin: 0 auto;
      }

      .loQueVaFixed {
        display: flex;
        justify-content: space-between;
        background-color: #004e1e;
        align-items: center;
      }

      .rubros {
        margin-left: 150px;
        padding-top: 0px;
        box-sizing: border-box;
      }

      .rubros li {
        width: 120px
      }

      .rubros ul li {
        display: inline-block;
      }

      .redes{
        display: inline-block;
        background-color: #004e1e;
        padding-top: 17px;
        height: 88px;
        box-sizing: border-box;
      }

      .redes .social li{
        display: inline-block;
      }

      .redes .social li img{
        width: 50px;
      }


      div .videoFondo {
        position: static;
        display: block;
        height: 540px;

      }

      .video {
        position: relative;
      }

      .textovideo {
        position: relative;
        bottom: 350px;
        margin: 0px auto;
        color: white;
        border: solid 3px white;
        width: 550px;

      }

      .textovideo1 {
        font-size: 50px;
        text-shadow: 2px 2px black;
        margin: 20px auto;
        text-align: center;
      }

      div .bannercontacto {
        height: 620px;
      }

      .fotocontacto {
        position: relative;

      }

      .textocontacto {
        position: relative;
        bottom: 450px;
        margin: 0px auto;
        color: white;
        border: solid 3px white;
        width: 600px;
      }





      video {
        width: 100%
      }

      .fotoportada {
        width: 100%;
        height: 400px;
        background-color: black;
        margin-bottom: 50px;
      }

      .contenedorpreguntas {
      display: flex;
      justify-content: space-between;
      margin: 30px auto;
      width: 90%;
      }

      .preguntas {
        width: 50%;
      }

      .imagenpreguntas {
        width: 50%;
        display: block;
      }

      .cervezas{
        display: flex;
        background-color: #3F4140;
        padding: 40px 0px;

      }
      .cervezas img{
        width: 313px;
        height: 293px;
      }
      .cervezas{
        display: flex;
        flex-direction: column;
        width: 100%;
      }
      .cervezas .fila1{
        display: flex;
        justify-content: space-around;
      }
      .cervezas .fila2{
        display: flex;
        justify-content: space-around;
        margin-top: 50px;
      }

      .margen {
        width: 80%;
        margin: 0px auto;
      }

      .ipa img{
        display: none;
      }
      .porter img{
        display: none;
      }
      .stout img{
        display: none;
      }
      .pilsener img{
        display: none;
      }
      .amber img{
        display: none;
      }
      .honey img{
        display: none;
      }

      .ipa{
        width: 300px;
        height: 353px;
        background-image: url("{{asset("../images/barrockventa1.PNG")}}");
        overflow: hidden;
      }
      .porter{
        width: 300px;
        height: 353px;
        background-image: url("{{asset("../images/barrockventa2.png")}}");
        overflow: hidden;
      }
      .stout{
        width: 300px;
        height: 353px;
        background-image: url("{{asset("../images/barrockventa3.png")}}");
        overflow: hidden;
      }
      .pilsener{
        width: 300px;
        height: 353px;
        background-image: url("{{asset("../images/barrockventa4.png")}}");
        overflow: hidden;
      }
      .amber{
        width: 300px;
        height: 353px;
        background-image: url("{{asset("../images/barrockventa5.png")}}");
        overflow: hidden;
      }

      .honey{
        width: 300px;
        height: 353px;
        background-image: url("{{asset("../images/barrockventa6.png")}}");
        overflow: hidden;
      }

      .textoBirra{
        padding: 20px 20px;
        color: rgba(0,0,0,0);
        height: 353px;
        box-sizing: border-box;
      }



      .textoBirra:hover{
        color: rgb(213, 220, 232);
        background-color: black;
        opacity: 0.8;
      }

      #descripcionBirra {
        line-height: 20px;
      }


      .contactoGlobal{
        display: flex;
        justify-content: space-between;
        padding-top: 20px;
        padding-bottom: 20px;
        width: 100%;
      }
      .contacto p{
        text-align: left;
        display: inline-block;
      }
      .beneficios p{
        text-align: center;
      }

      .contacto img{
        width: 40px;
        margin-right: 20px;
        padding: 0;
        display: inline-block;
      }

      .seccioncontacto{
        display: flex;
        flex-direction: row;
        align-items: baseline;
      }

      .login {
        width: 50%;

      }

      .formularios{
        width: 100%;
        display: flex;
        align-content: space-between;

          }

      .registro {
        width: 40%;
      }

      .imagenregistro {
        display: block;
        width: 60%;
      }

      .formularios .login .h1 {
        width: 100%;
        margin: 0px auto;
        margin-bottom: 40px;
        border-bottom: solid 7px black;
        width: 228px;
        padding-bottom: 2px;
      }


      .historia {
      display: flex;
      justify-content: space-between;
      }

      .historiatexto {
        width: 50%;
      }

      .historiaimagen {
        display: block;
        width: 45%;
      }

      .copy2 {
        display: block;
        color: white;
        width: 600px;
        text-align: center;
        font-style: italic;
      }

      iframe {
       width: 700px;
       height: 500px;
      }
      footer{
        margin: 0px 0px;
        padding: 20px 0px;
      }

      .textocontacto {
        display: block;
      }

      input {
      display: block;
      margin: 10px 0px;
      width: 100%;
      }

      }
    </style>

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
          <div class="redes">
                <ul class="social">
                  <li><a href="http://www.twitter.com" target="_blank"><img src="{{asset("images/icono-tw.svg")}}" ></a></li>
                  <li><a href="http://www.instagram.com" target="_blank"><img src="{{asset("images/icono-ig.svg")}}" ></a></li>
                  <li><a href="http://www.facebook.com" target="_blank"><img src="{{asset("images/icono-fb.svg")}}" ></a></li>
                </ul>
              </div>
        </div>
        <div class="videoFondo">
            <div class="video"><video src="{{asset("images/video2.mp4")}}" autoplay muted loop></video></div>
            <div class="textovideo"><p class="textovideo1">
            DESCUBRÍ UNA </p><p class="textovideo1"> CERVEZA DIFERENTE </p></div>
        </div>

        <section class="contenedor">
            <div class="historia">

              <div class="historiatexto">
              <div class="h2">
                <h1>HISTORIA</h1>
              </div>
              <p>Cuando comenzamos a imaginar nuestra cervecería lo hicimos respetando la naturaleza.
              Para esto, junto a colaboradores y proveedores, comenzamos a construir este lugar con nueva tecnología que
              nos permite tener prácticas sustentables y cuidar el medio ambiente de manera concreta y sostenible. Estamos convencidos
              de que una cerveza de calidad se logra no solo con conocimiento bien aplicado y orden, sino, sobre todas las co
              con pasión. Esa pasión es la que nos diferencia, y que nos permite lograr un producto del cual sentirnos orgullosos todos
              los días.</p>
              <h3>SOMOS UN DELIVERY DE CERVEZA ARTESANAL</h3>
              <p>Delivery de jueves a sábados de 18hs a 21hs. Cupos limitados por orden de pedido. Próximamente más días y horarios.</p>
              <h3>RECIBÍ TU GROWLER EN 3 SIMPLES PASOS</h3>
              <p><strong>1. Elegís la cerveza y cantidad</strong></p>
              <p>Entre las nuestras distintas marcas variedades.</p>
              <p><strong>2. Llenado de Botellones</strong></p>
              <p>Nosotros cargamos los botellones directo del los tanques, nuestros productos son 100% artesanales y sin conservantes.</p>
              <p><strong>3. Te llega la cerveza fresca</strong></p>
              <p>Nos indicás dónde querés recibir la cerveza y te la llevamos, repartimos los Jueves viernes y sábados de 18 a 21hs.</p>
              </div>
              <div class="historiaimagen">
                <img style="width:100%;" src="{{asset("images/barrockventa1.PNG")}}" style="width:20%;">
              </div>
        </section>

        <div class="cervezas">
            <div class="margen">
              <div class="fila1">
                <a href="" style="text-decoration: none;">
                  <div class="ipa">
                    <div class="fotomobile">
                    <img src="{{asset("images/barrockventa1.PNG")}}" style="width:100%;">
                  </div>
                    <div class="textoBirra">
                    <h3>INDIAN PALE ALE</h3>
                    <p id = "descripcionBirra">Es un estilo de cerveza de tradición inglesa que se caracteriza como una ale pálida y espumosa con un alto nivel del alcohol y de lúpulo.
                      Se trata de bebidas amargas, de graduación relativamente elevada y que se sirven tibias.</p>
                  </div>
                  </div>
                </a>
                <div class="porter">
                  <div class="fotomobile">
                    <img src="{{asset("images/barrockventa2.png")}}" style="width:100%;">
                  </div>
                  <div class="textoBirra">
                   <h3>LAS CERVEZAS PORTER</h3>
                   <p id = "descripcionBirra">
                    Se preparan a partir de una combinación de otros dos tipos de cerveza de alta fermentación: el brown ale y el pale ale. Su graduación es muy elevada, aunque no tanto como la de las cervezas Stout o negras.
                   </p>

                  </div>
                </div>
                <div class="stout">
                  <div class="fotomobile">
                    <img src="{{asset("images/barrockventa3.png")}}" style="width:100%;">
                  </div>
                  <div class="textoBirra">
                    <h3>LA CERVEZA STOUT</h3>
                    <p id = "descripcionBirra">
                      Es similar a la Porter en sus características y en su forma de preparación, si bien su graduación es aún mayor y su color más oscuro; es por esto que por lo general hacemos referencia a ellas como “cervezas negras”.
                    </p>
                  </div>
                </div>
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
                <li><a href="http://www.facebook.com" target="_blank"><img style="width: 100%;" src="{{asset("images/facebook-black-logo.jpg")}}" alt=""></a></li>
              </ul>
            </div>
          <!--ACA IRIA ANCLA-->
          </div>
        </footer>

      </div>
  </body>
</html>
