(function (jQuery) {

    jQuery(document).ready(function(){
console.log("aca estamos@@arguments")
jQuery("#contact-form").validate({
   
			rules:{
        Formulario_pagina :{required: false },
        Operadora :{required: false },
        IdCapitas:{required: true },
        Edad_1 :{required: true,rangelength: [2,2]},
        Edad_2 :{required: true ,rangelength: [2,2]},
        Hijos_Num :{required: true ,rangelength: [1,1]},
        PoseeOS:{required: true },
        sueldo :{required: true },
        Nombre :{required: true },
        Prefijo :{required: true },
        telefone :{required: true ,rangelength: [10,10]},
        email :{required: true,email: true},
			},
     
    
			messages:{
      formulario_pagina :{required: "" },
      Operadora :{required: "" },
      IdCapitas:{required: "Seleccione una opción" },
      Edad_1 :{required: "El campo Edad es necesario"},
      Edad_2 :{required: "El campo Edad es necesario"},
      Hijos_Num :{required: "El campo Hijos es necesario"},
      PoseeOS:{required: "Seleccione una opción" },
      // CualOS:{required: "" },
      sueldo :{required: "" },
      Categoria_Monotributo :{required: "" },
      Familiares_que_Aportan :{required: "" },
      Nombre :{required: "El campo Nombre es necesario" },
      // Prefijo :{required: "" },
      telefone :{required: "El campo Telefono es necesario"},
      email :{required: "El campo EMAIL es necesario",email: "Informe u EMAIL válido"},
		
			},

			submitHandler: function(form){
				var form = jQuery('#contact-form');
				var formErro = 0;
				jQuery(form).find('.required').each(function(index, obj){
					if(jQuery(obj).val()==''){
						formErro  += 1;
						jQuery(obj).addClass('ErrorFormIw');
					}
				});

				// if(formErro ==0){
					jQuery("#contact-form input[type='submit']").attr('disabled', true);
					jQuery('#contact-form .loader').fadeIn();
					var dados = form.serialize();
					jQuery.ajax({
						url : '../includes/contacto-form.php',
						type : 'POST',
						data : dados,
						dataType : 'json',
						success : function(x){
							console.log(x);

							if (x.resp == 'success') {
								jQuery("#contact-form input[type='submit']").hide();
								jQuery('#contact-form .loader').hide();
								jQuery('#contact-form').append('<span class="sucesso">ENVIO EXITOSO!</span>');
								// salvaCookies();
								setTimeout(function(){ window.location.href = 'https://www.plandesalud.ar/gracias/'; }, 3000);
							}else{      console.log(xhr);
								console.log(status);
								console.log(error);
								// jQuery('#contact-form').append('<span class="falha-envio">' + x.resp + '</span>');
								jQuery("#contact-form input[type='submit']").hide();
								jQuery('#contact-form .loader').hide();

								setTimeout(function(){
									// jQuery('#contact-form .falha-envio').hide();
									jQuery("#contact-form input[type='submit']").fadeIn();
									jQuery("#contact-form input[type='submit']").attr('disabled', false);
								}, 3000);
							}
						}
					});
				}
			// }

		}
    );
    })})






	