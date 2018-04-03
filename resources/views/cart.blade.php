@extends('layouts.app')

@section('title', 'Carrito de Compras')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/697059/pexels-photo-697059.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>
<div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
<div class="container">

  <div class="text-center" style="margin-bottom: 110px;">

    <h2 class="title">Carrito de Compras</h2>

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
                              <i class="fa fa-info"></i>
                          </a>
                          <a href="/cart/remove/{{$product->id}}" rel="tooltip" title="Eliminar curso" class="btn btn-danger btn-simple btn-xs">
                              <i class="fa fa-times"></i>
                          </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{ ('/cart/buy') }}" class="btn btn-success btn-round" style="margin-bottom: 100px;">Comprar</a>
        @else
          <h3>
            No hay cursos agregados al carrito
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
