@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'profile-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>

<div class="main main-raised">
  <div class="container">
    <div class="text-center" style="margin-bottom: 110px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">¡Crea cursos y comparte tus conocimientos!</h2>
                    <h3 class="description">¡Todo es posible!</h3>
                    <h5 class="description">Si sabes algun oficio y queres compartir tus conocimientos este es tu lugar. En TUDIPA buscamos personas que estén dispuestas a enseñar y asistir a todo aquel interesado en aprender.</h5>
                    <h4 class="description">Los cursos pueden ser online o presenciales. Aquellos que son online se realizan a traves de videos, estos son grabados y subidos por los propios instructores.</h4>
                    <h4 class="description">Si lo que buscas es aprender no dudes en registrarte y formar parte de TUDIPA.</h4>
                </div>
            </div>
    </div>
  </div>
</div>


<footer class="footer">
      <div class="container">
          <nav class="pull-left">
      <ul>
        <li>
          <a href="{{ ('/cursos') }}">
            Cursos
          </a>
        </li>
        <li>
          <a href="{{ ('/ensena') }}">
             Enseña
          </a>
        </li>
        <li>
          <a href="{{ ('/faq') }}">
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
              Tudipa - Estudia a tu ritmo &copy; 2017 | <a href="https://github.com/argentiun/Tudipa-Laravel" target="_blank" style="color: #40a9f4;"> Github</a>
          </div>
      </div>
  </footer>
@endsection
