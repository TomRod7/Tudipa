var paises = "http://pilote.techo.org/?do=api.getPaises";
var provincias = "http://pilote.techo.org/?do=api.getRegiones?idPais=";

  function ajax(method, url, callbackFunction){
    var api = new XMLHttpRequest();
      api.onreadystatechange = function() {
        if (api.readyState == 4 && api.status == 200) {
          var resultado = JSON.parse(api.responseText);
          //console.log(resultado.contenido);
          callbackFunction(resultado.contenido);
        }
      }
      api.open(method, url, true);
      api.send();
    }

    ajax('GET', paises, getPaises);

    function getPaises(resultado){
      var pais = document.getElementById('pais');
      var primerBot = document.createElement('OPTION');
      //primerBot.innerText = 'País de Residencia';
      primerBot.value='';
      pais.appendChild(primerBot);

      for (var x in resultado) {
          var listaPais = document.createElement('OPTION');
          listaPais.value = resultado[x];
          listaPais.innerText = x;
          pais.appendChild(listaPais);
      }

  pais.onchange = function () {
    if(this.value == 1){
      //Muestra la API de Provincia si se elige Argentina
      ajax('GET', provincias + this.value, getProvincias);
      var provincia = document.getElementById('label-prov');
      provincia.style.display = 'inline-block';
      var select = document.getElementById('tudi');
      select.style.display = 'inline-block';
      //console.log(this.value);
    } else {
      //Vacía la API de Provincias si no es Argentina
      var label = document.getElementById('label-prov');
      label.style.display = 'none';
      var select = document.getElementById('tudi');
      select.style.display = 'none';
    }
  }
};

function getProvincias(resultado){
  var provincia = document.getElementById('tudi');
  var primerBot = document.createElement('OPTION');
  //primerBot.innerText = 'Elegí tu Provincia';
  primerBot.value = '';
  provincia.appendChild(primerBot);

  for (var x in resultado) {
    var listaProvincia = document.createElement('OPTION');
    listaProvincia.value = resultado[x];
    listaProvincia.innerText = x;
    provincia.appendChild(listaProvincia);
  }
};
