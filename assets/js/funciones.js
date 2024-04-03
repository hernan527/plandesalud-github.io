 
   
function finalizar(formClass) {
 
  var form = document.querySelector(formClass);
  form.action =  "../includes/contact_form.php";
console.log(form)

   
var boton = form.querySelector('#submit');
console.log(boton)


boton.disabled = true;

var loader = form.querySelector('.loader')

loader.style.display = 'block';

      var formData = new FormData();

      // Obtener los valores de los campos del formulario usando jQuery
      var Pagina_y_Formulario = $('#formulario_pagina').val();
      var Prepaga_Elegida = $('#Operadora').val();
      var Grupo_Familiar = $('input[name="idCapitas"]:checked').val();
      var Edad_Titular = $('#edad_1').val();
      var Edad_Pareja = $('#edad_2').val();
      var Edades_Hijos = $('#hijos_num').val();
      var Tipo_Asociado = $('input[name="poseeOS"]:checked').val();
      var Sueldo = $('#sueldo').val();
      var Nombre = $('#Name').val();
      var Telefono = $('#telefone').val();
      var email = $('#email').val();
    
      // Agregar los valores al objeto FormData
      formData.append('formulario_pagina', Pagina_y_Formulario);
      formData.append('Operadora', Prepaga_Elegida);
      formData.append('idCapitas', Grupo_Familiar);
      formData.append('edad_1', Edad_Titular);
      formData.append('edad_2', Edad_Pareja);
      formData.append('hijos_num', Edades_Hijos);
      formData.append('poseeOS', Tipo_Asociado);
      formData.append('sueldo', Sueldo);
      formData.append('Name', Nombre);
      formData.append('telefone', Telefono);
      formData.append('email', email);
      formData.append('Respuestas Google','https://docs.google.com/spreadsheets/d/1M-XJiLh-G0VeExG5tQlOH6HfLJV2WNcdJiEKPUkqaSA/edit?resourcekey#gid=1797801513')
      var data = {
        'entry.1971212034': Pagina_y_Formulario,
        'entry.1788353276': Prepaga_Elegida,
        'entry.2032223983': Grupo_Familiar,
        'entry.1763723729': Edad_Titular,
        'entry.1779532345': Edad_Pareja,
        'entry.1112113610': Edades_Hijos,
        'entry.632598661': Tipo_Asociado,
        'entry.1404611772': Sueldo, // ¿Este campo tiene la misma clave que Tipo_Desregulado?
        'entry.1508322728': Nombre,
        'entry.1813933214': Telefono,
        'entry.710988652': email
      };
      
        for (var pair of formData.entries()) {
            console.log('Key: ' + pair[0] + ', Value: ' + pair[1]);
        }
     
      
	
        $.ajax({
            url: form.action,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
         
            // beforeSend: function() {
          
                // $('form#contact-form .alert strong').text('Enviando datos...');
            // },
            
            success: function(response) {
               console.log(response)
               boton.value = '  ENVIO EXITOSO!  ';
               loader.style.display = 'none';
               googleForm(data);
               $('#contact-form')[0].reset();
   
    // salvaCookies();

    setTimeout(function() {
        window.location.href = 'https://plandesalud.ar/gracias/';
    }, 3000);
            },
            error: function() {
                console.log('Error al enviar el correo');
            }
        });
    }
  // }

    function googleForm(data) {
 
    $.ajax({
      url: 'https://docs.google.com/forms/d/e/1FAIpQLSfd5MmQlkg_HQzLoquOiakVNxyRIP4XAs7l4zjEUMcOVtDEFw/formResponse',
      type: 'POST',
      data: data,
      dataType: 'xml',
      success: function (response) {
        // La solicitud se realizó correctamente, los datos se han enviado al formulario de Google Forms
      },
      error: function (error) {
        console.log('Enter on error');
        console.log(error); 
      }
    });
  }

function finalizarWhats(formClass) {
 
 
  var form = document.querySelector(formClass);
  form.action =  "../includes/contact_form.php";
console.log(form)

   
var boton = form.querySelector('#submit');
console.log(boton)


boton.disabled = true;

var loader = form.querySelector('.loader-whats')

loader.style.display = 'block';
 // Obtener los valores de los campos del formulario usando jQuery
 var Pagina_y_Formulario = $('#formulario_pagina_whats').val();
 var Nombre = $('#Name_whats').val();
 var Telefono = $('#telefone_whats').val();
      var formData = new FormData();
console.log(Pagina_y_Formulario)
console.log(Nombre)

console.log(Telefono)

     
   // Agregar los valores al objeto FormData
   formData.append('formulario_pagina', Pagina_y_Formulario);
 
   formData.append('telefone', Telefono);
   formData.append('Name', Nombre);
   formData.append('Respuestas Google','https://docs.google.com/spreadsheets/d/1M-XJiLh-G0VeExG5tQlOH6HfLJV2WNcdJiEKPUkqaSA/edit?resourcekey#gid=1797801513');
   var data = {
     'entry.1971212034': Pagina_y_Formulario,
   
     'entry.1508322728': Nombre,
     'entry.1813933214': Telefono,
     
   };
   
        for (var pair of formData.entries()) {
            console.log('Key: ' + pair[0] + ', Value: ' + pair[1]);
        }

        $.ajax({
          url: form.action,
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
       
          // beforeSend: function() {
        
              // $('form#contact-form .alert').addClass('alert-info');
              // $('form#contact-form .alert strong').text('Enviando datos...');
          // },
          
          success: function(res) {
             console.log(res)
             boton.value = '  ENVIO EXITOSO!  ';
             loader.style.display = 'none';
             googleForm(data);
             $('#contact-form-whats')[0].reset();
 
  // salvaCookies();

  setTimeout(function() {
      window.location.href = 'https://plandesalud.ar/gracias/';
  }, 3000);
          },
          error: function() {
              console.log('Error al enviar el correo');
          }
      });
    
    // Process contact form
    }
function salvaCookies(){
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
  var d = new Date;
  d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
  document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}
}
   
