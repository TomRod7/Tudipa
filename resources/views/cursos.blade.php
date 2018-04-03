@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'landing-page')

@section('content')

<div class="main main-raised">
<div class="container">



  <div class="section text-center">

    <h2 class="title">Cursos Disponibles</h2>

  <div class="team">
    <div class="row">
      @foreach ($products as $product)
      <div class="col-xs-6 col-md-4">
          <div class="team-player" style="border-radius: 8px;;background-color: #fffefe; padding-bottom: 15px;padding-top: 15px;
          margin-bottom: 15px; margin-top: 15px; box-shadow: 1px -1px 38px -12px rgba(0, 0, 0, 0.08), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); height: 440px;">
              <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                <h4 class="title">{{ $product->name }} <br />
                  <small class="text-muted">{{ $product->category->name }}</small>
                </h4>
               <p class="description">{{ $product->description }}</p>
               <a class="btn btn-success" href="/products/view/{{ $product->id }}">Ver</a>
          </div>
      </div>

      @endforeach

    </div>
  </div>
  {{ $products->links() }}
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
