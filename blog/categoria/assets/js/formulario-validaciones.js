	jQuery(document).ready(function(){
        // Método de validación para el teléfono
        jQuery.validator.addMethod("telefone", function (value) {
            var numbersFiltered = value.substring(0,4);
            console.log(numbersFiltered);
            if (numbersFiltered === '0000') {
                // Devolvemos false y no ejecutamos el código después del return
                return false;
            } else {
                return true;
            }
        }, "Teléfono Inválido");

        // Método de validación personalizado para email
        jQuery.validator.addMethod("emailCustom", function(value, element) {
            // Aquí validamos el formato de correo electrónico
            return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
        }, "Por favor, introduce un correo válido.");

        jQuery("#contact-form").validate({
            rules:{
                formulario_pagina: { required: false },
                Operadora: { required: false },
                idCapitas: { required: true },
                edad_1: { required: true, rangelength: [2,2] },
                edad_2: { required: true, rangelength: [2,2] },
                hijos_Num: { required: true, rangelength: [1,1] },
                poseeOS: { required: true },
                cualOS: { required: true },
                sueldo: { required: true, rangelength: [6,7] },
                Name: { required: true },
                telefone: { required: true, rangelength: [10,10], telefone: true }, // Se incluye la validación personalizada
                email: { required: true, emailCustom: true },  // Usa la validación personalizada
            },
            messages:{
                formulario_pagina: { required: "" },
                Operadora: { required: "" },
                idCapitas: { required: "Seleccione una opción" },
                edad_1: { required: "El campo Edad es necesario" },
                edad_2: { required: "El campo Edad es necesario" },
                hijos_Num: { required: "El campo Hijos es necesario" },
                poseeOS: { required: "Seleccione una opción" },
                cualOS: { required: "Este campo es obligatorio" },
                sueldo: { required: "Este campo es obligatorio" },
                Name: { required: "El campo Nombre es necesario" },
                telefone: { required: "El campo Teléfono es necesario", rangelength: "El teléfono debe tener exactamente 10 dígitos" },
                email: { required: "El campo EMAIL es necesario", emailCustom: "Introduce un EMAIL válido" },
            },
            submitHandler: function(form){
                var form = jQuery('#contact-form');
                var formErro = 0;
                
                // Recorremos los campos requeridos
                jQuery(form).find('.required').each(function(index, obj){
                    if(jQuery(obj).val() == ''){
                        formErro  += 1;
                        jQuery(obj).addClass('ErrorFormIw');
                    }
                });

                if(formErro == 0){
                    finalizar('.form-cotacao');
                }
            }
        });

        // MÁSCARAS
        jQuery("#edad_1").mask("90");
        jQuery("#edad_2").mask("90");
        jQuery("#hijos_num").mask("9");
        jQuery("#telefone").mask("9000000000");
        jQuery("#sueldo").mask("9000000");

        jQuery(".bandeiras img").click(function(){
            var srcImagem = jQuery(this).attr("src");
            var idOperadpra = jQuery(this).attr("data-id-operadora");
            jQuery('.recebe-img img').remove();
            jQuery('.recebe-img').append('<img src="'+srcImagem+'">').attr('id', jQuery(this).data("classe-operadora"));
            jQuery(".campo-operadora").val(idOperadpra);
            jQuery(".plano-selecionado").fadeIn();
        });
    });