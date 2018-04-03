var form = document.querySelector('form');

form.enctype = 'multipart/form-data';
form.name = 'register';

var campos = form.elements;

var regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

var nombre = form.name;
var apellido = form.lastname;
var fechaCumple = form.dateB;
var pais = form.pais;
var provincia = form.province;
var email = form.email;
var userName = form.username;
var contraseña = form.password;
var contraseña2 = form.password_confirmation;


form.onsubmit = function (e) {
  var campos = form.elements;
  for (var i = 0; i < campos.length; i++) {
    if(campos[i].tagName != 'BUTTON' && campos[i].name != 'province'){
      if(campos[i].value.trim() === ''){
        console.log(campos[i]);
        e.preventDefault();
        campos[i].className = 'errores';
      }
    }
  }
};


for (var i = 0; i < campos.length; i++) {
  if(campos[i].tagName != 'BUTTON'){
  campos[i].addEventListener('blur', function(e){
    console.log('blur', e.target)

    // this.className = '';
    var error = this.nextElementSibling;
  	if (this.value === '') {
  		// this.className = 'errores';
  		error.innerText = 'Debes completar este campo.';
  	} else if (this.name == 'email') {
  	  if (!regexMail.test(this.value)) {
  	    error.innerText = 'Introducir un email válido.';
  	  }else {
  	    error.innerText = '';
  	  }
  	 } else {
  		  error.innerText = '';
  		  // this.className = '';
  	 }
    });
  }
}
