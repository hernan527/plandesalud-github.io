
(function (jQuery) {

  jQuery(document).ready(function(){
  
    jQuery(".bandeiras img").click(function(){
          var srcImagem = jQuery(this).attr("src");
          var idOperadpra = jQuery(this).attr("data-id-operadora");
          jQuery('.recebe-img img').remove();
          jQuery('.recebe-img').append('<img src="'+srcImagem+'">').attr('id', jQuery(this).data("data-classe-operadora"));
          jQuery(".campo-operadora").val(idOperadpra);
          jQuery(".plano-selecionado").fadeIn();
        });
        
   
      
  
  // TIPO DO PLANO
  jQuery(".hijos_num").hide();
  jQuery(".campo-edad").hide();
  jQuery(".campo-edad-pareja").hide();
  jQuery(".edad-varios").hide();
  jQuery(".edad-solo").hide();
  jQuery(".sueldo").hide();
  jQuery(".monotributo").hide();
  jQuery(".possui-plano").hide();
  jQuery(".possui-cnpj").hide();
  
  
  jQuery('.btn-vos').click(function() {
  jQuery(".tipo-de-plano b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[0].checked = true;
  jQuery(".hijos_num").fadeOut();
  jQuery("#idCapitas-error").fadeOut();
  
  jQuery(".edad-varios").fadeOut();
  
  jQuery(".campo-edad").fadeIn(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".campo-edad").offset().top - (jQuery(window).height() / 2)
        }, 1000);    
      });
      
  jQuery(".edad-solo").fadeIn();
  jQuery(".campo-edad-pareja").fadeOut();
  
  
  
  
  });
  
  jQuery('.btn-pareja').click(function() {
  jQuery(".tipo-de-plano b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[1].checked = true;
  jQuery(".hijos_num").fadeOut();
  jQuery("#idCapitas-error").fadeOut();
  
  jQuery(".edad-varios").fadeIn();
  jQuery(".campo-edad-pareja").fadeIn();
  jQuery(".campo-edad").fadeIn(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".campo-edad-pareja").offset().top - (jQuery(window).height() / 2)
        }, 1000);
  });    jQuery(".edad-solo").fadeOut();
  
  
  
  
  });
  
  jQuery('.btn-vosehijo').click(function() {
  jQuery(".tipo-de-plano b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[2].checked = true;
  jQuery(".hijos_num").fadeIn();
  jQuery("#idCapitas-error").fadeOut();
  jQuery(".edad-varios").fadeIn();
  jQuery(".edad-solo").fadeOut();
  
  jQuery(".campo-edad-pareja").fadeOut();
  jQuery(".campo-edad").fadeIn(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".campo-edades-hijos").offset().top - (jQuery(window).height() / 2)
        }, 1000);
  });
  
  
  
  
  });
  
  jQuery('.btn-parejaehijo').click(function() {
  jQuery(".tipo-de-plano b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[3].checked = true;
  jQuery(".hijos_num").fadeIn();
  jQuery("#idCapitas-error").fadeOut();
  jQuery(".edad-varios").fadeIn();
  jQuery(".edad-solo").fadeOut();
  
  jQuery(".campo-edad-pareja").fadeIn();
  jQuery(".campo-edad").fadeIn(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".campo-edades-hijos").offset().top - (jQuery(window).height() / 2)
        }, 1000);
  });

  
  
  
  });
  jQuery('.campo-edad').on('input', function() {
  jQuery(".possui-plano").fadeIn(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".possui-plano").offset().top - (jQuery(window).height() / 2)
        }, 1000);
  });
  
    });
    
  
  // SE POSSUI OPERADORA
  //jQuery(".operadora").hide();
  jQuery('.btn-con-os').click(function() {
  jQuery(".possui-plano b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".possui-plano p").addClass('ok');
  jQuery('input:radio[name=poseeOS]')[0].checked = true;
  // jQuery(".possui-cnpj").fadeIn(function() {
  //     jQuery('html, body').animate({
  //         scrollTop: jQuery("#rel-os").offset().top - (jQuery(window).height() / 2)
  //       }, 1000);
  // });
  jQuery(".sueldo").fadeIn(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".sueldo").offset().top - (jQuery(window).height() / 2)
        }, 1000);
  });
  jQuery('.sueldo').on('input', function() {
  jQuery('html, body').animate({
          scrollTop: jQuery(".campo-nome").offset().top - (jQuery(window).height() / 2)
        }, 1000);
  });
  
  jQuery("#poseeOS-error").fadeOut();
  jQuery('.campo-nome').on('input', function() {
      jQuery('html, body').animate({
              scrollTop: jQuery(".campo-telefone").offset().top - (jQuery(window).height() / 2)
            }, 1000);
      });
  });
  jQuery('.campo-telefone').on('input', function() {
      jQuery('html, body').animate({
              scrollTop: jQuery(".campo-email").offset().top - (jQuery(window).height() / 2)
            }, 1000);
      });
  
  
  jQuery('.btn-sin-os').click(function() {
  jQuery(".possui-plano b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".possui-plano p").addClass('ok');
  jQuery('input:radio[name=poseeOS]')[1].checked = true;
  //jQuery(".operadora").fadeOut();
  jQuery("#poseeOS-error").fadeOut();
  jQuery(".possui-cnpj").fadeOut();
  jQuery(".monotributo").fadeOut();
  jQuery(".sueldo").fadeOut();
  
  jQuery(".sueldo").hide();
  jQuery(".monotributo").hide();
  jQuery(".possui-cnpj b").removeClass('ativa');
  jQuery(".possui-cnpj p").removeClass('ok');
  jQuery('html, body').animate({
      scrollTop: jQuery(".campo-nome").offset().top - (jQuery(window).height() / 2)
    }, 1000);
  
  });
  
  // SE POSSUI CNPJ
  
  jQuery('.btn-rel-os').click(function() {
  jQuery(".possui-cnpj b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".possui-cnpj p").addClass('ok');
  jQuery('input:radio[name=cualOS]')[0].checked = true;
  jQuery("#cualOS-error").fadeOut();
  jQuery(".sueldo").fadeIn();
  jQuery(".monotributo").fadeOut();
  jQuery(".datos-contacto").fadeIn();
  
  });
  
  jQuery('.btn-mon-os').click(function() {
  jQuery(".possui-cnpj b").removeClass('ativa');
  jQuery(this).addClass('ativa');
  jQuery(".possui-cnpj p").addClass('ok');
  jQuery('input:radio[name=cualOS]')[1].checked = true;
  jQuery("#cualOS-error").fadeOut();
  jQuery(".sueldo").fadeOut();
  jQuery(".monotributo").fadeIn();
  jQuery(".datos-contacto").fadeIn();
  
  });
  // AO CARREGAR A PÁGINA, VERIFICA SE TEM NA URL "INDIVIDUAL", "FAMILIAR" OU "EMPRESARIAL".
  var url = window.location.href;
  if(url.indexOf('btn-vos') > -1){
  jQuery(".tipo-de-plano b").removeClass('ativa');
  jQuery(".btn-vos").addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[0].checked = true;
  jQuery(".possui-cnpj").hide();
  jQuery(".possui-cnpj p").removeClass('ok');
  jQuery("#idCapitas").fadeOut();
  }
  
  if(url.indexOf('btn-pareja') > -1){
  jQuery(".tipo-de-plano b, .possui-cnpj b").removeClass('ativa');
  jQuery(".btn-pareja").addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[1].checked = true;
  jQuery(".possui-cnpj").fadeIn();
  jQuery("#idCapitas-error").fadeOut();
  }
  
  if(url.indexOf('btn-vosehijo') > -1){
  jQuery(".tipo-de-plano b").removeClass('ativa');
  jQuery(".btn-vosehijo").addClass('ativa');
  jQuery(".tipo-de-plano p").addClass('ok');
  jQuery('input:radio[name=idCapitas]')[2].checked = true;
  jQuery(".possui-cnpj").hide();
  jQuery(".possui-cnpj p").removeClass('ok');
  jQuery("#idCapitas-error").fadeOut();
  }
  
  if(url.indexOf('btn-parejaehijo') > -1){
      jQuery(".tipo-de-plano b").removeClass('ativa');
      jQuery(".btn-parejaehijo").addClass('ativa');
      jQuery(".tipo-de-plano p").addClass('ok');
      jQuery('input:radio[name=idCapitas]')[3].checked = true;
      jQuery(".possui-cnpj").hide();
      jQuery(".possui-cnpj p").removeClass('ok');
      jQuery("#idCapitas-error").fadeOut();
      }
      
      // jQuery(window).load(function (){
  
      //     if(jQuery(window).width() >=950) {
      //         jQuery('.bandeiras img').click(function(){
      //             jQuery("html, body").animate({ scrollTop: jQuery(".contact-form-cotacao").offset().top - 120 }, 1000);
      //         });
      //     } else {
      //         jQuery('.bandeiras img').click(function(){
      //             jQuery("html, body").animate({ scrollTop: jQuery(".contact-form-cotacao").offset().top }, 1000);
             
      //             jQuery('.btn-sin-os').click(function() { jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000); });
      //             jQuery('.btn-con-os').click(function() { jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000); });
      //             jQuery('.btn-rel-os').click(function() { jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000); });
      //             jQuery('.btn-mon-os').click(function() { jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 65 }, 1000); });
      //         });
      
      //         jQuery('.campo-nome').focus(function(){ jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000); });
      //         jQuery('.campo-email').focus(function(){ jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000); });
      //         jQuery('.Prefijo').focus(function(){ jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000); });
      //         jQuery('.campo-telefone').focus(function(){ jQuery("html, body").animate({ scrollTop: jQuery(this).offset().top - 45 }, 1000); });
      
      //         jQuery('.campo-nome, .campo-email, .Prefijo, .campo-telefone').focus(function(){
      //             jQuery(".margin-rodape").addClass("remove-altura-margin-rodape");
      //             jQuery(".telefones-rodape").addClass("remove-telefone-rodape");
      //         });
      
      //         jQuery('.campo-nome, .campo-email, .Prefijo, .campo-telefone').blur(function(){
      //             jQuery(".margin-rodape").removeClass("remove-altura-margin-rodape");
      //             jQuery(".telefones-rodape").removeClass("remove-telefone-rodape");
      //         });
      //     }
      
      // });
      
  
  
  
  
      
      // jQuery(".campo-edad").fadeIn(function() {
      //     document.querySelector(".campo-edad").scrollIntoView({ behavior: 'smooth', block: 'center' });
      
      // });
      
      
      // jQuery(".campo-edad").fadeIn(function() {
      //     jQuery('html, body').animate({
      //         scrollTop: jQuery(".campo-edad").offset().top - (jQuery(window).height() / 2)
      //       }, 1000);
      // });
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  // MÁSCARAS
  // jQuery("#ddd").mask("900");
  jQuery("#edad_1").mask("00");
  jQuery("#edad_2").mask("00");
  jQuery("#hijos_num").mask("9");
  jQuery("#telefone").mask("9000000000");
  // jQuery("#sueldo").mask("0.000.000");
  // jQuery("#cpf").mask("000.000.000-00");
  // jQuery("#cnpj").mask("00.000.000/0000-00");
  
  
  
  
  
  });
  
  
  }(window.jQuery || window.jQuery));
  
  
                  
                  
                  