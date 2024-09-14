function finalizar1(formClass) {
  var form = document.querySelector(formClass);
  var boton = form.querySelector('#submit');
  var loader = form.querySelector('.loader');

  // Deshabilitar el bot車n de env赤o y mostrar el loader
  boton.disabled = true;
  loader.style.display = 'block';

  // Obtener los valores de los campos del formulario usando jQuery
  var datawh = {
    'formulario_pagina': $('#formulario_pagina').val(),
    'Operadora': $('#Operadora').val(),
    'idCapitas': $('input[name="idCapitas"]:checked').val(),
    'edad_1': $('#edad_1').val(),
    'edad_2': $('#edad_2').val(),
    'hijos_num': $('#hijos_num').val(),
    'poseeOS': $('input[name="poseeOS"]:checked').val(),
    'sueldo': $('#sueldo').val(),
    'Name': $('#Name').val(),
    'telefone': $('#telefone').val(),
    'email': $('#email').val(),
    'Respuestas Google': 'https://docs.google.com/spreadsheets/d/1M-XJiLh-G0VeExG5tQlOH6HfLJV2WNcdJiEKPUkqaSA/edit?resourcekey#gid=1797801513'
  };

  // Enviar los datos al webhook de n8n
  $.ajax({
    url: "https://n8n.tuchat.com.ar/webhook/89174271-0718-461b-911c-585e2ae1c13e",
    type: 'POST',
    data: JSON.stringify(datawh), // Convertir datawh en una cadena JSON
    processData: false, // No procesar los datos de la solicitud
    // contentType: 'application/json', // Especificar el tipo de contenido JSON
    success: function(response) {
      console.log(response);
      boton.value = 'ENVIO EXITOSO!';
      loader.style.display = 'none';
      $('#contact-form')[0].reset(); // Resetear el formulario

      // Redirigir a la p芍gina de agradecimiento despu谷s de 3 segundos
      setTimeout(function() {
        window.location.href = 'https://plandesalud.ar/gracias/';
      }, 3000);
    },
    error: function() {
      console.log('Error al enviar los datos');
      // Rehabilitar el bot車n y ocultar el loader en caso de error
      boton.disabled = false;
      loader.style.display = 'none';
    }
  });
}
function finalizarWhats(formClass) {
  var form = document.querySelector(formClass);
  var boton = form.querySelector('#submit');
  var loader = form.querySelector('.loader-whats');

  // Deshabilitar el bot車n de env赤o y mostrar el loader
  boton.disabled = true;
  loader.style.display = 'block';

  // Obtener los valores de los campos del formulario usando jQuery
  var datawhook = {
    'formulario_pagina': $('#formulario_pagina_whats').val(),
    'Name': $('#Name_whats').val(),
    'telefone': $('#telefone_whats').val(),
  };

  // Enviar los datos al webhook de n8n
  $.ajax({
    url: "https://n8nwebhook.tuchat.com.ar/webhook/89174271-0718-461b-911c-585e2ae1c13e",
    type: 'POST',
    data: JSON.stringify(datawhook), // Convertir datawh en una cadena JSON
    processData: false, // No procesar los datos de la solicitud
    contentType: 'application/json', // Especificar el tipo de contenido JSON
    success: function(response) {
      console.log(response);
      boton.value = 'ENVIO EXITOSO!';
      loader.style.display = 'none';
      $('#contact-form-whats')[0].reset(); // Resetear el formulario

      // Redirigir a la p芍gina de agradecimiento despu谷s de 3 segundos
      setTimeout(function() {
        window.location.href = 'https://plandesalud.ar/gracias/';
      }, 3000);
    },
    error: function() {
      console.log('Error al enviar los datos');
      // Rehabilitar el bot車n y ocultar el loader en caso de error
      boton.disabled = false;
      loader.style.display = 'none';
    }
  });
}
function finalizar(formClass){
  alert('enejecucion 1')
    var form = document.querySelector(formClass);
  var boton = form.querySelector('#submit');
  var loader = form.querySelector('.loader');
const xhr = new XMLHttpRequest();

xhr.open('POST','https://n8nwebhook.tuchat.com.ar/webhook/89174271-0718-461b-911c-585e2ae1c13e');
alert('enejecucion 1')
xhr.onload = function () {
if (xhr.status == 200) {
alert('Enviou');
}
else {
alert('Error en la solicitud: ' + xhr.statusText);
}

let objeto = {
  name:"Juan Pedro Caballero",
  edad:"23",
email:"hernan.psc@gmil.com"
}


xhr.send( JSON.stringify(objeto));
}
};
function finalizar2(formClass) {
  alert("ejecucion");
  var form = document.querySelector(formClass);
  var boton = form.querySelector('#submit');
  var loader = form.querySelector('.loader');

  // Deshabilitar el bot車n de env赤o y mostrar el loader
  boton.disabled = true;
  loader.style.display = 'block';
  alert("ejecucion2");
  // Obtener los valores de los campos del formulario usando jQuery
xhr = new XMLHttpRequest();
alert("ejecucion3");
xhr.open('POST','https://n8nwebhook.tuchat.com.ar/webhook/89174271-0718-461b-911c-585e2ae1c13e');
alert("ejecucion4");

xhr.onload = function(){
  if (xhr.status === 200){
    alert("Envio");
    console.log(response);
      boton.value = 'ENVIO EXITOSO!';
      loader.style.display = 'none';
      $('#contact-form')[0].reset(); // Resetear el formulario

      // Redirigir a la p芍gina de agradecimiento despu谷s de 3 segundos
      setTimeout(function() {
        window.location.href = 'https://plandesalud.ar/gracias/';
      }, 3000);
  }else{
    alert("Error en la solicitud " + xhr.statusText);
    console.log('Error al enviar los datos');
      // Rehabilitar el bot車n y ocultar el loader en caso de error
      boton.disabled = false;
      loader.style.display = 'none';
  }
}
alert("ejecucion7");
var datawh = {
  'formulario_pagina': $('#formulario_pagina').val(),
  'Operadora': $('#Operadora').val(),
  'idCapitas': $('input[name="idCapitas"]:checked').val(),
  'edad_1': $('#edad_1').val(),
  'edad_2': $('#edad_2').val(),
  'hijos_num': $('#hijos_num').val(),
  'poseeOS': $('input[name="poseeOS"]:checked').val(),
  'sueldo': $('#sueldo').val(),
  'Name': $('#Name').val(),
  'telefone': $('#telefone').val(),
  'email': $('#email').val(),
  'Respuestas Google': 'https://docs.google.com/spreadsheets/d/1M-XJiLh-G0VeExG5tQlOH6HfLJV2WNcdJiEKPUkqaSA/edit?resourcekey#gid=1797801513'
};
alert("ejecucion8");
xhr.send(JSON.stringify(datawh));
}
// Funci車n para guardar las cookies
function salvaCookies() {
  setCookie('data_lead_formulario_pagina', jQuery('.campo-pagina').val(), 3);
  setCookie('data_lead_Operadora', jQuery('.campo-operadora').val(), 3);
  setCookie('data_lead_idCapitas', jQuery('input[name=tipo-de-plano]:checked').val(), 3);
  setCookie('data_lead_edad_1', jQuery('.campo-edad').val(), 3);
  setCookie('data_lead_edad_2', jQuery('.campo-edad-pareja').val(), 3);
  setCookie('data_lead_hijos_Num', jQuery('.campo-edades-hijos').val(), 3);
  setCookie('data_lead_poseeOS', jQuery('input[name=possui-plano]:checked').val(), 3);
  setCookie('data_lead_sueldo', jQuery('.campo-sueldo').val(), 3);
  setCookie('data_lead_Name', jQuery('.campo-nome').val(), 3);
  setCookie('data_lead_telefone', jQuery('.campo-telefone').val(), 3);
  setCookie('data_lead_email', jQuery('.campo-email').val(), 3);

  function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
  }
}
