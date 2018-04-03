@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'landing-page')

@section('content')

<div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
<div class="container">
  <div class="section text-center section-landing" style="padding-bottom: 0px;">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <h2 class="title">¡Elegí tu proximo oficio!</h2>
              </div>
          </div>
  </div>



  <div class="text-center" style="margin-bottom: 90px;">

    <h2 class="title" style="color: #ff0088;">{{ $product->name }}</h2>

  <div class="team" style="margin-top: 0px;">
    <div class="row">
      <div class="col-md-12">
          <div class="team-player">
              <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-rounded img-raised">
              <br>
              <br>
              <h5 class="text-muted">{{ $product->category->name }}</h5>

               <p class="description">{{ $product->description }}</p>
               <p class="description">{{ $product->long_description }}</p>
               <h4 class="description" style="margin-top: 20px; margin-bottom: 30px;">Precio: ${{ $product->price }}</h4>
               @if (!Auth::user()->admin)
                 @if (Session::get('cart') && in_array($product->id, Session::get('cart')))
                   <a class="btn btn-danger" href="/cart/remove/{{ $product->id }}">Sacar del carrito</a>
                 @else
                   <a class="btn btn-success" href="/cart/add/{{ $product->id }}">Agregar al carrito</a>
                 @endif
              @endif
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
