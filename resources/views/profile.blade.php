@extends('layouts.app')

@section('title', 'Perfil del Usuario')

@section('body-class', 'profile-page')

@section('content')

		<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="{{ Auth::user()->image }}" alt="Imagen de perfil" class="img-rounded img-responsive img-raised">
	                        </div>
                          <br>
                          <form action="/user/image" method="post" id="form-image" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <label for="image" class="btn btn-info btn-round">Subir imagen</label>
                              <input style="display: none;" type="file" name="image" id="image" accept="image/*" onchange='submit()'>
                              <script>
                                function submit() {
                                  document.getElementById('form-image').submit();
                                }
                              </script>
                          </form>

	                        <div class="name">
	                            <h3 class="title">{{Auth::user()->name}} {{Auth::user()->lastname}}</h3>
								              <h6><strong>{{Auth::user()->email}}</strong></h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p><strong>Nacionalidad</strong></p>
                        <p>{{Auth::user()->country}}</p>
	                </div>

									<div class="description text-center">
                        <p><strong>Fecha de Nacimiento</strong></p>
                        <p>{{date('d-m-Y', strtotime(Auth::user()->dateB))}}</p>
	                </div>

									<div class="description text-center">
                        <p><strong>Fecha de Ingreso</strong></p>
                        <p>{{date('d-m-Y', strtotime(Auth::user()->created_at))}}</p>
	                </div>

									<div class="text-center">
				            <a href="/user/profile/edit" class="btn btn-success text-center">Editar mis datos</a>
				          </div>

									<div class="dropdown text-center">
										<label class="btn"for="" style="background-color: #f0eeee; color: #666161;"> <strong>Elegí el color de tu Tema</strong>
								        <select class="btn" id="theme" style="margin-left: 20px; background-color: #868383; color: #ffffff;">
								          {{-- navbar-danger --}}
								            <option value="rojo">Rojo</option>
								          {{-- navbar-inverse --}}
								            <option value="violeta">Violeta</option>
								          {{-- navbar-info --}}
								            <option value="azul" selected >Azul</option>
								          {{-- navbar-warning --}}
								            <option value="amarillo">Amarillo</option>
								          {{-- navbar-success --}}
								            <option value="verde">Verde</option>

								        </select>
						        </label>
									</div>

                  <br>
                  <br>

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
