(function (jQuery) {

    jQuery(document).ready(function(){

        jQuery("#form-whats").validate({

            rules:{nome:{required: true},
            Prefijo:{required: true,rangelength: [2,3]},
            telefone:{required: true,minlength: 9}},
            messages:{nome:{required: "El campo nombre es necesario"},
				Prefijo:{required: "El campo característica es necesario"},
            telefone:{required: "El campo teléfono es necesario"}},

            submitHandler: function(form){

                var form = jQuery('#form-whats.form-whats');
                var formErro = 0;
                jQuery(form).find('.required').each(function(index, obj){
                    if(jQuery(obj).val()==''){
                        formErro  += 1;
                        jQuery(obj).addClass('ErrorFormIw');
                    }
                });
                if(formErro ==0){
                    jQuery("#contact-form-whats.form-whats input[type='submit']").attr('disabled', true);
                    jQuery('#contact-form-whats.form-whats .loader').fadeIn();
                    var dados = form.serialize();
                    jQuery.ajax({
                        url : 'EnvioFormWhats.php',
                        type : 'POST',
                        data : dados,
                        dataType : 'json',
                        success : function(x){
                            console.log(x);

                            if (x.resp == 'success') {
                                jQuery('#form-whats.form-whats').html('ENVIO EXITOSO!');
                                window.location.href = 'https://www.plandesalud.ar/gracias/';
                            }else{
                                jQuery('#contact-form-whats.form-whats').html('Ops! Ocurrio un error y no fue posible enviar sus datros. Recargue la página e intente nuevamente.');
                                jQuery("#contact-form-whats.form-whats input[type='submit']").attr('disabled', false);
                                jQuery('#contact-form-whats.form-whats .loader').fadeOut();
                            }
                        }
                    });
                }

            }

        });





        // MASCARAS
        jQuery("#ddd-whats").mask("900");
        jQuery("#telefone-whats").mask("90000-0000", {reverse: true});

        jQuery("input").focus(function(){
            jQuery(this).removeClass("error");
        });

        if(jQuery(window).width() <=950) {
            jQuery( ".page-id-10 .telefones-rodape .whatsapp" ).click(function(){
                jQuery("html, body").animate({ scrollTop: jQuery(".camada-plantao-e-whats .form-whats").offset().top - 10 }, 1000);
                setTimeout(function(){ jQuery(".camada-plantao-e-whats .form-whats #nome").focus(); }, 1500);
                return false;
            });

            jQuery(".camada-plantao-e-whats .form-whats #nome, .camada-plantao-e-whats .form-whats #ddd-whats, .camada-plantao-e-whats .form-whats #telefone-whats").focus(function(){jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 10 }, 1000);});
        }




    });

}(window.jQuery || window.jQuery));