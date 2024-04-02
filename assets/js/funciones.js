  function validarEdad(input) {
    console.log('validar Edad')

    var value = input.value.trim(); // Eliminar espacios en blanco al principio y al final
    
       // Validar si el valor es un número entero y está entre 0 y 80
       if (/^\d{1,2}$/.test(value) && parseInt(value) >= 0 && parseInt(value) <= 80) {
        // Si el valor es válido, quitar la clase de error
        input.parentNode.classList.remove('ErrorFormIw');
    } else {
        // Si el valor no es válido, agregar la clase de error
        input.parentNode.classList.add('ErrorFormIw');
    }
  }
   
function finalizar(formClass) {
 
  var form = document.querySelector(formClass);
  var formElement = document.getElementById('contact-form');
  form.action =  "../includes/contacto_form.php";
  var formErro = 0;
  var requiredInputs = formElement.querySelectorAll('.required');
  var submitButton = document.querySelector(".form-cotacao [type='submit']");
console.log(form)

   
var boton = form.querySelector('#submit');
console.log(boton)


boton.disabled = true;

var loader = form.querySelector('.loader')

loader.style.display = 'block';
// console.log("Datos impresos. Pausa en la ejecución...");
// debugger; // Esto detendrá la ejecución del script hasta que se elimine el punto de interrupción
// console.log("La ejecución continúa...");


    // var formErro = 0;
    // console.log('formErro : '); console.log(formErro)
   
    var requiredInputs = form.querySelectorAll('.required');
    // console.log('requiredInputs : '); console.log(requiredInputs)

    // requiredInputs.forEach(function(input) {
    //     if (input.value === '') {
    //         formErro += 1;
    //         input.classList.add('ErrorFormIw');
    //     }
    // });
    
    // if (formErro == 0) {

      // console.log('formErro : '); console.log(formErro)
      var formData = new FormData();

      // Obtener los valores de los campos del formulario usando jQuery
      var Pagina_y_Formulario = $('#formulario-pagina').val();
      var Prepaga_Elegida = $('#Operadora').val();
      var Grupo_Familiar = $('input[name="idCapitas"]:checked').val();
      var Edad_Titular = $('#edad_1').val();
      var Edad_Pareja = $('#edad_2').val();
      var Edades_Hijos = $('#hijos_num').val();
      var Tipo_Asociado = $('input[name="poseeOS"]:checked').val();
      var Tipo_Desregulado = $('input[name="cualOS"]:checked').val();
      var Sueldo = $('#sueldo').val();
      var Categoria_Monotributo = $('#categoriaMono').val();
      var Familiares_que_Aportan = $('#aportantesMono').val();
      var Nombre = $('#Name').val();
      var Prefijo = $('#Prefijo').val();
      var Telefono = $('#Telefone').val();
      var email = $('#email').val();
    
      // Agregar los valores al objeto FormData
      formData.append('formulario-pagina', Pagina_y_Formulario);
      formData.append('Operadora', Prepaga_Elegida);
      formData.append('idCapitas', Grupo_Familiar);
      formData.append('edad_1', Edad_Titular);
      formData.append('edad_2', Edad_Pareja);
      formData.append('hijos_num', Edades_Hijos);
      formData.append('poseeOS', Tipo_Asociado);
      formData.append('sueldo', Sueldo);
      formData.append('Name', Nombre);
      formData.append('Telefone', Telefono);
      formData.append('email', email);

    
      
    //   function validaridCapitas() {
    //     var idCapitas = document.querySelector('input[name="idCapitas"]:checked');
    //     if (!idCapitas) {
    //         return 'Seleccione una opción para idCapitas.';
    //     }
    //     return '';
    // }
   
   
    // function validaredad_2() {
    //     var edad_2 = document.getElementById('edad_2').value;
    //     // No hay validación específica para este campo en tu descripción
    //     return '';
    // }
    
    // function validarhijos_num() {
    //     var hijos_num = document.getElementById('hijos_num').value;
    //     // No hay validación específica para este campo en tu descripción
    //     return '';
    // }
    
    // function validarposeeOS() {
    //     var poseeOS = document.querySelector('input[name="poseeOS"]:checked');
    //     if (!poseeOS) {
    //         return 'Seleccione una opción para poseeOS.';
    //     }
    //     return '';
    // }
    
    // function validarSueldo() {
    //     var sueldo = document.getElementById('sueldo').value;
    //     // No hay validación específica para este campo en tu descripción
    //     return '';
    // }
    
    // function validarNombre() {
    //     var nombre = document.getElementById('Name').value;
    //     $('.form-cotacao #edad_1').closest('.input-wrapper').addClass('error');
    //     if (nombre.trim() === '') {
    //         return 'Ingrese su nombre.';
    //     }
    //     return '';
    // }
    
    // function validarTelefono() {
    //     var telefono = document.getElementById('Telefone').value;
    //     if (telefono.trim() === '') {
    //         return 'Ingrese su teléfono.';
    //     }
    //     return '';
    // }
    
    // function validarEmail() {
    //     var email = document.getElementById('email').value;
    //     if (email.trim() === '') {
    //         return 'Ingrese su correo electrónico.';
    //     }
    //     return '';
    // }
    
        for (var pair of formData.entries()) {
            console.log('Key: ' + pair[0] + ', Value: ' + pair[1]);
        }
     
      
			// function validarFormulario() {
      //   var form = document.getElementById('contact-form');
      //   var requiredInputs = form.querySelectorAll('.required');
      //   var formErro = 0;
      
      //   requiredInputs.forEach(function(input) {
      //     if (input.value.trim() === '') { // Verifica si el valor está vacío o solo contiene espacios en blanco
      //       formErro += 1;
      //       input.classList.add('ErrorFormIw');
      //     }
      //   });
      //   validarFormulario()
      //   // Si hay errores, se detiene el envío del formulario
      //   if (formErro > 0) {
      //     return false;
      //   }
      //   return true;
      // }
      
      // document.getElementById('contact-form').addEventListener('submit', function(event) {
      //   if (!validarFormulario()) {
      //     event.preventDefault(); // Evita el envío del formulario si hay errores de validación
      //   }
      // });
//       console.log("Datos impresos. Pausa en la ejecución...");
// debugger; // Esto detendrá la ejecución del script hasta que se elimine el punto de interrupción
// console.log("La ejecución continúa...");
      // if(formErro ==0){
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
            
            success: function(response) {
               console.log(response)
               boton.value = '  ENVIO EXITOSO!  ';
               loader.style.display = 'none';

   
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

    function googleForm(formClass) {
  var form = document.querySelector(formClass);
  var boton = form.querySelector('[type=submit]');
  var formElement = document.getElementById('contact-form');

  var formErro = 0;
  boton.disabled = true;

  if (formErro == 0) {
    var formData = new FormData(form);

    document.querySelector("#contact-form input[type='submit']").disabled = true;
    document.querySelector('#contact-form .loader').style.display = 'block';

    for (var pair of formData.entries()) {
      console.log('Key: ' + pair[0] + ', Value: ' + pair[1]);
    }
    
    var Pagina_y_Formulario = $('formulario-pagina').val();
    var Prepaga_Elegida = $('#Operadora').val();
    var Grupo_Familiar = $('input[name="idCapitas"]:checked').val();
    var Edad_Titular = $('#edad_1').val();
    var Edad_Pareja = $('#edad_2').val();
    var Edades_Hijos = $('#hijos_num').val();
    var Tipo_Asociado = $('input[name="poseeOS"]:checked').val();
    var Tipo_Desregulado = $('input[name="cualOS"]:checked').val();
    var Sueldo = $('#sueldo').val();
    var Categoria_Monotributo = $('#categoriaMono').val();
    var Familiares_que_Aportan = $('#aportantesMono').val();
    var Nombre = $('#Name').val();
    var Prefijo = $('#Prefijo').val();
    var Telefono = $('#Telefone').val();
    var email = $('#email').val();

    // Obtener datos del formulario
    var data = {
      'entry.1971212034': Pagina_y_Formulario,
      'entry.1788353276': Prepaga_Elegida,
      'entry.2032223983': Grupo_Familiar,
      'entry.1763723729': Edad_Titular,
      'entry.1779532345': Edad_Pareja,
      'entry.1112113610': Edades_Hijos,
      'entry.632598661': Tipo_Asociado,
      'entry.1404611772': Tipo_Desregulado,
      'entry.1404611772': Sueldo, // ¿Este campo tiene la misma clave que Tipo_Desregulado?
      'entry.472026566': Categoria_Monotributo,
      'entry.38288768': Familiares_que_Aportan,
      'entry.1508322728': Nombre,
      'entry.527309604': Prefijo,
      'entry.1813933214': Telefono,
      'entry.710988652': email
    };

    console.log(data);

    $.ajax({
      url: 'https://docs.google.com/forms/d/e/1FAIpQLSfd5MmQlkg_HQzLoquOiakVNxyRIP4XAs7l4zjEUMcOVtDEFw/formResponse',
      type: 'POST',
      data: data,
      dataType: 'xml',
      success: function (response) {
        finalizar(formClass)
        // La solicitud se realizó correctamente, los datos se han enviado al formulario de Google Forms
        console.log('Enter on success');
        $('#feedback').html('<label class="text-success">Message sent!</label>');
      },
      error: function (error) {
        // Ocurrió un error al realizar la solicitud
        console.log('Enter on error');
        console.log(error); // Muestra el objeto de error en la consola
      }
    });
  }
}

function finalizarWhats(formClass) {
 
//     var form = document.querySelector(formClass);
//     var boton = form.querySelector('[type=submit]');
//     var formElement = document.getElementById('contact-form');
//     var formErro = 0;
//     var requiredInputs = formElement.querySelectorAll('.required');
//     var submitButton = document.querySelector(".form-whats [type='submit']");

//     boton.disabled = true;

//     // requiredInputs.forEach(function(input) {
//     //     if (input.value === '') {
//     //         formErro += 1;
//     //         input.classList.add('ErrorFormIw');
//     //     }
//     // });
    
//     // if (formErro == 0) {
//         var formData = new FormData(form);
        
//         document.querySelector("#contact-form input[type='submit']").disabled = true;
//         document.querySelector('#contact-form .loaderwhats').style.display = 'block';

//         for (var pair of formData.entries()) {
//             console.log('Key: ' + pair[0] + ', Value: ' + pair[1]);
//         }

//         $.ajax({
//             url: form.getAttribute('action'),
//             type: 'POST',
//             data: formData,
//             processData: false,
//             contentType: false,
//             beforeSend: function() {
//                 $('form#contact-form button').prop('disabled', true);
//                 $('.form-contact-form').css('cursor', 'wait');
//                 $('form#contact-form .alert').addClass('alert-info');
//                 $('form#contact-form .alert strong').text('Enviando datos...');
//             },
            
//             success: function(response) {
//                 var form = document.querySelector('#contact-form');
//                 console.log(response)
//     var submitButton = form.querySelector('input[type="submit"]');
//     var loaderWhatsapp = form.querySelector('.loaderwhats');
//     submitButton.value = '  ENVIO EXITOSO!  ';
//     loaderWhatsapp.style.display = 'none';

   
//     // salvaCookies();

//     setTimeout(function() {
//         window.location.href = 'https://plandesalud.ar/gracias/';
//     }, 3000);
//             },
//             error: function() {
//                 console.log('Error al enviar el correo');
//             }
//         });
//     }
//     // Process contact form

   
}