@extends('layouts.app')

@section('title', 'Listado de Productos - Tudipa')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>
<div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
<div class="container">

  <div class="text-center" style="margin-bottom: 110px;">

    <h2 class="title">Listado de Cursos Creados</h2>

  <div class="team" style="margin-top: 0px;">
    <div class="row">
      <a href="{{ ('/products/create') }}" class="btn btn-success btn-round" style="margin-bottom: 100px;">Crear Curso</a>
      <br/>
      <table class="table">
          <thead>
              <tr>
                  <th class="text-center">#</th>
                  <th class="col-md-2 text-center">Nombre</th>
                  <th class="col-md-3 text-center">Descripción</th>
                  <th class="text-center">Categorias</th>
                  <th class="text-center">Precio</th>
                  <th class="col-md-3 text-center">Opciones</th>
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
                      <form class="" action="{{ url('/products/'.$product->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <a href="/products/view/{{ $product->id }}" type="button" rel="tooltip" title="Ver curso" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-info"></i>
                        </a>

                        <a href="{{ url('/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar curso" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="{{ url('/products/'.$product->id.'/images') }}" rel="tooltip" title="Imagen del producto" class="btn btn-warning btn-simple btn-xs">
                            <i class="fa fa-image"></i>
                        </a>

                        <button type="submit" rel="tooltip" title="Eliminar curso" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                      </form>


                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{ $products->links() }}
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
