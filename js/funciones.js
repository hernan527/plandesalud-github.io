var edad1 = 0;
var edad2 = 0;
var num_adultos = 1;

let numhijo1 = 0;
let numhijo2 = 0;
let edadID1 = '';
let edadID2 = '';
let hijoId = '';
let hijo2Id = '';
let edadID = 0 ;

var tipoAsoc = $('#tipo').val();;
let grupoFam = 1 ;
let hijos_ID = '';



window.onload = function(){
    inicializar();
}


function inicializar() {
  var formDat = new FormData();
      numHijos = "0";
      grupoFam = "1";
      
      let sueldo = "0";
      let cantAport = "0";
      formDat.append("edad_1","1P");
      formDat.append("edad_2","0");
      formDat.append("hijo_1","0");
      formDat.append("hijo_2","0");
      formDat.append("numHijo_1","0");
      formDat.append("numHijo_2","0");


   var result = new XMLHttpRequest( );
    result.open( 'POST', 'consulta.php' );
    result.onload = function( ){
    var results = JSON.parse(result.responseText);
       console.log(result.responseText);
      valorPlan(results,sueldo,cantAport);
       
  }
 result.send(formDat);
}


function finalizar() {

 var form = document.querySelector('form');
    var boton = document.querySelector('[type=submit]');
    form.onsubmit = e => {
      boton.disabled = true;

  
      var formData = new FormData();
      tipoAsoc = $('#tipo').val();
     
      edad1 = $('#edad_1').val();
      edad2 = $('#edad_2').val();
      
      productID( $('#edad_1').val() , tipoAsoc , 'titular');
      productID( $('#edad_2').val() , tipoAsoc , 'conyuge');



  
      numHijos = $('#numkids').val();
      grupoFam = 0;
      
      

      grupoFamiliar(edad1,edad2,numHijos);      
      
      
      

      let sueldo = $('#sueldo').val();
      let cantAport = $('#cantAport').val();



    
      formData.append("edad_1",edadID1);
      formData.append("edad_2",edadID2);
      formData.append("hijo_1",hijoId);
      formData.append("hijo_2",hijo2Id);
      formData.append("numHijo_1",numhijo1);
      formData.append("numHijo_2",numhijo2);
      console.log('Edad Titular:' + edad1);

      console.log('Edad Conyuge:' + edad2); 

      console.log( 'ID edad Titular:' + edadID1);
      console.log('ID edad Conyuge:' + edadID2);

      console.log('ID edad primer hijo:' + hijoId );
      console.log('ID edad segundo hijo:' + hijo2Id );


      console.log('Primer hijo en # nmúmeros:' + numhijo1 );
      console.log('Siguientes hijos en # nmúmeros:' + numhijo2 );
      console.log('Grupo Familiar:' + grupoFam);
      console.log('Cantidad de adultos:' + num_adultos );

      console.log('Cantidad de hijos:' + numHijos);

      console.log('Cantidad Aportantes al Monotributo:' + cantAport);
      console.log('Sueldo Bruto:' + sueldo);

     e.preventDefault();
    var result = new XMLHttpRequest( );
    result.open( 'POST', 'consulta.php' );
    result.onload = function( ){
        boton.disabled = false; 
              console.log(result.responseText);
        var results = JSON.parse(result.responseText);
   console.log(result.responseText);
valorPlan(results,sueldo,cantAport);

        form.reset();
    }
    result.send(formData);
}
}


function grupoFamiliar (age0,age1,kids) {
  if ( age1 > 0 && kids >= 1 ) {
    num_adultos = 2;
    numhijo1 = 1;
    numhijo2 = kids - 1 ;
  } else if ( age1 = 0 && kids >= 1 ) { 
    numhijo1 = 1;
    numhijo2 = kids - 1 ;
  } else if ( kids == 0 ) {
    numhijo1 = 0;
    numhijo2 = 0 ;
  }grupoFam = parseInt(num_adultos) + parseInt(kids);
  }


function valorPlan(resultado,haberes,cantAportMOno) {
let precio_adultos = {} ;
let precio_hijos = {} ;
let valor_plan =  {} ;
let results = resultado;
let precio1Hijo = results[0][0];
let precio2Hijo = results[1][0];
let precioTitular = results[2][0];
let preciosConyuge = results[3][0];

let sueldoBruto = haberes;
let cantAport = cantAportMOno;

let calAport = 0;
let aporMono = 0;



let hijo1Id = '';

let nombrePlan = '';

let otrosBenPrecio = [{col_1: 1, col_2: 694, col_3: 515, col_4: 273, col_5: 74, col_6: 168, col_7: 39, col_8: 23, col_9: 390},{col_1: 2, col_2: 1384, col_3: 1025, col_4: 545, col_5: 145, col_6: 335, col_7: 78, col_8: 46, col_9: 780},{col_1: 3, col_2: 1911, col_3: 1373, col_4: 818, col_5: 220, col_6: 335, col_7: 117, col_8: 69, col_9: 1170},{col_1: 4, col_2: 2436, col_3: 1717, col_4: 1090, col_5: 292, col_6: 335, col_7: 157, col_8: 92, col_9: 1560},{col_1: 5, col_2: 2961, col_3: 2064, col_4: 1363, col_5: 366, col_6: 335, col_7: 196, col_8: 114, col_9: 1950},{col_1: 6, col_2: 3483, col_3: 2407, col_4: 1635, col_5: 437, col_6: 335, col_7: 234, col_8: 137, col_9: 2340}];
let segVidaPrecio = [{col_1: '18 A 45', col_2: 284},{col_1: '46 A 54', col_2: 443},{col_1: '55 A 59', col_2: 489}];
let aportMon = 1176;


if( edad2 > 17 ) {
precio_adultos = Object.entries(preciosConyuge).reduce((acc, [key, value]) => // matrimonio
          ({ ...acc, [key]: parseInt((acc[key]) || 0) + parseInt(value) })
         , { ...precioTitular});
}

if( numHijos > 1 ) {  
precio_hijos = Object.entries(precio2Hijo).reduce((acc, [key, value]) =>  // dis hijos o mas
          ({ ...acc, [key]: parseInt((acc[key]) || 0) + parseInt(value*numhijo2) })
        , { ...precio1Hijo});
}

if( numHijos == 1 ) {
valor_plan =  Object.entries(precio1Hijo).reduce((acc, [key, value]) => 
          ({ ...acc, [key]: parseInt((acc[key]) || 0) + parseInt(value) })
, { ...precio_adultos});
} else if ( numHijos > 1 ) {
valor_plan =  Object.entries(precio_hijos).reduce((acc, [key, value]) => 
          ({ ...acc, [key]: parseInt((acc[key]) || 0) + parseInt(value) })
, { ...precio_adultos});
} else {
valor_plan = precioTitular;
}

console.log('%cPrecio Titular','color:orange');     
console.log(precioTitular);
console.log('%cPrecio Conyuge','color:orange');  
console.log(preciosConyuge);
console.log('%cPrecio Primer Hijo','color:orange'); 
console.log(precio1Hijo);
console.log('%cPrecio Segundo Hijo y siguientes','color:orange'); 
console.log(precio2Hijo);
console.log('%cCantidad del segundo y siguientes hijos','color:red');
console.log(numhijo2);   
console.log('%cPrecio Adultos','color:green');
console.log(precio_adultos);

console.log('%cValor Plan','color:blue');

// console.log(valor_plan);
precio = valor_plan;

console.log(precio);
console.log('%cPrecio','color:blue');
parseR(precio);


// let aportMon = 1176;
// let result = [];










if ( tipoAsoc === "D") { 
    calAport = sueldoBruto * 0.071;
   }

}


function productID( edad, tipo , miembro, numHijos ) {
   let edadID = '';
   let grupoSigla = '';

  if ( numHijos > 0 ) { grupoSigla = 'GF' };
  if ( 18 <= edad && edad <= 25 ) {
    edadID = '1' + tipo;
    hijoId = '1H' + tipo;
    hijo2Id = '2H' + tipo;
    } else if ( 26 <= edad && edad <= 29 ) {
    edadID = '2' + tipo;
    hijoId = '1H' + tipo;
    hijo2Id = '2H' + tipo;
    } else if ( 30 <= edad && edad <= 35 ) {
    edadID = '3' + tipo;
    hijoId = '1H' + tipo;
    hijo2Id = '2H' + tipo;
    } else if ( 36 <= edad && edad <= 39 ) {
    edadID = '4' + tipo;
    hijoId = '1HH' + tipo;
    hijo2Id = '2HH' + tipo;
    } else if ( 40 <= edad && edad <= 45 ) {
    edadID  = '5' + tipo;
    hijoId = '1HH' + tipo;
    hijo2Id = '2HH' + tipo;
    } else if ( 46 <= edad && edad <= 49 ) {
    edadID = '6' + tipo;
    hijoId = '1HH' + tipo;
    hijo2Id = '2HH' + tipo;
    } else if ( 50 <= edad && edad <= 59 ) {
    edadID = '7' + tipo;
    hijoId = '1HH' + tipo;
    hijo2Id = '2HH' + tipo;

    } if ( miembro === 'titular' ) { edadID1 = edadID + grupoSigla } else { edadID2 = edadID + grupoSigla}; 
};




   

function parseR(precio) {    
    resultsReady = true;
    parseResult(precio);
    $('#footer').removeAttr('style');
  }

function parseResult(precio){
let rowCount = 0;
let rowCountPmo = 0;
let rowCountBas = 0;
let rowCountIni = 0;
let rowCountSup = 0;
let rowCountPre = 0;
let resHTML = '';
let resHTML_mobile = '';
let arrCount = -1;
let tmpHTML = ''; // declaro letiable filas con resultados individuales de escritorio, sin asignar valor

let id_res = '';
let id_res_mobile = '';

let promoHTML = '';
let promoGIF = '';
let row_pos = '';
let colorPlan ='';

let otrosBen = 0;
let segVida = 0;

let nivelCobertura = 0;
let  stars_rating = 3 ;
console.log(precio);
console.log(otrosBen);
console.log(otrosBen);
otrosBenPrecio = [{col_1: 1, col_2: 694, col_3: 515, col_4: 273, col_5: 74, col_6: 168, col_7: 39, col_8: 23, col_9: 390},{col_1: 2, col_2: 1384, col_3: 1025, col_4: 545, col_5: 145, col_6: 335, col_7: 78, col_8: 46, col_9: 780},{col_1: 3, col_2: 1911, col_3: 1373, col_4: 818, col_5: 220, col_6: 335, col_7: 117, col_8: 69, col_9: 1170},{col_1: 4, col_2: 2436, col_3: 1717, col_4: 1090, col_5: 292, col_6: 335, col_7: 157, col_8: 92, col_9: 1560},{col_1: 5, col_2: 2961, col_3: 2064, col_4: 1363, col_5: 366, col_6: 335, col_7: 196, col_8: 114, col_9: 1950},{col_1: 6, col_2: 3483, col_3: 2407, col_4: 1635, col_5: 437, col_6: 335, col_7: 234, col_8: 137, col_9: 2340}];
segVidaPrecio = [{col_1: '18 A 45', col_2: 284},{col_1: '46 A 54', col_2: 443},{col_1: '55 A 59', col_2: 489}];
for ( j in precio ) {


let empresaPlan = [j][0];

let empresa = empresaPlan.substring(0,6);
let plan_nombre = empresaPlan.substring(6);
console.log('Precio del PLan ' + empresa + ': ' + plan_nombre);
console.log(precio[j]);
console.log('Otros beneficios para Plan ' + empresa + ': ' + plan_nombre);
console.log(otrosBen);
console.log('Seguro de Vida');
console.log(segVida);
console.log()
console.log('Valor Final' + empresa + ': ' + plan_nombre);

let valor_total_plan = parseInt(precio[j]) + parseInt(otrosBen) + parseInt(segVida) ;
console.log(valor_total_plan);
console.log()
if ( edad1 >= 18 && edad1 <= 45 ) {
        segVida = segVidaPrecio[0]['col_2']
    } else if ( edad1 >= 46 && edad1 <= 54 ) {
        segVida = segVidaPrecio[1]['col_2']
    } else {
        segVida = segVidaPrecio[2]['col_2']
};

if ( plan_nombre === "6000" || plan_nombre === "5000") {
            otrosBen = otrosBenPrecio[grupoFam - 1]['col_2'] ;                                           
    } else if ( plan_nombre === "1500B" ) {
        if ( edad1 > 35 || edad2 > 35 )  {
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_5'];
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_6'];
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_9'];    
        };
    } else if ( plan_nombre === "1000B" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_5'];
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_6'];
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_9'];   
        };
    } else if ( plan_nombre === "1500Bcc" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_5'];
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_6'];
            otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_9']; 
        };
    } else if ( plan_nombre === "1000Bcc" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_5'];
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_6'];
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_9'];   
        };
    } else if ( plan_nombre === "3000B" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_5'];
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_6'];
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_9'];  
        };
    } else if ( plan_nombre === "3500" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_2'];                                          
        };
    } else if ( plan_nombre === "4500" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_2'];                                           
        };
    } else if ( plan_nombre === "4000" ) {
        if ( edad1 > 35 || edad2 > 35 ) {
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_2'];                                          
        };
    } else {
           otrosBen = otrosBen + otrosBenPrecio[grupoFam - 1]['col_9'];                                          
    };
// if(precio[j]['ver_detalles'] != 'no_mostrar'){
//       arrCount++;
//       if(precio[j]['id_tipoCobertura'] == 1){
//         rowCountPmo++;
//         row_pos = rowCountPmo;
//       }else if(precio[j]['id_tipoCobertura'] == 2){
//         rowCountBas++;
//         row_pos = rowCountBas;
//       }else if(precio[j]['id_tipoCobertura'] == 3){
//         rowCountIni++;
//         row_pos = rowCountIni;
//       }else if(precio[j]['id_tipoCobertura'] == 4){
//         rowCountSup++;
//         row_pos = rowCountSup;
//       }else {
//         rowCountPre++;
//         row_pos = rowCountPre;
//       }
//       if(precio[j]['id_tipoCobertura'] == 1){
//         nivelCobertura = 'PMO';
//         id_res = 'res_pmo';
//         id_res_mobile = 'res_pmo_mobile';      // Plan Médico Obligatorio  // elegir letras de acuerdo a algo represntativo 
//       }else if(precio[j]['id_tipoCobertura'] == 2){        // cada fila sera acomodada en la pestaña correspondiente según tipo de cobertura
//         nivelCobertura = 'BAS';
//         id_res = 'res_bas';
//         id_res_mobile = 'res_bas_mobile';                            // Básica
//       }else if(precio[j]['id_tipoCobertura'] == 3){        // cada fila tendra un id distinto concatenado esto con la posicion
//         nivelCobertura = 'INI'
//         id_res = 'res_ini';
//         id_res_mobile = 'res_ini_mobile';                              // Inicial
//       }else if(precio[j]['id_tipoCobertura'] == 4){
//         nivelCobertura = 'SUP';
//         id_res = 'res_sup';
//         id_res_mobile = 'res_sup_mobile';                               // Superior
//       }else{
//         nivelCobertura = 'PRE';
//         id_res = 'res_pre';             // 5      
//         id_res_mobile = 'res_pre_mobile';          // Premium
//       }   

     if ( plan_nombre === "1000B" ) {
          colorPlan = '#df9000' ;
     } else if ( plan_nombre === "1000Bcc" ){
          colorPlan = '#df9000' ;
     } else if ( plan_nombre === "1500B" ) {
          colorPlan = '#368969' ;     
     } else if ( plan_nombre === "1500Bcc" ) {
          colorPlan = '#368969';
     } else if ( plan_nombre === "3000B" ) {
          colorPlan = '#0c37b3' ;
     } else if ( plan_nombre === "3500" ) {
          colorPlan = '#2897d7' ;
     } else if ( plan_nombre === "4000" ) {
          colorPlan = '#0846f7';
     } else if ( plan_nombre === "4500" ) {
          colorPlan = '#12009f';
     } else if ( plan_nombre === "5000" ) {
          colorPlan = '#202020';
     } else if ( plan_nombre === "6000" ) {
          colorPlan = '#202020';
     } else if ( plan_nombre === "700A" ) {
          colorPlan = '#bfd807';
     } else if ( plan_nombre === "800V" ) {
          colorPlan = '#22b30c';
     } else {
          colorPlan = '';
     }

//      if(precio[j]['id_tipoCobertura'] == 1){                // Plan Médico Obligatorio  // elegir letras de acuerdo a algo represntativo 
//         stars_rating ='<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>';
//       }else if(precio[j]['id_tipoCobertura'] == 2){        // cada fila sera acomodada en la pestaña correspondiente según tipo de cobertura
//         stars_rating ='<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>';                           // Básica
//       }else if(precio[j]['id_tipoCobertura'] == 3){        // cada fila tendra un id distinto concatenado esto con la posicion
//        stars_rating ='<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>';                            // Inicial
//       }else if(precio[j]['id_tipoCobertura'] == 4){
//         stars_rating ='<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:gray"></span>';                             // Superior
//       }else{
//         nivelCobertura = 'PRE';
//        stars_rating ='<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>'
//                     + '<span class="fa fa-star" style="color:orange"></span>';         // Premium
//       }

//       if ( edad2 > 0 ) {
//          num_adultos = 2;
//       } else {
//          num_adultos = 1;
//       }
       
resHTML_left_col =  '<div class="left-column col-md-12">'
          + '<div class="container">'
          + '<div class="icon_person">'
          + '<span class="notify-badge"><strong>' + num_adultos + '</strong></span>'
          + '<img src="./assets/img/icons/2x/outlineblack_36dp_tb.png" />'
          + '</div>'
          + '<div class="icon_person">'
          + '<span class="notify-badge">' + numHijos + '</span>'
          + '<img src="assets/img/icons/2x/outlineblack_24dp_tb.png" />'
          + '</div>'
          + '<div class="icon_person">'
          + '</div>'
          + '</div>'
          + '</div>'
          + '</div>';

resHTML_head = '<div class="wrapper gx-4" style="border-style:solid;border-width: 1px;border-color: gray;height: 70px;margin-bottom: 10px;box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2)"\>'
          + '<div class="row">'
          + '<ul class="nav nav-tabs" id="lista_coberturas">'
          +'<li id="tabPol1" style="width:15%;">'
          + '<a onclick="toggle_rp_classic(1);">'
          + '<h1 class="heading"></h1>'
          + '<p id="desde_pmo"></p>'
          + '</a>'
          + '</li>'
          + '<li id="tabPol2" style="width:15%;"  class="active">'
          + '<a onclick="toggle_rp_classic(2);">'
          + '<h1 class="heading"></h1>'
          + '<p id="desde_bas"></p>'
          + '</a>'
          + '</li>'
          + '<li id="tabPol3" style="width:15%;">'
          + '<a onclick="toggle_rp_classic(3);">'
          + '<h1 class="heading"></h1>'
          + '<p id="desde_ini"></p>'
          + '</a>'
          + '</li>'
          + '<li id="tabPol4" style="width:15%;">'
          + '<a onclick="toggle_rp_classic(4);">'
          + '<h1 class="heading"></h1>'
          + '<p id="desde_sup"></p>'
          + '</a>'
          + '</li>'
          + '<li id="tabPol5" style="display:15%;">'
          + '<a onclick="toggle_rp_classic(5);">'
          + '<h1 class="heading"></h1>'
          + '<p id="desde_pre"></p>'
          + '</a>'
          + '</li>'
          + '</ul>'
          + '</div>'
          + '</div>'
          + '<div class="wrapper gx-4" style="border-style:solid;border-width: 1px;border-color: gray;height: 20px;margin-bottom: 10px;box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);display: flex;"\>'
          + '<div class="col" style="width:25%">'
          + '<p>Empresa</p>'
          + '</div>'
          + '<div class="col" style="width:25%">'
          + '<p>Beneficios</p>'
          + '</div>'                
          + '<div class="col" style="width:25%">'
          + '<p id="copago_descuento">Clinicas</p>'
          + '</div>'
          + '<div class="col" style="width:25%">'
          + '<p>Precio</p>'
          + '</div>'
          + '</div>';

tmpHTML =  '<div class="row row-1" style="height:100%" id="' + nivelCobertura + 'resultRow' + row_pos + '">'
          + '<div class="col-xl-3 col-lg-2 px-0" style="width:25%;padding:10px">'
          + '<div style="z-index:1;height:30px;padding-top:0.2em;padding-bottom:0.2em;padding-right :10px;color:white;text-indent:10px;font-size:14px;border-top-left-radius: 10px;position:absolute;border-style:none;background-color:' + colorPlan +  ';margin-top: 7px;margin-left: -5px;"><strong> PLAN '+ plan_nombre +  '</strong></div>'
          + '<div style="z-index:1;height:8px;;width:5px;border-bottom-left-radius: 5px;position:absolute;bborder-bottom-left-radius: 5px;border-left-style:solid;border-bottom-style:solid;border-width:2px;border-color:' + colorPlan +  ';background-color:gray;margin-top: 37px;margin-left: -5px;"></div>'        
          + '<img style="margin:0px auto;margin-top:60px;margin-left10px" class="card-img-top" src="assets/img/logo/coberturas/sancorsalud.png" alt="Card image cap">'
          + '</div>'
          + '<div class="container col-xl-6 col-lg-6 px-0" style="width:50%;">'
          + '<table>'        
          + '<div class="caption center block">' + nivelCobertura + '</div>'        
          + '<tr>'
          + '<td>' + nivelCobertura + '</td>'
          + '<td>' + nivelCobertura + '</td>'
          + '</tr>'
          + '<tr>'
          + '<td>a</td>'
          + '<td>a</td>'
          + '</tr>'
          + '<tr>'
          + '<td>' + nivelCobertura + '</td>'
          + '<td>' + nivelCobertura + '</td>'
          + '</tr>'
          + '</table>' 
          + '<div class="row">'
          + '<div class="col-md-6 col-sm-6">ss</div>'
          + '<div class="col-md-6 col-sm-6">ss</div>'
          + '</div>'
          + '<div class="row">'
          + '<div class="col-md-6 col-sm-6">ss</div>'
          + '<div class="col-md-6 col-sm-6">ss</div>'
          + '</div>'   
          + '<div class="row">'
          + '<div class="col-md-6 col-sm-6">ss</div>'
          + '<div class="col-md-6 col-sm-6">ss</div>'
          + '</div>'   
          + '<div class="row"></div>'       
          + '</div>'
          + '<div class="col-xl-4 center block" style="padding:0px;width:25%;align-items: center;display:flex">'
          + '<div class="container-fluid ">'
          + '<div class="col-12">' + stars_rating + '</div>'
          + '<div class="row justify-content-md-center  justify-content-sm-center">'
          + '<div class="col-md-auto col-sm-auto" ><strong style="font-size:28px">' +valor_total_plan +'</strong>/mes</div>'
          + '<br>'
          + '</div>'
          + '<div class="row justify-content-md-center   justify-content-sm-center" >'
          + '<div class="col-md-auto col-sm-auto">'
          + '<button style="width:0 auto"" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cotizar">Cotizar</button>'
          + '</div>'
          + '</div>'
          + '<div class="row justify-content-md-center  justify-content-sm-center" >'
          + '<div class="col-md-auto col-sm-auto">'
          + '<p>ver de talle</p>'
          + '</div>'
          + '</div>'
          + '</div>'
          + '</div>';

tmpHTML_mobile =  '<div class="filter-top" style="height: 27%;display:flex;">'
          + '<div style="width:50%;float:left;">'
          + '<div style="z-index:1;height:30px;padding-top:0.1em;padding-bottom:0.2em;padding-right :10px;color:white;text-indent:10px;font-size:14px;border-top-left-radius: 10px;position:absolute;border-style:none;background-color:' + colorPlan +  ';margin-top: 0px;margin-left: -5px;"><strong> PLAN '+ plan_nombre +  '</strong></div>'
          + '<div style="z-index:1;height:8px;width:5px;border-bottom-left-radius: 5px;position:absolute;border-bottom-left-radius: 5px;border-left-style:solid;border-bottom-style:solid;border-width:2px;border-color:' + colorPlan +  ';background-color:gray;margin-top: 30px;margin-left: -5px;"></div>'        
          + '<img style="margin:0px auto;align-items:center;margin-left: 10px;margin-top:30px" class="card-img-top" src="assets/img/logo/coberturas/sancorsalud.png" alt="Card image cap">'
          +'</div>'
          + '<div style="width:50%;float:right;margin-top:30px">'
          + '<strong style="font-size:28px">' +valor_total_plan+ '</strong>/mes</div>'
          + '</div>'
          + '<div style="height: 12%">dos</div>'
          + '<div style="height: 33%">'
          + '<div class="container container-fluid">'
          + '<table>'         
          + '<div class="caption center block">' + nivelCobertura + '</div>'
          + '<tr>'
          + '<td>' + nivelCobertura + '</td>'
          + '<td>' + nivelCobertura + '</td>'
          + '</tr>'
          + '<tr>'
          + '<td>a</td>'
          + '<td>a</td>'
          + '</tr>'
          + '<tr>'
          + '<td>' + nivelCobertura + '</td>'
          + '<td>' + nivelCobertura + '</td>'
          + '</tr>'         
          + '</table>' 

          + '</div>'
          + '</div>'
          + '<div style="display:flex">'
          + '<button style="margin: 0 auto;" type="button" class="btn-box-movil" data-bs-toggle="modal" data-bs-target="#cotizar">Cotizar</button>'
          + '</div>'
          + '<div style="height: 10%">'
          + '<a >ver de talle</a>'
          + '</div>';

resHTML += '<div class=""  style="background-color:white;height:173px;padding:0px;box-shadow: 2px 2px 2px 3px rgba(0, 0, 0.2, 0.2);margin:0px;">' + tmpHTML + '</div><div class="spacer" style="height:20px"></div>';   // asigno un valor a la variable resHTML;

resHTML_mobile += '<div class="box " id="' + nivelCobertura + 'resultRow' + row_pos + '" style="background-color:white;margin: 5px;padding: 5px;font-size: 12px";>' + tmpHTML_mobile + '</div><div class="spacer" style="height:20px"></div>';

  $('#uno').html(resHTML_left_col);
  
  $('#filter_left').html(resHTML_left_col);

  $('#_head_table #_headDetails_QuoteResults_classic').html(resHTML_head);

  $('#_results_table #_resultDetails_QuoteResults_classic').html(resHTML);
  $('#results_mobile').html(resHTML_mobile);  
  }
}