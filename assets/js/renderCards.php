<?php
header("Content-Type: application/javascript");
?>
// const cardsData = [ {empresa:'SanCor Salud',bg:'sancorsalud',logoSrc:'sancorsalud',logoAlt:'SanCor Salud',beneficios: [], descripcion:'',planes:[{nombre:'F700',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'F800',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'1000B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'1500B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'3000B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'4000B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'4500B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'5000B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'6000B',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''},]
// const cardsData = []
// const cardsData = [{empresa:'Omint',bg:'omint',logoSrc:'omint',logoAlt:'Omint',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const cardsData = [{empresa:'Galeno',bg:'galeno',logoSrc:'galeno',logoAlt:'Galeno',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData6 = [{empresa:'Prevencion Salud',bg:'prevencion',logoSrc:'prevencionsalud',logoAlt:'Prevencion Salud',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData7 = [{empresa:'Swiss Medical',bg:'swissmedical',logoSrc:'swissmedical',logoAlt:'Swiss Medical',beneficios: [], descripcion:'',planes:[{nombre:'S1',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG02',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'S2',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG20',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG30',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG40',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG50',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG60',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'SMG70',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData8 = [{empresa:'Avalian',bg:'avalian',logoSrc:'avalian',logoAlt:'Avalian',beneficios: [], descripcion:'',planes:[{nombre:'Cerca AS100',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'Integral AS204',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'Integral AS200',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'Suprerior AS300',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'Select AS400',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'Select AS500',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData9 = [{empresa:'Premedic',bg:'premedic',logoSrc:'premedic',logoAlt:'Premedic',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData10 = [{empresa:'Doctored',bg:'doctored',logoSrc:'doctored',logoAlt:'Doctored',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData11 = [{empresa:'Salud Central',bg:'saludcentral',logoSrc:'saludcentral',logoAlt:'Salud Central',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const  cardsData = [{empresa:'Cristal',bg:'cristal',logoSrc:'cristal',logoAlt:'Cristal',beneficios: [], descripcion:'',planes:[{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']},{nombre:'',precio:'',caracteristicas:['caracteristica1','caracteristica2','caracteristica2','caracteristica4']}],clinicas:[{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''},{nombre:'',zona:'',especialidades:''}],beneficiosDetallados:[{icono:'🏥',titulo:'',descripcion:''},{icono:'🚑',titulo:'',descripcion:''},{icono:'💊',titulo:'',descripcion:''},{icono:'🔬',titulo:'',descripcion:''},{icono:'👶',titulo:'',descripcion:''},{icono:'🦷',titulo:'',descripcion:''}],cobertura:'',requisitos:''}]
// const cardsData = []



const API_KEY = "AIzaSyDuUhAfHcSUPlOroCuXHfNnO7sl2PFZqI0";
const SPREADSHEET_ID = "19oVhpum1NSiNiXUiEXnRn7pXZm4t7juQj5HzKUyXT6c";
const Swiss_Medical = "todas!B2";
const SanCor_Salud = "todas!B3";
const Medife = "todas!B4"; 
const Omint = "todas!B5";
const Prevencion_Salud = "todas!B6";
const Avalian = "todas!B7";
const Galeno = "todas!B8";
const Premedic = "todas!B9";
const Doctored = "todas!B10";
const Salud_Central = "todas!B11";
const Cristal = "todas!B12";
const Emergencias = "todas!B13";
const RANGOS = [Swiss_Medical,SanCor_Salud,Medife,Omint,Prevencion_Salud,Avalian,Galeno,Premedic]; // Celda correcta
const RANGE = [];
let cardsData = []; // Aquí se guardará el array final





// La URL de tu nuevo endpoint seguro
const GOOGLE_SHEETS_ENDPOINT = 'https://googlesheets.avalianonline.com.ar/googlesheets'; 

async function cargarCardsData() {
    try {
        // 1. Llamar al servidor Node.js (la nueva ruta)
        const response = await fetch(GOOGLE_SHEETS_ENDPOINT, {
            method: 'GET', // Usaste POST en tu ruta, aunque GET también podría funcionar
            headers: {
                'Content-Type': 'application/json',
                // Si necesitas enviar rangos específicos desde el cliente, agrégalos aquí
            },
            // body: JSON.stringify({ ranges: RANGOS }), // Ejemplo si envías datos
        });

        if (!response.ok) {
            // Manejar errores HTTP (ej: 404, 500)
            throw new Error(`Error HTTP: ${response.status}`);
        }

        const result = await response.json();
        
        // El servidor ya te devuelve el array de datos procesado
        const RANGE = result.data || []; 
        const RANGE_SIN_ULTIMOS_4 = RANGE.slice(0, -4);
        
        // 2. Lógica de renderizado
        console.log("💾 cardsData final desde el servidor:", RANGE_SIN_ULTIMOS_4);
        
        if (typeof renderCards === "function") {
            renderCards(RANGE_SIN_ULTIMOS_4);
        }

    } catch (error) {
        console.error("❌ Error al obtener los datos del servidor (Google Sheets):", error);
        // Aquí puedes actualizar la UI para mostrar un mensaje de error
    }
}

// Llama a la nueva función
cargarCardsData();



const testimonios = [
  {
    rating: "★★★★★",
    texto: "Este servicio cambió completamente la forma en que gestionamos nuestros proyectos. ¡Altamente recomendado!",
    avatar: "AM",
    nombre: "Ana Martínez",
    cargo: "CEO, TechSolutions"
  },
  {
    rating: "★★★★★",
    texto: "La atención al cliente es excepcional. Siempre están dispuestos a ayudar y resolver cualquier duda en minutos.",
    avatar: "CR",
    nombre: "Carlos Ruiz",
    cargo: "Freelancer"
  },
  {
    rating: "★★★★☆",
    texto: "Desde que uso esta plataforma, mi productividad ha aumentado un 40%. Es intuitiva y muy eficiente.",
    avatar: "LS",
    nombre: "Laura Sánchez",
    cargo: "Directora de Marketing"
  }
];


