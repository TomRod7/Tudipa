@extends('layouts.app')

@section('title', 'Registrarse en Tudipa')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('img/img.jpg') }}'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="card card-signup">
          <form class="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="header header-info text-center">
              <h4 style="font-size: 1.8em;">Registro</h4>
            </div>
            <p class="text-divider">Completa tus datos</p>
            <div class="content">

              <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">face</i>
                </span>
                <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required >
                <span class="error"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>

              <div class="input-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">face</i>
                </span>
                <input type="text" class="form-control" placeholder="Apellido" name="lastname" value="{{ old('lastname') }}" required>
                <span class="error"></span>

                @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
              </div>

              <div class="input-group{{ $errors->has('dateB') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">event</i>
                </span>
                <input id="dateB" type="date" class="form-control" placeholder="Fecha de Nacimiento" name="dateB" value="{{ old('dateB') }}" required>
                <br/>
                <span class="error"></span>

                @if ($errors->has('dateB'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dateB') }}</strong>
                    </span>
                @endif
              </div>

              <div class="input-group{{ $errors->has('country') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">place</i>
                </span>

                  <select name="country" id="pais" placeholder="País de Residencia"></select>
                  <span class="error"></span>
                  @if ($errors->has('country'))
                     <span class="help-block">
                         <strong>{{ $errors->first('country') }}</strong>
                     </span>
                 @endif

              </div>

              <div class="input-group{{ $errors->has('province') ? ' has-error' : '' }}">
                <span class="input-group-addon" style="display:none" id="label-prov">

                </span>
                <div class="col-md-6">
                  <select name="province" id="tudi" style="display:none"></select>
                  <span class="error"></span>
                  @if ($errors->has('province'))
                     <span class="help-block">
                         <strong>{{ $errors->first('province') }}</strong>
                     </span>
                 @endif
                </div>
              </div>

              <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">email</i>
                </span>
                <input id="email" type="text" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required>
                <span class="error"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>

              <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">lock_outline</i>
                </span>
                <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required><input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Mostrar Contraseña
                <span class="error"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>

              <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                  <i class="material-icons">lock_outline</i>
                </span>
                <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required>
                <span class="error"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="footer text-center">
              <button type="submit"  class="btn btn-simple btn-primary btn-lg" style="color: #006d9e; font-size: 16px;">Registrate</a>
            </div>
            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                Recuperar contraseña
            </a> -->
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
        <div class="container">
            <nav class="pull-left">
        <ul>
          <li>
            <a href="#">
              Cursos
            </a>
          </li>
          <li>
            <a href="#">
               Enseña
            </a>
          </li>
          <li>
            <a href="#">
               Faq
            </a>
          </li>
          <li>
            <a href="#">
              Términos y condiciones
            </a>
          </li>
        </ul>
            </nav>
            <div class="copyright pull-right">
                Tudipa - Estudia a tu ritmo &copy; 2017 <a href="https://github.com/argentiun/Tudipa-Laravel" target="_blank"> | Github</a>
            </div>
        </div>
    </footer>

</div>
<script src="{{ asset('js/api.js') }}"></script>
<script src="{{ asset('js/validacion.js') }}"></script>
@endsection
