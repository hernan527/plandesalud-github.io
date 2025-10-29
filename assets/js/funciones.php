<?php
header("Content-Type: application/javascript");
?>
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


function cambiarValor(valor) {
  let input = document.getElementById('Operadora');
  input.value = valor;
}


function finalizarWhatsapp(formClass) {
  var form = document.querySelector(formClass);
  console.log(form);
    console.log(formClass);

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
  const xhr = new XMLHttpRequest();
  
  xhr.open('POST', 'https://webhook.avalianonline.com.ar/webhook/9eb08e35-97b3-49fa-8706-865151ac2d20');

  xhr.onload = function () {
    if (xhr.status === 200) {
      boton.value = 'ENVIO EXITOSO!';
      loader.style.display = 'none';
      $('#contact-form-whats')[0].reset(); // Resetear el formulario

      // Redirigir a la p芍gina de agradecimiento despu谷s de 3 segundos
      setTimeout(function() {
        window.location.href = '/gracias';
        // window.location.href = '/gracias';
      }, 3000);
    }
    else {
      console.log('Error al enviar los datos');
      // Rehabilitar el bot車n y ocultar el loader en caso de error
      boton.disabled = false;
      loader.style.display = 'none';
    }
  };
  xhr.onerror = function () {
    alert('Error en la conexión');
  };
 xhr.send(JSON.stringify(datawhook));
}

function finalizarCompleto(formClass) {
    var form = document.querySelector(formClass);
      console.log(form);
  var boton = form.querySelector('#submit-completo');
        console.log(boton);

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
      'name': $('#Name').val(),
      'telefone': $('#telefone').val(),
      'email': $('#email').val(),
    };
  
  const xhr = new XMLHttpRequest();
  
  xhr.open('POST', 'https://webhook.avalianonline.com.ar/webhook/9eb08e35-97b3-49fa-8706-865151ac2d20');
  
  xhr.onload = function () {
    if (xhr.status === 200) {
      boton.value = 'ENVIO EXITOSO!';
      loader.style.display = 'none';
      $('#contact-form')[0].reset(); // Resetear el formulario

      // Redirigir a la p芍gina de agradecimiento despu谷s de 3 segundos
      setTimeout(function() {
        window.location.href = '/gracias';
        // window.location.href = '/gracias';
      }, 3000);
    } else {
      console.log('Error en la solicitud: ' + xhr.statusText);
      // Rehabilitar el bot車n y ocultar el loader en caso de error
      boton.disabled = false;
      loader.style.display = 'none';
    }
  };
  xhr.onerror = function () {
    alert('Error en la conexión');
  };
 xhr.send(JSON.stringify(datawh));
}
let allCardsHTML = "";

function renderCards(cardsData) {
  console.log=("iniciada renderCards")
  let allCardsHTML = "";

  for (let index in cardsData) {
    const data = cardsData[index];
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
              ${data.beneficios.map(b => `<li>${b}</li>`).join("")}
            </ul>
            <strong>&#x21bb;</strong>
          </div>
          <div class="back">
            <div class="card-cta-container">
              <a class="card-cta" href="#3" 
                 onclick="document.getElementById('logo-${data.logoAlt.replace(/\s+/g, '')}').click(); return false;">
                ¡PEDIR MI COTIZACIÓN!
              </a>
              <button class="card-cta1 open-modal" data-index="${index}">
                MAS DETALLES
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
  }

  const contenedor = document.getElementById("contenedor-cards");
  contenedor.innerHTML = allCardsHTML;

  const backs = contenedor.querySelectorAll(".back");
  backs.forEach(back => {
    const bgImage = back.closest(".cardBox").dataset.bg;
    back.style.backgroundImage = `url('./assets/imagenes/flyers/${bgImage}.webp')`;
  });

  initModal();
}
// 🔹 FUNCIÓN PARA MANEJAR EL MODAL
// Close the modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

function initModal() {
  const modal = document.getElementById("myModal");
  const modalContent = document.getElementById("modal-content");
  const closeBtn = document.querySelector(".close");
  
  const buttons = document.querySelectorAll(".open-modal");
  


  buttons.forEach(button => {
    button.addEventListener("click", function(e) {
      e.preventDefault();
      
      const index = this.getAttribute("data-index");
      const data = cardsData[index];
      
      // 🔹 CONSTRUIR EL MODAL CON TABS
      const modalHTML = `
        <div class="modal-header-custom">
          <img src="./assets/imagenes/cards_header/${data.logoSrc}-logo-medicina-prepaga-planes-de-salud.webp" 
               alt="${data.logoAlt}" 
               class="modal-logo">
          <div class="modal-title-section">
            <h2>${data.logoAlt}</h2>
            <p class="modal-subtitle">${data.descripcion}</p>
          </div>
        </div>

        <!-- TABS -->
        <div class="modal-tabs">
          <button class="tab-button active" data-tab="planes">
            <span class="tab-icon">📋</span>
            Planes
          </button>
          <button class="tab-button" data-tab="clinicas">
            <span class="tab-icon">🏥</span>
            Clínicas
          </button>
          <button class="tab-button" data-tab="beneficios">
            <span class="tab-icon">⭐</span>
            Beneficios
          </button>
          <button class="tab-button" data-tab="info">
            <span class="tab-icon">ℹ️</span>
            Info
          </button>
        </div>

        <!-- CONTENIDO DE TABS -->
        <div class="modal-tabs-content">
          
          <!-- TAB: PLANES -->
          <div class="tab-content active" id="tab-planes">
            <div class="planes-grid">
              ${data.planes ? data.planes.map(plan => `
                <div class="plan-card">
                  <div class="plan-header">
                    <h3>${plan.nombre}</h3>
                    <div class="plan-precio">${plan.precio}<span>/mes</span></div>
                  </div>
                  <ul class="plan-features">
                    ${plan.caracteristicas.map(c => `<li>✓ ${c}</li>`).join("")}
                  </ul>
                  <button class="btn-cotizar" onclick="document.getElementById('logo-${data.logoAlt.replace(/\s+/g, '')}').click();closeModal();">
                    Cotizar este plan
                  </button>
                </div>
              `).join("") : '<p>Consulta por planes disponibles</p>'}
            </div>
          </div>

          <!-- TAB: CLÍNICAS -->
          <div class="tab-content" id="tab-clinicas">
            <div class="clinicas-list">
              ${data.clinicas ? data.clinicas.map(clinica => `
                <div class="clinica-item">
                  <div class="clinica-icon">🏥</div>
                  <div class="clinica-info">
                    <h4>${clinica.nombre}</h4>
                    <p class="clinica-zona">📍 ${clinica.zona}</p>
                    <p class="clinica-especialidades">${clinica.especialidades}</p>
                  </div>
                </div>
              `).join("") : '<p>Consulta por centros médicos disponibles</p>'}
            </div>
            <div class="clinicas-footer">
              <p>💡 <strong>Tip:</strong> Esta es solo una muestra. Hay cientos de prestadores disponibles según tu zona.</p>
            </div>
          </div>

          <!-- TAB: BENEFICIOS -->
          <div class="tab-content" id="tab-beneficios">
            <div class="beneficios-grid">
              ${data.beneficiosDetallados ? data.beneficiosDetallados.map(beneficio => `
                <div class="beneficio-card">
                  <div class="beneficio-icon">${beneficio.icono}</div>
                  <h4>${beneficio.titulo}</h4>
                  <p>${beneficio.descripcion}</p>
                </div>
              `).join("") : data.beneficios.map(b => `
                <div class="beneficio-card">
                  <div class="beneficio-icon">✓</div>
                  <h4>${b}</h4>
                </div>
              `).join("")}
            </div>
          </div>

          <!-- TAB: INFO -->
          <div class="tab-content" id="tab-info">
            <div class="info-section">
              <div class="info-item">
                <h4>🌎 Cobertura</h4>
                <p>${data.cobertura || 'Consultar cobertura disponible'}</p>
              </div>
              <div class="info-item">
                <h4>📄 Requisitos</h4>
                <p>${data.requisitos || 'Consultar requisitos necesarios'}</p>
              </div>
              <div class="info-item">
                <h4>📞 Contacto</h4>
                <p>Para más información, solicita tu cotización personalizada</p>
                <button class="btn-contacto" onclick="document.getElementById('logo-${data.logoAlt.replace(/\s+/g, '')}').click();closeModal();">
                  Solicitar información
                </button>
              </div>
            </div>
          </div>

        </div>
      `;
      
      modalContent.innerHTML = modalHTML;
      modal.style.display = "block";
      document.body.style.overflow = "hidden";
      
      // 🔹 FUNCIONALIDAD DE TABS
      initTabs();
    });
  });
  
  // Cerrar modal
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
  });
  
  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });
  
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && modal.style.display === "block") {
      modal.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });
}

// 🔹 FUNCIÓN PARA LOS TABS
function initTabs() {
  const tabButtons = document.querySelectorAll(".tab-button");
  const tabContents = document.querySelectorAll(".tab-content");
  
  tabButtons.forEach(button => {
    button.addEventListener("click", () => {
      // Remover active de todos
      tabButtons.forEach(btn => btn.classList.remove("active"));
      tabContents.forEach(content => content.classList.remove("active"));
      
      // Agregar active al clickeado
      button.classList.add("active");
      const tabId = button.getAttribute("data-tab");
      document.getElementById(`tab-${tabId}`).classList.add("active");
    });
  });
}

// 2. Esperamos a que el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
  // 3. Seleccionamos el contenedor
  const grid = document.querySelector('.testimonials-grid');
  
  // 4. Validamos que el contenedor exista
  if (!grid) {
    console.error('No se encontró el contenedor .testimonials-grid');
    return;
  }

  // 5. Construimos el HTML
  let allTestimonialHTML = '';
  
  for (const testimonio of testimonios) {
    allTestimonialHTML += `
      <div class="testimonial-card">
        <div class="rating">${testimonio.rating}</div>
        <p class="testimonial-text">${testimonio.texto}</p>
        <div class="testimonial-author">
          <div class="author-avatar">${testimonio.avatar}</div>
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
});


function moveCarousel(button, direction) {
  const track = button.closest('.carousel').querySelector('.carousel-track');
  const slides = track.querySelectorAll('.carousel-slide');
  const totalSlides = slides.length;
  
  let currentIndex = parseInt(track.getAttribute('data-index')) || 0;
  let newIndex = currentIndex + direction;

  // Ciclo infinito (opcional): si quieres que no se pueda salir del rango, quita esto
  if (newIndex < 0) newIndex = totalSlides - 1;
  if (newIndex >= totalSlides) newIndex = 0;

  track.style.transform = `translateX(-${newIndex * 100}%)`;
  track.setAttribute('data-index', newIndex);
}


