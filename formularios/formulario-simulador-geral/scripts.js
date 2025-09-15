// (function (jQuery) {

// 	jQuery(document).ready(function(){

// 		jQuery.validator.addMethod("numbersPhone", function (value) {
// 			// após o DDD, eu pedo os 4 primeiros numeros do telefone
// 			var numbersFiltered = value.substring(0,4);
// 			console.log(numbersFiltered)
// 			if ( numbersFiltered === '0000' ) { return false; } else { return true;	};
// 		}, "telefone Inválido");

	

// 		jQuery("#contact-form").validate({

// 			rules:{
// 				formulario_pagina :{required: false },
// 				Operadora :{required: false },
// 				idCapitas:{required: true },
// 				edad_1 :{required: true,rangelength: [2,2]},
// 				edad_2 :{required: true ,rangelength: [2,2]},
// 				hijos_Num :{required: true ,rangelength: [1,1]},
// 				poseeOS:{required: true },
// 				cualOS:{required: true },
// 				sueldo :{required: true,rangelength: [6,7] },
// 				Name :{required: true },
// 				telefone :{required: true,rangelength: [10,10]},
// 				email :{required: true,email: true},
// 				},
				
				
// 				messages:{
// 				formulario_pagina :{required: "" },
// 				Operadora :{required: "" },
// 				idCapitas:{required: "Seleccione una opción" },
// 				edad_1 :{required: "El campo Edad es necesario"},
// 				edad_2 :{required: "El campo Edad es necesario"},
// 				hijos_Num :{required: "El campo Hijos es necesario"},
// 				poseeOS:{required: "Seleccione una opción" },
// 				sueldo :{required: "" },
// 				Name :{required: "El campo Nombre es necesario" },
// 				telefone :{required: "El campo Telefono es necesario"},
// 				email :{required: "El campo EMAIL es necesario",email: "Informe u EMAIL válido"},
				
// 				},
				

// 				submitHandler: function(form){
// 					var form = jQuery('#contact-form');
// 					var formErro = 0;
// 					jQuery(form).find('.required').each(function(index, obj){
// 						if(jQuery(obj).val()==''){
// 							formErro  += 1;
// 							jQuery(obj).addClass('ErrorFormIw');
// 						}
// 					});
				

// 					if(formErro ==0){
		
// 						finalizar('.form-cotacao')
// 					}
// 			}

// 		});

// 		jQuery(".bandeiras img").click(function(){
// 			var srcImagem = jQuery(this).attr("src");
// 			var idOperadpra = jQuery(this).attr("data-id-operadora");
// 			jQuery('.recebe-img img').remove();
// 			jQuery('.recebe-img').append('<img src="'+srcImagem+'">').attr('id', jQuery(this).data("classe-operadora"));
// 			jQuery(".campo-operadora").val(idOperadpra);
// 			jQuery(".plano-selecionado").fadeIn();
// 		});


// 		// TIPO DO PLANO
// 		jQuery(".possui-cnpj").hide();
// 		jQuery(".quantidade-de-pessoas").hide();

// 		jQuery('.btn-individual').click(function() {
// 			jQuery(".tipo-de-plano b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".tipo-de-plano p").addClass('ok');
// 			jQuery('input:radio[name=idTipo]')[0].checked = true;
// 			jQuery(".possui-cnpj").hide();
// 			jQuery('input:radio[name=possuiCNPJ]')[1].checked = true;
// 			jQuery(".possui-cnpj p").removeClass('ok');
// 			jQuery("#idTipo-error").fadeOut();
// 			jQuery(".quantidade-de-pessoas").fadeOut();
// 			jQuery('.quantidade-de-pessoas select').val( jQuery('option:contains("Selecione")').val());
// 		});

// 		jQuery('.btn-familiar').click(function() {
// 			jQuery(".tipo-de-plano b, .possui-cnpj b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".tipo-de-plano p").addClass('ok');
// 			jQuery('input:radio[name=idTipo]')[1].checked = true;
// 			jQuery(".possui-cnpj").fadeIn();
// 			jQuery('input:radio[name=possuiCNPJ]')[1].checked = true;
// 			jQuery("#idTipo-error").fadeOut();
// 			jQuery(".quantidade-de-pessoas").fadeIn();
// 		});

// 		jQuery('.btn-empresarial').click(function() {
// 			jQuery(".tipo-de-plano b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".tipo-de-plano p").addClass('ok');
// 			jQuery('input:radio[name=idTipo]')[2].checked = true;
// 			jQuery(".possui-cnpj").hide();
// 			jQuery('input:radio[name=possuiCNPJ]')[0].checked = true;
// 			jQuery(".possui-cnpj p").removeClass('ok');
// 			jQuery("#idTipo-error").fadeOut();
// 			jQuery(".quantidade-de-pessoas").fadeIn();
// 		});


// 		// AO CARREGAR A PÁGINA, VERIFICA SE TEM NA URL "INDIVIDUAL", "FAMILIAR" OU "EMPRESARIAL".
// 		var url = window.location.href;
// 		if(url.indexOf('individual') > -1){
// 			jQuery(".tipo-de-plano b").removeClass('ativa');
// 			jQuery(".btn-individual").addClass('ativa');
// 			jQuery(".tipo-de-plano p").addClass('ok');
// 			jQuery('input:radio[name=idTipo]')[0].checked = true;
// 			jQuery(".possui-cnpj").hide();
// 			jQuery('input:radio[name=possuiCNPJ]')[1].checked = true;
// 			jQuery(".possui-cnpj p").removeClass('ok');
// 			jQuery("#idTipo-error").fadeOut();
// 			jQuery(".quantidade-de-pessoas").fadeOut();
// 			jQuery('.quantidade-de-pessoas select').val( jQuery('option:contains("Selecione")').val());
// 		}

// 		if(url.indexOf('familiar') > -1){
// 			jQuery(".tipo-de-plano b, .possui-cnpj b").removeClass('ativa');
// 			jQuery(".btn-familiar").addClass('ativa');
// 			jQuery(".tipo-de-plano p").addClass('ok');
// 			jQuery('input:radio[name=idTipo]')[1].checked = true;
// 			jQuery(".possui-cnpj").fadeIn();
// 			jQuery('input:radio[name=possuiCNPJ]')[1].checked = true;
// 			jQuery("#idTipo-error").fadeOut();
// 			jQuery(".quantidade-de-pessoas").fadeIn();
// 		}

// 		if(url.indexOf('empresarial') > -1){
// 			jQuery(".tipo-de-plano b").removeClass('ativa');
// 			jQuery(".btn-empresarial").addClass('ativa');
// 			jQuery(".tipo-de-plano p").addClass('ok');
// 			jQuery('input:radio[name=idTipo]')[2].checked = true;
// 			jQuery(".possui-cnpj").hide();
// 			jQuery('input:radio[name=possuiCNPJ]')[0].checked = true;
// 			jQuery(".possui-cnpj p").removeClass('ok');
// 			jQuery("#idTipo-error").fadeOut();
// 			jQuery(".quantidade-de-pessoas").fadeIn();
// 		}



// 		// SE POSSUI OPERADORA
// 		jQuery(".operadora").hide();
// 		jQuery('.btn-sim').click(function() {
// 			jQuery(".possui-plano b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".possui-plano p").addClass('ok');
// 			jQuery('input:radio[name=possuiPlano]')[0].checked = true;
// 			//jQuery(".operadora").fadeIn();
// 			jQuery("#possuiPlano-error").fadeOut();
// 		});
// 		jQuery('.btn-nao').click(function() {
// 			jQuery(".possui-plano b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".possui-plano p").addClass('ok');
// 			jQuery('input:radio[name=possuiPlano]')[1].checked = true;
// 			//jQuery(".operadora").fadeOut();
// 			jQuery("#possuiPlano-error").fadeOut();
// 		});












// 		// SE POSSUI CNPJ
// 		jQuery('.btn-sim-cnpj').click(function() {
// 			jQuery(".possui-cnpj b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".possui-cnpj p").addClass('ok');
// 			jQuery('input:radio[name=possuiCNPJ]')[0].checked = true;
// 			jQuery("#possuiCNPJ-error").fadeOut();
// 		});

// 		jQuery('.btn-nao-cnpj').click(function() {
// 			jQuery(".possui-cnpj b").removeClass('ativa');
// 			jQuery(this).addClass('ativa');
// 			jQuery(".possui-cnpj p").addClass('ok');
// 			jQuery('input:radio[name=possuiCNPJ]')[1].checked = true;
// 			jQuery("#possuiCNPJ-error").fadeOut();
// 		});








// 		// .LOAD
// 		jQuery(window).load(function (){

// 			if(jQuery(window).width() >=950) {
// 				jQuery('.bandeiras img').click(function(){
// 					jQuery("html, body").animate({ scrollTop: jQuery(".form-cotacao").offset().top - 120 }, 1000);
// 				});
// 			} else{
// 				jQuery('.bandeiras img').click(function(){
// 					jQuery("html, body").animate({ scrollTop: jQuery(".form-cotacao").offset().top }, 1000);
// 				});

// 				jQuery('.btn-sim-cnpj').click(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000);});
// 				jQuery('.btn-nao-cnpj').click(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000);});
// 				jQuery('.btn-sim').click(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000);});
// 				jQuery('.btn-nao').click(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000);});

// 				jQuery( ".quantidade-de-pessoas select" ).change(function() {
// 					jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000);
// 				});


// 				jQuery('.Name').focus(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000);});
// 				jQuery('.email').focus(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000);});
// 				jQuery('.Prefijo').focus(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000);});
// 				jQuery('.telefone').focus(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000);});


// 				jQuery('.Name, .email, .Pefijo, .telefone').focus(function(){
// 					jQuery(".margin-rodape").addClass("remove-altura-margin-rodape");
// 					jQuery(".telefones-rodape").addClass("remove-telefone-rodape");
// 				});

// 				jQuery('.Name, .email, .PrefiWelefone').blur(function(){
// 					jQuery(".margin-rodape").removeClass("remove-altura-margin-rodape");
// 					jQuery(".telefones-rodape").removeClass("remove-telefone-rodape");
// 				});

// 			}

// 		});

// 		// MÁSCARAS
// jQuery("#edad_1").mask("90");
// jQuery("#edad_2").mask("90");
// jQuery("#hijos_num").mask("9");
// jQuery("#telefone").mask("9000000000");
// jQuery("#sueldo").mask("9000000");


// 		function salvaCookies(){
// 			setCookie('data_lead_operadora', jQuery('.campo-operadora').val(), 3);
// 			setCookie('data_lead_tipo', jQuery('input[name=idTipo]:checked').val(), 3);
// 			setCookie('data_lead_possui_cnpj', jQuery('input[name=possuiCNPJ]:checked').val(), 3);
// 			setCookie('data_lead_possui_plano', jQuery('input[name=possuiPlano]:checked').val(), 3);
// 			setCookie('data_lead_quantidade_pessoas', jQuery('select[name=qntPessoas] option').filter(':selected').val(), 3);
// 			setCookie('data_lead_name', jQuery('.campo-nome').val(), 3);
// 			setCookie('data_lead_email', jQuery('.campo-email').val(), 3);
// 			setCookie('data_lead_ddd', jQuery('.campo-ddd').val(), 3);
// 			setCookie('data_lead_telefone', jQuery('.campo-telefone').val(), 3);
// 			setCookie('data_lead_telefone_com_ddd', "("+jQuery('.campo-ddd').val()+") " + jQuery('.campo-telefone').val(), 3);
// 			function setCookie(name, value, days) {
// 				var d = new Date;
// 				d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
// 				document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
// 			}
// 		}


// 	});


// }(window.jQuery || window.jQuery));

// function finalizar(formClass) {
 
// 	var form = document.querySelector(formClass);
// 	form.action =  "../includes/contact_form.php";
//   console.log(form)
  
	 
//   var boton = form.querySelector('#submit');
//   console.log(boton)
  
  
//   boton.disabled = true;
  
//   var loader = form.querySelector('.loader')
  
//   loader.style.display = 'block';
  
// 		var formData = new FormData();
  
// 		// Obtener los valores de los campos del formulario usando jQuery
// 		var Pagina_y_Formulario = $('#formulario_pagina').val();
// 		var Prepaga_Elegida = $('#Operadora').val();
// 		var Grupo_Familiar = $('input[name="idCapitas"]:checked').val();
// 		var Edad_Titular = $('#edad_1').val();
// 		var Edad_Pareja = $('#edad_2').val();
// 		var Edades_Hijos = $('#hijos_num').val();
// 		var Tipo_Asociado = $('input[name="poseeOS"]:checked').val();
// 		var Sueldo = $('#sueldo').val();
// 		var Nombre = $('#Name').val();
// 		var Telefono = $('#telefone').val();
// 		var email = $('#email').val();
	  
// 		// Agregar los valores al objeto FormData
// 		formData.append('formulario_pagina', Pagina_y_Formulario);
// 		formData.append('Operadora', Prepaga_Elegida);
// 		formData.append('idCapitas', Grupo_Familiar);
// 		formData.append('edad_1', Edad_Titular);
// 		formData.append('edad_2', Edad_Pareja);
// 		formData.append('hijos_num', Edades_Hijos);
// 		formData.append('poseeOS', Tipo_Asociado);
// 		formData.append('sueldo', Sueldo);
// 		formData.append('Name', Nombre);
// 		formData.append('telefone', Telefono);
// 		formData.append('email', email);
// 		formData.append('Respuestas Google','https://docs.google.com/spreadsheets/d/1M-XJiLh-G0VeExG5tQlOH6HfLJV2WNcdJiEKPUkqaSA/edit?resourcekey#gid=1797801513')
// 		var data = {
// 		  'entry.1971212034': Pagina_y_Formulario,
// 		  'entry.1788353276': Prepaga_Elegida,
// 		  'entry.2032223983': Grupo_Familiar,
// 		  'entry.1763723729': Edad_Titular,
// 		  'entry.1779532345': Edad_Pareja,
// 		  'entry.1112113610': Edades_Hijos,
// 		  'entry.632598661': Tipo_Asociado,
// 		  'entry.1404611772': Sueldo, // ¿Este campo tiene la misma clave que Tipo_Desregulado?
// 		  'entry.1508322728': Nombre,
// 		  'entry.1813933214': Telefono,
// 		  'entry.710988652': email
// 		};
		
// 		  for (var pair of formData.entries()) {
// 			  console.log('Key: ' + pair[0] + ', Value: ' + pair[1]);
// 		  }
	   
		
	  
// 		  $.ajax({
// 			  url: form.action,
// 			  type: 'POST',
// 			  data: formData,
// 			  processData: false,
// 			  contentType: false,
		   
// 			  // beforeSend: function() {
			
// 				  // $('form#contact-form .alert').addClass('alert-info');
// 				  // $('form#contact-form .alert strong').text('Enviando datos...');
// 			  // },
			  
// 			  success: function(response) {
// 				 console.log(response)
// 				 boton.value = '  ENVIO EXITOSO!  ';
// 				 loader.style.display = 'none';
// 				 googleForm(data);
// 				 $('#contact-form')[0].reset();
	 
// 	  // salvaCookies();
  
// 	  setTimeout(function() {
// 		  window.location.href = 'https://plandesalud.ar/gracias/';
// 	  }, 3000);
// 			  },
// 			  error: function() {
// 				  console.log('Error al enviar el correo');
// 			  }
// 		  });
// 	  }