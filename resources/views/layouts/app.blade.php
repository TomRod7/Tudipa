<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title', 'Tudipa - Estudia a tu ritmo')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->

  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/css/material-kit.css') }}" rel="stylesheet"/>

	<style media="screen">
		.rslides {
		position: relative;
		list-style: none;
		overflow: hidden;
		width: 100%;
		padding: 0;
		margin: 0;
		}

		.rslides li {
		-webkit-backface-visibility: hidden;
		position: absolute;
		display: none;
		width: 100%;
		left: 0;
		top: 0;
		}

		.rslides li:first-child {
		position: relative;
		display: block;
		float: left;
		}

		.rslides img {
		display: block;
		height: 300px;
		float: left;
		width: 100%;
		border: 0;
		}

		.panel-group .panel {
				margin-top: 40px;
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
				box-shadow: 1px -1px 38px -12px rgba(0, 0, 0, 0.08), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #fbfbfb;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #f8f8f8;;
    }

		.demo {
		    padding-top: 60px;
		    padding-bottom: 60px;
		}
	</style>

</head>

<body class="@yield('body-class')">
	<nav class= "@if (isset($_COOKIE['clases'])) {{$_COOKIE['clases']}} @else {{"navbar navbar-info navbar-fixed-top"}} @endif"
		 id= "background">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand logo" href="{{ url('/') }}" style=""> <img style="width: 154px;" src="{{ asset ('img/logo6.svg') }}" alt=""> </a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">

							<li><a href="{{ ('/') }}">Inicio</a></li>
							<li><a href="{{ ('/cursos') }}">Cursos</a></li>
							<li><a href="{{ ('/ensena') }}">Enseñá</a></li>
							<li><a href="{{ ('/faq') }}">Faq</a></li>
              @guest
                  <li><a href="{{ route('login') }}">Ingresar</a></li>
                  <li><a href="{{ route('register') }}">Registrase</a></li>

              @else

							<li>
								<a href="{{ ('/cart/view') }}">
									Carrito de Compras
								</a>
							</li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu">

													<li>
														<a href="/user/profile">
																Mi Perfil
														</a>
													</li>
													<li>
														<a href="/products">
																@if (Auth::user()->admin)
																	Listado de cursos
																@else
																	Cursos creados
																@endif
														</a>
													</li>
													@if (!Auth::user()->admin)
														<li>
															<a href="/products/bought">
																Cursos comprados
															</a>
														</li>

													@endif
													<li>
															<a href="{{ route('logout') }}"
																	onclick="event.preventDefault();
																					 document.getElementById('logout-form').submit();">
																	Cerrar Sesión
															</a>

															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	{{ csrf_field() }}
															</form>
													</li>
                      </ul>
                  </li>
              @endguest
		            <!-- <li>
		                <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li> -->
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
      @yield('content')
    </div>


</body>


	<!--   Core JS Files   -->
	<script src="{{asset ('/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{asset ('/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{asset ('/js/material.min.js') }}"></script>




	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>


	<script src="{{asset ('/js/responsiveslides.js') }}"></script>

	<script>
	$(function() {
		$(".rslides").responsiveSlides();
	});
	</script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{asset ('/js/nouislider.min.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{asset ('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{asset ('/js/material-kit.js') }}" type="text/javascript"></script>

	<script src="{{asset ('/js/theme.js') }}" type="text/javascript"></script>



</html>
