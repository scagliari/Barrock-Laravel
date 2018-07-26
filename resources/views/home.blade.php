@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="contenedor">
                        <div class="historia">

                          <div class="historiatexto">
                          <div class="h2">
                            <h1>BIENVENIDO</h1>
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
                            <img style="width:100%;" src="{{asset("images/bienvenido.jpg")}}">
                          </div>


                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
