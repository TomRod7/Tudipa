@extends('layouts.app')

@section('title', 'Editar Perfil de Usuario - Tudipa')

@section('body-class', 'profile-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>
  <div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
    <div class="container">

      <div class="text-center" style="margin-bottom: 40px;">

        <h2 class="title text-center" style="padding: 10px 0;">Editar Perfil</h2>

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <form class="" action="{{ url('/user/profile/edit') }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}


          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Apellido</label>
                <input type="text" class="form-control" name="lastname" value="{{ old('lastname', $user->lastname) }}">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">País de Residencia</label>
                <select class="form-control" name="country" id="pais" value="{{ old('country', $user->country) }}"></select>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Provincia</label>
                <select name="province" class="form-control" id="tudi" value="{{ old('province', $user->province) }}"></select>
              </div>
            </div>
          </div>

          <div class="text-center">
            <button class="btn btn-success text-center">Guardar</button>
            <a href="{{ url('/user/profile') }}" class="btn btn-danger text-center">Cancelar</a>
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

<script src="{{ asset('js/api2.js') }}"></script>
@endsection

          {{-- <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Apellido</label>
                  <input type="text" class="form-control" name="lastname" value="{{ old('name', $user->lastname) }}">
                </div>
              </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group label-floating">
                <label class="control-label">País de Residencia</label>
                <select class="form-control" name="country" id="pais" value="{{ old('country', $user->country) }}"></select>
              </div>
            </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group label-floating">
                <label class="control-label">Provincia</label>
                <select name="province" class="form-control" id="tudi" value="{{ old('province', $user->province) }}"></select>
                {{-- @php
                  dd($user->province);
                @endphp --}}
              {{-- </div>
            </div>



          <div class="text-center">
            <button class="btn btn-success text-center">Guardar</button>
            <a href="{{ url('/user/profile') }}" class="btn btn-danger text-center">Cancelar</a>
          </div>

        </form>

      </div>

    </div>

  </div> --}}

{{-- <footer class="footer">
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


@endsection --}}
