@extends('layouts.app')

@section('title', 'Cursos comprados')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>
<div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
<div class="container">

  <div class="text-center" style="margin-bottom: 110px;">

    <h2 class="title">Cursos comprados</h2>

  <div class="team">
    <div class="row">
      <br/>
      @if ($products->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="col-md-2 text-center">Nombre</th>
                    <th class="col-md-3 text-center">Descripción</th>
                    <th class="text-center">Categorias</th>
                    <th class="text-center">Precio</th>
                    <th class="col-md-2 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td class="text-center">{{ $product->name }}</td>
                    <td class="text-center">{{ $product->description }}</td>
                    <td class="text-center">{{ $product->category ? $product->category->name : 'General' }}</td>
                    <td class="text-center">$ {{ $product->price }}</td>
                    <td class="td-actions text-center">

                          <a href="/products/view/{{$product->id}}" type="button" rel="tooltip" title="Ver curso" class="btn btn-info btn-simple btn-xs">
                              Ingresar
                          </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        @else
          <h3>
            No tenes ningun curso aún
          </h3>
        @endif
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
              Tudipa - Estudia a tu ritmo &copy; 2017 <a href="https://github.com/argentiun/Tudipa-Laravel" target="_blank"> | Github</a>
          </div>
      </div>
  </footer>
@endsection
