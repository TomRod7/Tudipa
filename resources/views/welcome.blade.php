@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'landing-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('img/fondo-1.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

              <h1 class="title">Estudia desde la comodidad de tu casa</h1>
              <h4>¡Los cursos que querias hacer, todos en un solo lugar!</h4>
              <br/>
              <h4>Tudipa es una amplia comunidad dedicada a la enseñanza y aprendizaje de cursos online. Nuclea profesionales y alumnos en un solo sitio,
              donde se hace un lugar ameno para estudiar y compartir conocimientos con los demás.</h4>
              <br/>
              <!-- <a href="{{ route('register') }}" class="btn btn-info btn-raised btn-lg">
                Quiero estudiar
              </a>

              <a href="{{ route('register') }}" class="btn btn-info btn-raised btn-lg">
                Quiero Instruir
              </a> -->

            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
<div class="container">
  <div class="section text-center section-landing">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <h2 class="title">¡Elegí tu proximo oficio!</h2>
                  <h4 class="description">Tenemos profesionales dispuestos a ayudarte en todo momento mientras avanzas con tu curso</h4>
                  <h5 class="description">En Tudipa creemos fuertemente en el compromiso, y es por ello que seleccionamos y analizamos cada
                    curso propuesto por los instructores para poder brindarte la mejor experiencia en el aprendizaje.</h5>
              </div>
          </div>

          <div class="features">
						<div class="row">
                <div class="col-md-4">
								<div class="info">
									<div class="icon icon-primary">
										<i class="material-icons">chat</i>
									</div>
									<h4 class="info-title">Atención 24/7</h4>
									<p>Nuestro equipo esta en linea 24/7 para atender tus inquietudes rapidamente.</p>
								</div>
                </div>

                <div class="col-md-4">
								<div class="info">
									<div class="icon icon-success">
										<i class="material-icons">verified_user</i>
									</div>
									<h4 class="info-title">Pagá y cobrá con seguridad</h4>
									<p>Tenemos lo mejor para que tus datos de cobros y pagos esten siempre protegidos.</p>
								</div>
                </div>

                <div class="col-md-4">
								<div class="info">
									<div class="icon icon-danger">
										<i class="material-icons">fingerprint</i>
									</div>
									<h4 class="info-title">Información segura</h4>
									<p>Todos tus datos personales, y cursos que tomes o instruyas estan respaldados y protegidos para que exista ningun incoveniente.</p>
								</div>
                </div>
              </div>
					</div>

  </div>



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

  <div class="container" style=" width: 100%; padding-left: 0px; padding-right: 0px;">
    <div class="row" style=" margin-left: -100px; margin-right: -100px;">
      <ul class="rslides">
        <li><img src="{{ ('img/slider1.jpg') }}" alt=""></li>
        <li><img src="{{ ('img/slider2.jpg') }}" alt=""></li>
        <li><img src="{{ ('img/slider3.jpg') }}" alt=""></li>
        <li><img src="{{ ('img/slider4.jpg') }}" alt=""></li>
        <li><img src="{{ ('img/slider5.jpg') }}" alt=""></li>
      </ul>
    </div>
  </div>

    <div class="section landing-section">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <h2 class="text-center title">Contacto</h2>
      <h4 class="text-center description">Si necesita ayuda, escribanos su mensaje. Nuestro equipo lo atenderá a la brevedad, estamos a su completa disposición.</h4>
                  <form class="contact-form">
                      <div class="row">
                          <div class="col-md-6">
            <div class="form-group label-floating">
              <label class="control-label">Nombre</label>
              <input type="email" class="form-control">
            </div>
                          </div>
                          <div class="col-md-6">
            <div class="form-group label-floating">
              <label class="control-label">Correo electrónico</label>
              <input type="email" class="form-control">
            </div>
                          </div>
                      </div>

        <div class="form-group label-floating">
          <label class="control-label">Mensaje</label>
          <textarea class="form-control" rows="4"></textarea>
        </div>

                      <div class="row">
                          <div class="col-md-4 col-md-offset-4 text-center">
                              <button class="btn btn-success btn-raised">
              Enviar
            </button>
                          </div>
                      </div>
                  </form>
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
          <a href="{{ ('/cursos') }}">
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
