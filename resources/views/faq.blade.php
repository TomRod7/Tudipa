@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'profile-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ ('https://images.pexels.com/photos/7354/startup-photos.jpg?w=1260&h=750&auto=compress&cs=tinysrgb') }}');"></div>

<div class="main main-raised">
  <div class="container">
    <div class="text-center" style="margin-bottom: 110px;">

      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <h2 class="title">Preguntas Frecuentes</h2>

          </div>
      </div>

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Por qué TUDIPA?
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                  Porque buscamos lograr que el aprendizaje de los oficios este al alcance de todos generando gente capacitada para insertarse de manera exitosa en el mercado laboral.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Cómo hago para ser parte de TUDIPA?
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                Fácil. Lo primero que tenes que hacer es registrarte en nuestra página, una vez realizada la registración solo queda que elijas un curso para realizar o postees uno para enseñar.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Cómo hago para anotarme a un curso?
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                Haciendo click en "Cursos" en la barra superior de la página vas a poder visualizar todas las ofertas que hay disponibles en nuestra web. Cuando ves algo que te interesa, seleccionalo y hace click en el botón que dice "Comprar". Una vez que estas anotado te llegara un mail por parte del instructor con los detalles del curso.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading4">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                  Envío de un mensaje al instructor.
                </a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
            <div class="panel-body">
                Para enviarle un mensaje a un instructor sólo debes entrar al curso que te interesa y encontrarás un link que lee "Mensaje al Instructor"
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading5">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿De qué manera se realizan los cursos?
                </a>
            </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
            <div class="panel-body">
              Mediante una serie de videos que el instructor prepara y luego sube a TUDIPA.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading6">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Los videos se pueden descargar?
                </a>
            </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
            <div class="panel-body">
                No, los videos se pueden ver reiteradas veces pero no se pueden descargar desde la página.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading7">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Puedo anotarme en varios cursos a la vez?
                </a>
            </h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
            <div class="panel-body">
                Claro que sí! Podes anotarte a todos los cursos que quieras ya que en TUDIPA cada uno estudia a su ritmo.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading8">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Los cursos son presenciales u online?
                </a>
            </h4>
        </div>
        <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
            <div class="panel-body">
                La modalidad del curso queda completamente en manos de cada instructor.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading9">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Que se obtiene al finalizar un curso?
                </a>
            </h4>
        </div>
        <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
            <div class="panel-body">
                En conjunto con el instructor a la finalización de un curso se hace entrega de un certificado correspondiente a lo cursado. Al mismo tiempo en tu página de perfil te aparecera una "Insignia" que hace referencia a tus cursos finalizados.
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading10">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                    <i class="more-less glyphicon glyphicon-plus"></i>
                    ¿Puedo enseñar?
                </a>
            </h4>
        </div>
        <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
            <div class="panel-body">
                Sí. Hace click en donde dice "Enseña" en la barra superior y ahí encontraras toda la informacion necesaria sobre como convertirte un instructor en TUDIPA.
            </div>
        </div>
    </div>

</div><!-- panel-group -->
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
