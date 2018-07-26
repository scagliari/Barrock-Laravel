@extends('layouts.app')

@section('content')
        <div class="imagenregistro">
            <img src="{{asset("images/cervezalogin.png")}}" style="width: 100%;">
        </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="contenedor">

                    <div class="h2" id="ingresa">
                        <h1>INGRESÁ</h1>
                    </div>

                <div class="card-body">
                        <form method="POST" name="formulario" id="formulario" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre y Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" placeholder="Nombre y apellido" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"  class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Ingrese su email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Ingrese su contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password2" type="password" placeholder="Confirme su contraseña"  class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" id="submit" class="btn btn-primary" name="submit">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
