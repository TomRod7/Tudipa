backColor = document.getElementById('background');
colChoose = document.getElementById('theme');


var cookieColor = colChoose.addEventListener("change",function(){
var className = ''
  if (colChoose.value === 'rojo'){
    className = 'navbar navbar-danger navbar-fixed-top'
  }
  if (colChoose.value === 'azul'){
    className = 'navbar navbar-info navbar-fixed-top'
  }
  if (colChoose.value === 'amarillo'){
    className = 'navbar navbar-warning navbar-fixed-top'
  }
  if (colChoose.value === 'verde'){
    className = 'navbar navbar-success navbar-fixed-top'
  }
  if (colChoose.value === 'violeta'){
    className = 'navbar navbar-primary navbar-fixed-top'
  }
  if (colChoose.value === '') {
    className = 'navbar navbar-info navbar-fixed-top'
  }

  backColor.setAttribute('class', className)
  document.cookie = 'clases='+className + '; path=/';
});
