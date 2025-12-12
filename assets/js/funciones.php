<?php
header("Content-Type: application/javascript");
?>

/* ==========================================================================
   1. GESTIÓN DE COOKIES Y UTILIDADES
   ========================================================================== */

function salvaCookies() {
    setCookie('data_lead_formulario_pagina', jQuery('.campo-pagina').val(), 3);
    setCookie('data_lead_Operadora', jQuery('.campo-operadora').val(), 3);
    setCookie('data_lead_idCapitas', jQuery('input[name=idCapitas]:checked').val(), 3);
    setCookie('data_lead_edad_1', jQuery('.campo-edad').val(), 3);
    setCookie('data_lead_edad_2', jQuery('.campo-edad-pareja').val(), 3);
    setCookie('data_lead_hijos_Num', jQuery('.campo-edades-hijos').val(), 3);
    setCookie('data_lead_poseeOS', jQuery('input[name=poseeOS]:checked').val(), 3);
    setCookie('data_lead_sueldo', jQuery('.campo-sueldo').val(), 3);
    setCookie('data_lead_Name', jQuery('.campo-nome').val(), 3);
    setCookie('data_lead_phone', jQuery('.campo-phone').val(), 3);
    setCookie('data_lead_email', jQuery('.campo-email').val(), 3);
}

function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

function cambiarValor(valor) {
    let input = document.getElementById('Operadora');
    if(input) {
        input.value = valor;
    }
}

/* ==========================================================================
   2. ENVÍO DE FORMULARIOS (WHATSAPP Y COMPLETO)
   ========================================================================== */

function finalizarWhatsapp(formClass) {
    var form = document.querySelector(formClass);
    var boton = form.querySelector('#submit');
    var loader = form.querySelector('.loader-whats');

    boton.disabled = true;
    loader.style.display = 'block';

    var datawhook = {
        'formulario_pagina': $('#formulario_pagina_whats').val(),
        'Name': $('#Name_whats').val(),
        'telefone': $('#phoneNumber').val(),
    };

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://webhook.avalianonline.com.ar/webhook/get_data');
    xhr.setRequestHeader('Content-Type', 'application/json');

  xhr.onload = function () {
    if (xhr.status === 200) {
        boton.value = '¡ENVÍO EXITOSO!';
        loader.style.display = 'none';
        $('#contact-form-whats')[0].reset();
        
        // ✅ PRIMERO verifica que haya teléfono
        if (datawhook.telefone && datawhook.telefone.trim() !== '') {
            var conversionData = {
                'send_to': 'AW-17677606372/7397677812',
                'value': 1.0,
                'currency': 'ARS',
                'phone_number': datawhook.telefone // Obligatorio
            };
            
            // Opcional: agrega el nombre si existe
            if (datawhook.Name && datawhook.Name.trim() !== '') {
                conversionData.name = datawhook.Name;
            }
            
            gtag('event', 'conversion', conversionData);
        }
        
        setTimeout(function() {
            window.location.href = '/gracias';
        }, 3000);
    } else {
        console.log('Error al enviar los datos');
        boton.disabled = false;
        boton.value = 'INTENTAR NUEVAMENTE';
        loader.style.display = 'none';
    }
};
    xhr.onerror = function () {
        alert('Error de conexión. Por favor verifique su internet.');
        boton.disabled = false;
        loader.style.display = 'none';
    };
    xhr.send(JSON.stringify(datawhook));
}

function finalizarCompleto(formClass) {
    var form = document.querySelector(formClass);
    var boton = form.querySelector('#submit-completo');
    var loader = form.querySelector('.loader1');
    
    // Guardamos cookies antes de enviar
    salvaCookies();

    boton.disabled = true;
    loader.style.display = 'block';

    var datawh = {
        'formulario_pagina': $('#formulario_pagina').val(),
        'Operadora': $('#Operadora').val(),
        'idCapitas': $('input[name="idCapitas"]:checked').val(),
        'edad_1': $('#edad_1').val(),
        'edad_2': $('#edad_2').val(),
        'hijos_num': $('#hijos_num').val(),
        'poseeOS': $('input[name="poseeOS"]:checked').val(),
        'sueldo': $('#sueldo').val(),
        'name': $('#Name').val(),
        'telefone': $('#phone').val(),
        'email': $('#email').val(),
        'categoriaMono': $('#categoriaMono').val(),
        'aportantesMono': $('#aportantesMono').val()
    };

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://webhook.avalianonline.com.ar/webhook/get_data');
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onload = function () {
        if (xhr.status === 200) {
            boton.value = '¡COTIZACIÓN ENVIADA!';
            loader.style.display = 'none';
            $('#contact-form')[0].reset();
        if (datawh.email || datawh.telefone) {
            var conversionData = {
                'send_to': 'AW-17677606372/7397677812',
                'value': 1.0,
                'currency': 'ARS'
            };
            
            // Campos opcionales (puedes enviarlos o no)
            if (datawh.name && datawh.name.trim() !== '') {
                conversionData.name = datawh.name; // Opcional
            }
            if (datawh.email && datawh.email.trim() !== '') {
                conversionData.email = datawh.email;
            }
            if (datawh.telefone && datawh.telefone.trim() !== '') {
                conversionData.phone_number = datawh.telefone;
            }
            
            gtag('event', 'conversion', conversionData);
        }
 
            setTimeout(function() {
                window.location.href = '/gracias';
            }, 3000);
        } else {
            console.log('Error en la solicitud: ' + xhr.statusText);
            boton.disabled = false;
            loader.style.display = 'none';
        }
    };
    xhr.onerror = function () {
        alert('Error en la conexión');
        boton.disabled = false;
        loader.style.display = 'none';
    };
    xhr.send(JSON.stringify(datawh));
}

/* ==========================================================================
   3. DATOS DE PREPAGAS (HARDCODED DATA)
   ========================================================================== */

const SwissMedicalCelda = [{empresa:'Swiss Medical',bg:'swissmedical',logoSrc:'swissmedical',logoAlt:'Swiss Medical',beneficios: ["Red de prestadores propia","Descuento 40% en Farmacias","Urgencias 24 hs","Atención Online (E-Consultas)","100% Internación","Óptica (1 par/año)","Odontología General"], descripcion:'Excelencia médica y tecnología de avanzada.',planes:[{nombre:'NUBIAL S1',precio:'',caracteristicas:[]},{nombre:'GLOBAL SMG02',precio:'',caracteristicas:[]},{nombre:'GLOBAL S2',precio:'',caracteristicas:[]},{nombre:'GLOBAL SMG20',precio:'',caracteristicas:[]},{nombre:'PREMIUM SMG30',precio:'',caracteristicas:[]},{nombre:'PREMIUM SMG40',precio:'',caracteristicas:[]},{nombre:'PREMIUM SMG50',precio:'',caracteristicas:[]},{nombre:'PREMIUM SMG60',precio:'',caracteristicas:[]},{nombre:'PREMIUM SMG70',precio:'',caracteristicas:[]}],clinicas:[{nombre:'CLINICA Y MATERNIDAD SUIZO ARGENTINA',zona:'CABA',especialidades:'NUBIAL / GLOBAL / PREMIUM'},{nombre:'CLINICA ZABALA',zona:'CABA',especialidades:'NUBIAL / GLOBAL / PREMIUM'},{nombre:'SANATORIO AGOTE',zona:'CABA',especialidades:'NUBIAL / GLOBAL / PREMIUM'},{nombre:'SANATORIO DE LOS ARCOS',zona:'CABA',especialidades:'NUBIAL / GLOBAL / PREMIUM'},{nombre:'Sanatorio Finochietto',zona:'CABA',especialidades:''},{nombre:'Sanatorio Güemes',zona:'CABA',especialidades:''},{nombre:'Sanatorio Mater Dei',zona:'CABA',especialidades:'NUBIAL / GLOBAL / PREMIUM'},{nombre:'Sanatorio Otamendi',zona:'CABA',especialidades:'GLOBAL / PREMIUM'},{nombre:'CLINICA OLIVOS',zona:'GBA Norte',especialidades:'NUBIAL / GLOBAL / PREMIUM'},{nombre:'Sanatorio Las Lomas',zona:'GBA Norte',especialidades:'GLOBAL / PREMIUM'},{nombre:'Sanatorio Trinidad San Isidro',zona:'GBA Norte',especialidades:'GLOBAL / PREMIUM'},{nombre:'Sanatorio General Sarmiento',zona:'GBA Noroeste',especialidades:''},{nombre:'Hospital Universitario Austral',zona:'GBA Noroeste',especialidades:'GLOBAL / PREMIUM'}],beneficiosDetallados:[{icono:'🏥',titulo:'Sanatorios Propios',descripcion:'Acceso a la red de clínicas de primer nivel.'},{icono:'📱',titulo:'Credencial Digital',descripcion:'Gestioná todo desde tu celular.'}]}];

const SanCorSaludCelda = [{empresa:'SanCor Salud',bg:'sancorsalud',logoSrc:'sancorsalud',logoAlt:'SanCor Salud',beneficios: ["Planes Sin Copagos","40% Descuentos en Farmacias","Emergencias y Urgencias","Internación cubierta al 100%.","Medicina Preventiva","100% Ortodoncia h/35 años","Planes Accesibles."], descripcion:'Cuidando tu salud en todo el país.',planes:[{nombre:'F700',precio:'',caracteristicas:[]},{nombre:'F800',precio:'',caracteristicas:[]},{nombre:'1000B',precio:'',caracteristicas:[]},{nombre:'1500B',precio:'',caracteristicas:[]},{nombre:'3000B',precio:'',caracteristicas:[]},{nombre:'4000',precio:'',caracteristicas:[]},{nombre:'4500',precio:'',caracteristicas:[]},{nombre:'Exclusive 5000',precio:'',caracteristicas:[]}],clinicas:[{nombre:'CEMIC',zona:'CABA',especialidades:'Todos los planes'},{nombre:'CLÍNICA BAZTERRICA',zona:'CABA',especialidades:'Todos los planes'},{nombre:'CLÍNICA SANTA ISABEL',zona:'CABA',especialidades:'Todos los planes'},{nombre:'HOSPITAL ALEMÁN',zona:'CABA',especialidades:'Planes Altos'},{nombre:'HOSPITAL BRITÁNICO',zona:'CABA',especialidades:'Todos los planes'},{nombre:'HOSPITAL ITALIANO',zona:'CABA',especialidades:'Planes Altos'},{nombre:'SANATORIO GÜEMES',zona:'CABA',especialidades:'Todos los planes'},{nombre:'SANATORIO MATER DEI',zona:'CABA',especialidades:'Planes Altos'},{nombre:'HOSPITAL AUSTRAL',zona:'GBA Norte',especialidades:'Planes Altos'},{nombre:'SANATORIO LAS LOMAS',zona:'GBA Norte',especialidades:'Planes Altos'},{nombre:'CLÍNICA MODELO MORÓN',zona:'GBA Oeste',especialidades:'Todos los planes'},{nombre:'HOSPITAL SAN JUAN DE DIOS',zona:'GBA Oeste',especialidades:'Todos los planes'},{nombre:'SANATORIO JUNCAL',zona:'GBA Sur',especialidades:'Todos los planes'},{nombre:'SANATORIO BERNAL',zona:'GBA Sur',especialidades:'Planes Altos'}],beneficiosDetallados:[]}];

const MedifeCelda = [{empresa:'Medife',bg:'medife',logoSrc:'medife',logoAlt:'Medife',beneficios: ["Amplia cartilla médica","Telemedicina 24 horas","Gestiones Online","Cobertura Nacional","Asistencia al viajero","Sanatorio Finochietto","Variedad en Planes"], descripcion:'La cobertura que se adapta a vos.',planes:[{nombre:'BRONCE',precio:'',caracteristicas:[]},{nombre:'PLATA',precio:'',caracteristicas:[]},{nombre:'ORO',precio:'',caracteristicas:[]},{nombre:'PLATINUM',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Sanatorio Finochietto',zona:'CABA',especialidades:'Todos los planes'},{nombre:'C.E.M.I.C.',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Clínica Bazterrica',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Británico',zona:'CABA',especialidades:'Oro / Platinum'},{nombre:'Hospital Italiano',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Sanatorio de los Arcos',zona:'CABA',especialidades:'Plata / Oro / Platinum'},{nombre:'Sanatorio Mater Dei',zona:'CABA',especialidades:'Plata / Oro / Platinum'},{nombre:'Hospital Universitario Austral',zona:'GBA Norte',especialidades:'Plata / Oro / Platinum'},{nombre:'Sanatorio Las Lomas',zona:'GBA Norte',especialidades:'Plata / Oro / Platinum'},{nombre:'Sanatorio de la Trinidad',zona:'GBA',especialidades:'Oro / Platinum'}],beneficiosDetallados:[]}];

const OmintCelda = [{empresa:'Omint',bg:'omint',logoSrc:'omint',logoAlt:'Omint',beneficios: ["Red de prestadores propia","Cobertura Amplia y Flexible","Planes Variados","Planes para jovenes","Club de Beneficios Omint","Programas de Prevención","Clínica Odontológica OMINT"], descripcion:'Calidad médica y servicio superior.',planes:[{nombre:'GENESIS 2500',precio:'',caracteristicas:[]},{nombre:'OMINT VOS',precio:'',caracteristicas:[]},{nombre:'GLOBAL 4500',precio:'',caracteristicas:[]},{nombre:'CLASIC 6500',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Clínica Bazterrica',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Clínica del Sol',zona:'CABA',especialidades:'Planes Altos'},{nombre:'Clínica Santa Isabel',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Alemán',zona:'CABA',especialidades:'Plan 8500'},{nombre:'Hospital Británico',zona:'CABA',especialidades:'Desde 4500'},{nombre:'Sanatorio Finochietto',zona:'CABA',especialidades:'Plan 8500'},{nombre:'Sanatorio Mater Dei',zona:'CABA',especialidades:'Desde 4500'},{nombre:'Sanatorio Otamendi',zona:'CABA',especialidades:'Desde 4500'},{nombre:'Hospital Universitario Austral',zona:'GBA Norte',especialidades:'Desde 4500'}],beneficiosDetallados:[]}];

const PrevencionSaludCelda = [{empresa:'Prevencion Salud',bg:'prevencionsalud',logoSrc:'prevencionsalud',logoAlt:'Prevencion Salud',beneficios: ["Planes con y sin copagos","Emergencias medicas","Óptica Digital-con envío","Cobertura nacional","Planes integrales","Odontologia en General","Psicología"], descripcion:'El respaldo de Sancor Seguros.',planes:[{nombre:'A1',precio:'',caracteristicas:[]},{nombre:'A2',precio:'',caracteristicas:[]},{nombre:'A4',precio:'',caracteristicas:[]},{nombre:'A5',precio:'',caracteristicas:[]},{nombre:'A6',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Sanatorio Güemes',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Británico',zona:'CABA',especialidades:'Desde A2'},{nombre:'Hospital Alemán',zona:'CABA',especialidades:'Desde A4'},{nombre:'Sanatorio Mater Dei',zona:'CABA',especialidades:'Desde A4'},{nombre:'Sanatorio Otamendi',zona:'CABA',especialidades:'Desde A4'},{nombre:'CEMIC',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Austral',zona:'GBA Norte',especialidades:'Desde A2'},{nombre:'Sanatorio Las Lomas',zona:'GBA Norte',especialidades:'Desde A2'}],beneficiosDetallados:[]}];

const AvalianCelda = [{empresa:'Avalian',bg:'avalian',logoSrc:'avalian',logoAlt:'Avalian',beneficios: ["45 años de Trayectoria","Atención en todo el país","Cirugía estética 100%","Planes para empresas","Planes que se adaptan a vos","Ortodoncia 100% sin carencia","Médico online"], descripcion:'Cobertura médica cooperativa de primer nivel.',planes:[{nombre:'CERCA AS100',precio:'',caracteristicas:[]},{nombre:'INTEGRAL AS204',precio:'',caracteristicas:[]},{nombre:'INTEGRAL AS200',precio:'',caracteristicas:[]},{nombre:'SUPERIOR',precio:'',caracteristicas:[]},{nombre:'SELECTA',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Hospital Italiano',zona:'CABA',especialidades:'Superior / Selecta'},{nombre:'Hospital Alemán',zona:'CABA',especialidades:'Superior / Selecta'},{nombre:'Sanatorio Finochietto',zona:'CABA',especialidades:'Superior / Selecta'},{nombre:'Hospital Británico',zona:'CABA',especialidades:'Integral / Superior / Selecta'},{nombre:'Sanatorio Güemes',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Sanatorio Anchorena',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Austral',zona:'GBA Norte',especialidades:'Superior / Selecta'},{nombre:'Sanatorio Las Lomas',zona:'GBA Norte',especialidades:'Integral / Superior / Selecta'}],beneficiosDetallados:[]}];

const GalenoCelda = [{empresa:'Galeno',bg:'galeno',logoSrc:'galeno',logoAlt:'Galeno',beneficios: ["Red de prestadores propia","Credencial Digital","Cirugía estética","Habitacion Individual","Emergencias y Urgencias","Internación sin límite","Planes sin copagos"], descripcion:'Infraestructura propia y calidad médica.',planes:[{nombre:'AZUL 220',precio:'',caracteristicas:[]},{nombre:'PLATA 330',precio:'',caracteristicas:[]},{nombre:'ORO 440',precio:'',caracteristicas:[]},{nombre:'ORO 550',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Sanatorio de la Trinidad (Todos)',zona:'CABA/GBA',especialidades:'Todos los planes'},{nombre:'Sanatorio Dupuytren',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Alemán',zona:'CABA',especialidades:'Oro'},{nombre:'Hospital Británico',zona:'CABA',especialidades:'Plata / Oro'},{nombre:'Sanatorio Mater Dei',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Sanatorio Otamendi',zona:'CABA',especialidades:'Plata / Oro'},{nombre:'Hospital Austral',zona:'GBA Norte',especialidades:'Plata / Oro'},{nombre:'Sanatorio Las Lomas',zona:'GBA Norte',especialidades:'Plata / Oro'}],beneficiosDetallados:[]}];

const PremedicCelda = [{empresa:'Premedic',bg:'premedic',logoSrc:'premedic',logoAlt:'Premedic',beneficios: ["Premedic Medical Center","Descuentos continuos","SmileGroup Odontología","Asociate con tu recibo","15 Centros de Atencion al socio","Médico Online","Med. a domicilio sin copago"], descripcion:'Medicina privada al alcance de todos.',planes:[{nombre:'PMO',precio:'',caracteristicas:[]},{nombre:'C-100',precio:'',caracteristicas:[]},{nombre:'200',precio:'',caracteristicas:[]},{nombre:'300',precio:'',caracteristicas:[]},{nombre:'400',precio:'',caracteristicas:[]},{nombre:'500',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Sanatorio Finochietto',zona:'CABA',especialidades:'300 / 400 / 500'},{nombre:'Hospital Alemán',zona:'CABA',especialidades:'400 / 500'},{nombre:'Hospital Británico',zona:'CABA',especialidades:'400 / 500'},{nombre:'Sanatorio Güemes',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Sanatorio Colegiales',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Sanatorio de la Trinidad',zona:'CABA',especialidades:'300 / 400 / 500'}],beneficiosDetallados:[]}];

const DoctoredCelda = [{empresa:'Doctored',bg:'doctored',logoSrc:'doctored',logoAlt:'Doctored',beneficios: ["Atención Personalizada","Amplia Cartilla","Cobertura AMBA","Planes Accesibles"], descripcion:'Salud cerca de tu casa.',planes:[{nombre:'D-1000',precio:'',caracteristicas:[]},{nombre:'D-2000',precio:'',caracteristicas:[]},{nombre:'D-3000',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Sanatorio Colegiales',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Hospital Naval',zona:'CABA',especialidades:'Todos los planes'},{nombre:'Sanatorio Finochietto',zona:'CABA',especialidades:'D-3000'}],beneficiosDetallados:[]}];

const SaludCentralCelda = [{empresa:'Salud Central',bg:'saludcentral',logoSrc:'saludcentral',logoAlt:'Salud Central',beneficios: ["Atención Ágil","Cartilla Directa","Sin Burocracia"], descripcion:'Tu salud en el centro.',planes:[{nombre:'SC30',precio:'',caracteristicas:[]},{nombre:'SC50',precio:'',caracteristicas:[]},{nombre:'SC110',precio:'',caracteristicas:[]}],clinicas:[{nombre:'Red de Clínicas AMBA',zona:'AMBA',especialidades:'Todos los planes'}],beneficiosDetallados:[]}];


/* ==========================================================================
   4. RENDERIZADO DE CARDS Y MODALES
   ========================================================================== */

// Consolidación de datos
const RANGOS = [
    SwissMedicalCelda,
    SanCorSaludCelda,
    MedifeCelda,
    OmintCelda,
    PrevencionSaludCelda,
    AvalianCelda,
    GalenoCelda,
    PremedicCelda,
    DoctoredCelda,
    SaludCentralCelda
];

function cargarCardsData() {
    try {
        // En un futuro, aquí podrías descomentar el fetch al servidor.
        // Por ahora usamos los datos hardcoded.
        const cardsData = RANGOS;
        console.log("✅ Datos cargados correctamente.");
        renderCards(cardsData);
    } catch (error) {
        console.error("❌ Error al procesar los datos:", error);
    }
}

function renderCards(cardsData) {
    let allCardsHTML = "";
    
    // Iteramos sobre los datos. cardsData es un array de arrays.
    for (let index = 0; index < cardsData.length; index++) {
        const cardArray = cardsData[index];
        const data = cardArray[0]; // Obtenemos el objeto de datos
        
        // Creamos el ID seguro para el click (quita espacios)
        const logoId = 'logo-' + data.logoAlt.replace(/\s+/g, '');

        allCardsHTML += `
          <div class="cardBox" data-bg="${data.bg}">
            <div class="card">
              <div class="front">
                <a class="logo">
                  <img src="./assets/imagenes/cards_header/${data.logoSrc}-logo-medicina-prepaga-planes-de-salud.webp" 
                       alt="${data.logoAlt}" 
                       title="${data.logoAlt}" 
                       loading="lazy">
                </a>
                <ul class="features">
                  ${data.beneficios.slice(0, 5).map(b => `<li>${b}</li>`).join("")}
                </ul>
                <strong>&#x21bb;</strong>
              </div>
              <div class="back">
                <div class="card-cta-container">
                  <a class="card-cta" href="#3" 
                     onclick="document.getElementById('${logoId}').click(); return false;">
                    ¡PEDIR MI COTIZACIÓN!
                  </a>
                  <button class="card-cta1 open-modal" data-index="${index}">
                    MÁS DETALLES
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
    }

    const contenedor = document.getElementById("contenedor-cards");
    if(contenedor) {
        contenedor.innerHTML = allCardsHTML;
        
        // Aplicar imágenes de fondo dinámicamente
        const backs = contenedor.querySelectorAll(".back");
        backs.forEach(back => {
            const bgImage = back.closest(".cardBox").dataset.bg;
            back.style.backgroundImage = `url('./assets/imagenes/flyers/${bgImage}.webp')`;
            back.style.backgroundSize = 'cover';
            back.style.backgroundRepeat = 'no-repeat';
        });

        // Inicializar lógica de modales
        initModal(cardsData);
    } else {
        console.warn("Contenedor #contenedor-cards no encontrado.");
    }
}

/* ==========================================================================
   5. LÓGICA DEL MODAL Y TABS
   ========================================================================== */

function closeModal() {
    document.getElementById('myModal').style.display = "none";
    document.body.style.overflow = "auto";
}

function initModal(cardsData) {
    const modal = document.getElementById("myModal");
    const modalContent = document.getElementById("modal-content");
    const closeBtn = document.querySelector(".close");
    const buttons = document.querySelectorAll(".open-modal");
  
    buttons.forEach(button => {
        button.addEventListener("click", function(e) {
            e.preventDefault();
            const index = this.getAttribute("data-index");
            const data = cardsData[index][0];
            const logoId = 'logo-' + data.logoAlt.replace(/\s+/g, '');

            const modalHTML = `
            <div class="modal-header-custom">
              <img src="./assets/imagenes/cards_header/${data.logoSrc}-logo-medicina-prepaga-planes-de-salud.webp" 
                   alt="${data.logoAlt}" 
                   class="modal-logo">
              <div class="modal-title-section">
                <h2>${data.logoAlt}</h2>
                <p class="modal-subtitle">${data.descripcion || 'Cobertura de primer nivel'}</p>
              </div>
            </div>

            <div class="modal-tabs">
              <button class="tab-button active" data-tab="planes">
                <span class="tab-icon">📋</span> Planes
              </button>
              <button class="tab-button" data-tab="clinicas">
                <span class="tab-icon">🏥</span> Clínicas
              </button>
              <button class="tab-button" data-tab="beneficios">
                <span class="tab-icon">⭐</span> Beneficios
              </button>
            </div>

            <div class="modal-tabs-content">
              
              <!-- TAB: PLANES -->
              <div class="tab-content active" id="tab-planes">
                <div class="planes-grid">
                  ${data.planes ? data.planes.map(plan => `
                    <div class="plan-card">
                      <div class="plan-header">
                        <h3>${plan.nombre}</h3>
                      </div>
                      <button class="btn-cotizar" onclick="document.getElementById('${logoId}').click();closeModal();">
                        Cotizar este plan
                      </button>
                    </div>
                  `).join("") : '<p>Consulta por planes disponibles</p>'}
                </div>
              </div>

              <!-- TAB: CLÍNICAS -->
              <div class="tab-content" id="tab-clinicas">
                <div class="filter-container">
                  <input type="text" id="clinicasFilterInput" placeholder="Buscar sanatorio o zona..." onkeyup="filterClinicas(event)" class="filter-input">
                </div>
                <div class="clinicas-list" id="clinicasListContainer">
                  ${data.clinicas ? data.clinicas.map(clinica => `
                    <div class="clinica-item">
                      <div class="clinica-icon">🏥</div>
                      <div class="clinica-info">
                        <h4>${clinica.nombre}</h4>
                        <p class="clinica-zona">📍 ${clinica.zona}</p>
                        <p class="clinica-especialidades">${clinica.especialidades}</p>
                      </div>
                    </div>
                  `).join("") : '<p>Consulta por cartilla disponible</p>'}
                </div>
              </div>

              <!-- TAB: BENEFICIOS -->
              <div class="tab-content" id="tab-beneficios">
                <div class="beneficios-grid">
                   ${data.beneficios.map(b => `
                    <div class="beneficio-card">
                      <div class="beneficio-icon">✓</div>
                      <h4>${b}</h4>
                    </div>
                  `).join("")}
                </div>
              </div>

            </div>
            `;
          
            modalContent.innerHTML = modalHTML;
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
            initTabs();
        });
    });
  
    if(closeBtn){
        closeBtn.addEventListener("click", closeModal);
    }
  
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
}

function initTabs() {
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabContents = document.querySelectorAll(".tab-content");
    
    tabButtons.forEach(button => {
        button.addEventListener("click", () => {
            tabButtons.forEach(btn => btn.classList.remove("active"));
            tabContents.forEach(content => content.classList.remove("active"));
            
            button.classList.add("active");
            const tabId = button.getAttribute("data-tab");
            document.getElementById(`tab-${tabId}`).classList.add("active");
        });
    });
}

function filterClinicas(event) {
    const filterText = event.target.value.toLowerCase();
    const container = document.getElementById('clinicasListContainer');
    if (!container) return;

    const clinicaItems = container.getElementsByClassName('clinica-item');
    for (let i = 0; i < clinicaItems.length; i++) {
        const item = clinicaItems[i];
        const itemText = item.textContent.toLowerCase();
        if (itemText.includes(filterText)) {
            item.style.display = "flex";
        } else {
            item.style.display = "none";
        }
    }
}


/* ==========================================================================
   6. INICIALIZACIÓN (CON TUS FOTOS)
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Iniciar carga de tarjetas
    cargarCardsData();

    // 2. Datos de testimonios (Aquí pon tus URLs reales)
    const testimonios = [
        { 
            rating: "★★★★★", 
            texto: "¡Excelente atención! Me ayudaron a elegir el plan perfecto para mi familia y ahorré mucho dinero.", 
            nombre: "Ana Martínez", 
            cargo: "CEO, TechSolutions",
            avatar: "./assets/imagenes/avatar/avatar.png" // Tu ruta real
        },
        { 
            rating: "★★★★★", 
            texto: "La atención al cliente es excepcional. Siempre están dispuestos a ayudar y resolver cualquier duda en minutos.", 
            nombre: "Carlos Ruiz", 
            cargo: "Freelancer",
            avatar: "./assets/imagenes/avatar/avatar1.png" // Tu ruta real
        },
        { 
            rating: "★★★★☆", 
            texto: "Desde que uso esta plataforma, mi productividad ha aumentado un 40%. Es intuitiva y muy eficiente.", 
            nombre: "Laura Sánchez", 
            cargo: "Directora de Marketing",
            avatar: "./assets/imagenes/avatar/avatar2.png" // Tu ruta real
        }
    ];

    // 3. Seleccionamos el contenedor
    const grid = document.querySelector('.testimonials-grid');
  
    // 4. Validamos que el contenedor exista
    if (grid) {
        let allTestimonialHTML = '';
        
        for (const testimonio of testimonios) {
            allTestimonialHTML += `
              <div class="testimonial-card">
                <div class="rating">${testimonio.rating}</div>
                <p class="testimonial-text">"${testimonio.texto}"</p>
                <div class="testimonial-author">
                  <div class="author-avatar"> 
                    <img src="${testimonio.avatar}" 
                         alt="Foto de ${testimonio.nombre}" 
                         onerror="this.onerror=null; this.src='https://placehold.co/150x150/9CA3AF/ffffff?text=${testimonio.nombre.charAt(0)}';"
                         loading="lazy"
                    >
                  </div>
                  <div class="author-info">
                    <h4>${testimonio.nombre}</h4>
                    <p>${testimonio.cargo}</p>
                  </div>
                </div>
              </div>
            `;
        }

        // 6. Inyectamos el HTML
        grid.innerHTML = allTestimonialHTML;
    } else {
        console.warn('No se encontró el contenedor .testimonials-grid');
    }
});