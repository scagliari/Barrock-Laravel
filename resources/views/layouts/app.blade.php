<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Barrock Brewery</title>
    <link rel="shortcut icon" href="{{asset("images/barrockfavicon.png")}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/styledesktop.css")}}">
</head>
<body>
    <div >
        <nav>
            <div>
                <div>
                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest

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

                        @else


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
                                          <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              <li>{{ __('Logout') }}</li>
                                          </a>




                                        </ul>
                                </nav>
                                <div>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </div>



                        @endguest

                </div>
            </div>
        </nav>

        <main>
            @yield('content')
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
        </main>
    </div>
</body>
</html>
