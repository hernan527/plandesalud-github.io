// cards.js

// Ejemplo: datos que podrías imprimir desde PHP como JSON
// En PHP podrías hacer algo como:
// <script>const cardsData = <?= json_encode($cardsArray) ?>;</script>

// Para este ejemplo lo definimos en JS directamente:
const cardsData = [
  {
    nombre: "SanCor Salud",
    imagenLogo: "./assets/imagenes/cards_header/sancorsalud-logo-medicina-prepaga-planes-de-salud.webp",
    background: "sancorultimosnoviembre.jpg",
    beneficios: [
      "Beneficio Descuento 50%",
      "Plan joven 18-25",
      "Servicios Médicos Propios",
      "0"
    ]
  },
  {
    nombre: "OSDE",
    imagenLogo: "./assets/imagenes/cards_header/osde-logo.webp",
    background: "osdebg.jpg",
    beneficios: [
      "Descuento 30%",
      "Cobertura Nacional",
      "Plan familiar"
    ]
  }
];

// Seleccionamos el contenedor del DOM
const container = document.getElementById('cardsContainer');

// Iteramos el array y construimos el HTML
cardsData.forEach(card => {
  // Crear el contenedor principal
  const cardBox = document.createElement('div');
  cardBox.classList.add('cardBox');
  cardBox.dataset.bg = card.background;

  // Crear el contenido interior
  cardBox.innerHTML = `
    <div class="card">
      <div class="front">
        <a class="logo" onclick="document.getElementById('logo-${card.nombre.replace(/\s+/g, '')}').click(); return false;">    
          <img src="./assets/imagenes/cards_header/${card.imagenLogo}-logo-medicina-prepaga-planes-de-salud.webp" alt="${card.nombre}" title="${card.nombre}" loading="lazy">   
        </a>
        <p>Hover to flip</p>
        <ul class="features">
          ${card.beneficios.map(b => `<li>${b}</li>`).join('')}
        </ul>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>${card.nombre} - Más información</h3>
        <a href="#">Ver más</a>
      </div>
    </div>
  `;

  // Insertar en el DOM
  container.appendChild(cardBox);
});
