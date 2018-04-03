@extends('layouts.app')

@section('title', 'Registrar Nuevos Cursos - Tudipa')

@section('body-class', 'landing-page')

@section('content')

  <div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
    <div class="container">

      <div class="section">

        <h2 class="title text-center" style="padding: 10px 0;">Registrar Nuevo Curso</h2>

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <form class="" action="{{ url('/products') }}" method="post">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del curso</label>
                <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
              </div>
            </div>

            <div class="col-sm-6">
            	<div class="form-group label-floating">
            		<label class="control-label">Precio del Curso</label>
            		<input type="number" class="form-control" name="price" value="{{ old('price') }}">
            	</div>
            </div>
          </div>



            <div class="form-group label-floating">
              <label class="control-label">Descripción Corta</label>
              <input type="text" class="form-control" name="description" value="{{ old('description') }}">
            </div>



          <textarea class="form-control" placeholder="Descripción larga" rows="5" name="long_description">{{ old('long_description') }}</textarea>

          <div class="form-group label-floating">
            <label class="control-label">ID del video de Youtube</label>
            <input type="text" class="form-control" name="video" value="{{ old('video') }}">
          </div>


          <div class="text-center">
            <button class="btn btn-success text-center">Crear Curso</button>
            <a href="{{ url('/products') }}" class="btn btn-danger text-center">Cancelar</a>
          </div>

        </form>

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
