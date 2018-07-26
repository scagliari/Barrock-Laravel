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
    @if (Auth::check())





      <section class="contenedor">
          <div class="historia">

            <div class="historiatexto">
            <div class="h2">
              <h1>PRODUCTOS</h1>
            </div>
            <p>{{ Auth::user()->name }},</p>
            <p> Gracias por registrarte en nuestro sitio y decidir formar parte de esta gran familia.
            Como la familia es lo que más importa, tenemos grandes beneficios para ofrecerte. </p>
            <h3>DESCUENTOS SEMANALES</h3>
            <p>Seguinos en nuestras redes y enterate de todos los descuentos
              semanales que ofrecemos solo para aquellos que forman parte de nuestra cartera de clientes.</p>
            <h3>ENTRADAS A EVENTOS</h3>
            <p>La cerveza artesanal es una moda que llegó para quedarse.
              Todas los meses tenemos distintos eventos, a los cuales podemos invitarte.
              Queremos que la buena cerveza siga expandiéndose, y qué mejor forma
            que combinándola con comida exquisita y música de calidad.</p>
            </div>
            <div class="historiaimagen">
              <div class="">
                <a href="{{ url('crear') }}" style="color: black;">Nuevo Producto </a>
              </div>
              <table class="table table-striped table-dark">

                  <thead>
                      <tr>
                        <th><h3 class="h3product">Nombre</h3></th>
                        <th><h3 class="h3product">Precio</h3></th>
                        <th><h3 class="h3product">Stock</h3></th>
                      </tr>
                  </thead>
                  @foreach ($products as $product)
                  <tbody>
                    <tr>
                      <td>{{$product['Nombre']}}</td>
                      <td>{{$product['Precio']}}</td>
                      <td>{{$product['Stock']}}</td>
                      <td>
                        <form class="" action="/products/{{$product['ID']}}" method="get">
                          <input type="hidden" name="_method" value="delete" />
                          @csrf
                          <input type="submit" name="" value="Delete">
                        </form>
                      </td>

                    </tr>
                  </tbody>
                  @endforeach

              </table>
              <div class="productlinks">
                {{ $products->links() }}
              </div>
            </div>


          @else <section class="contenedor">
              <div class="historia">

                <div class="historiatexto">
                <div class="h2">
                  <h1>PRODUCTOS</h1>
                </div>

                <p> Gracias por registrarte en nuestro sitio y decidir formar parte de esta gran familia.
                Como la familia es lo que más importa, tenemos grandes beneficios para ofrecerte. </p>
                <h3>DESCUENTOS SEMANALES</h3>
                <p>Seguinos en nuestras redes y enterate de todos los descuentos
                  semanales que ofrecemos solo para aquellos que forman parte de nuestra cartera de clientes.</p>
                <h3>ENTRADAS A EVENTOS</h3>
                <p>La cerveza artesanal es una moda que llegó para quedarse.
                  Todas los meses tenemos distintos eventos, a los cuales podemos invitarte.
                  Queremos que la buena cerveza siga expandiéndose, y qué mejor forma
                que combinándola con comida exquisita y música de calidad.</p>
                </div>
                <div class="historiaimagen">
                  <img style="width:100%;" src="{{asset("images/bienvenido.jpg")}}">
                </div>


          </section>
          @endif

            </div>


      </section>

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
