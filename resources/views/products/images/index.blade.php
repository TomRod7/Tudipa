@extends('layouts.app')

@section('title', 'Imagenes de Producto - Tudipa')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>
<div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
<div class="container">

  <div class="text-center" style="margin-bottom: 110px;">

    <h2 class="title">Imagenes del Curso "{{$product->name}}"</h2>


    <form class="" action="" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="file" name="photo" required>
      <button type="submit" class="btn btn-success btn-round" style="margin-bottom: 100px;">Subir nueva imagen</button>
      <a href="{{ ('/products') }}" class="btn btn-info btn-round" style="margin-bottom: 100px;">Volver al listado</a>
    </form>



<div class="row">
  @foreach($images as $image)
    <div class="col-md-4">
      <div class="panel panel-default" style="margin-top: 0px;">
        <div class="panel-body">


          <a data-fancybox="gallery" href="{{ $image->url}}"><img src="{{ $image->url}}" alt="" width="250"></a>



          <form  action="" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" name="image_id" value="{{ $image->id}}">
            <button type="submit" class="btn btn-primary btn-round">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
  @endforeach
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
