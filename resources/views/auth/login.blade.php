@extends('layouts.app')

@section('title', 'Ingresar a Tudipa')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('img/img.jpg') }}'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="card card-signup">
          <form class="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="header header-info text-center">
              <h4 style="font-size: 1.8em;">Login</h4>
            </div>
            <p class="text-divider">Ingresa tus datos</p>
            <div class="content">



              <div class="input-group">
                <span class="input-group-addon">
                  <i class="material-icons">email</i>
                </span>
                <input id="email" type="email" placeholder="Correo Electrónico" class="form-control" name="email"
                value="{{ old('email') }}" required autofocus>
              </div>

              <div class="input-group">
                <span class="input-group-addon">
                  <i class="material-icons">lock_outline</i>
                </span>
                <input placeholder="Contraseña" id="password" type="password" class="form-control"
                name="password" required />
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  Recordarme
                </label>
              </div>
            </div>
            <div class="footer text-center">
              <button type="submit"  class="btn btn-simple btn-primary btn-lg" style="color: #006d9e; font-size: 16px;">Ingresar</a>
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
@endsection
