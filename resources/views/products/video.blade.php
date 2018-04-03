@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'landing-page')

@section('content')

<div class="main main-raised">
<div class="container">
  <div class="section text-center section-landing">
          <div class="row">
              <div class="col-md-12 col-md-offset-">

                  <h2 class="title">{{ $product->category->name }}</h2>
                  <h4 class="description">{{ $product->description }}</h4>
                  <br>
                  <iframe width="700" height="400" src="https://www.youtube.com/embed/{{$product->video}}" style="overflow: hidden; top:0; left: 0; width: 100%; height: 450px;"></iframe>
                  <br>
                  <br>
                  <div class="text-center">
                    <a href="{{ url('/products/bought') }}" class="btn btn-info text-center">Volver a mis cursos</a>
                  </div>
              </div>
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
              Tudipa - Estudia a tu ritmo &copy; 2017 | <a href="https://github.com/argentiun/Tudipa-Laravel" target="_blank" style="color: #40a9f4;"> Github</a>
          </div>
      </div>
  </footer>
@endsection
