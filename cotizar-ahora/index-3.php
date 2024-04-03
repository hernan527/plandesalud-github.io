
<!doctype html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="ruta/al/plugin/jquery.mask.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script src="ruta/al/tu/archivo/formularios-cotizar.js"></script>
<script src="../assets/js/funciones.js"></script>
<script type="text/javascript" src="../assets/js/formularios-cotizar.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link rel="stylesheet" href="../assets/imagenes/stylea870.css?versao=5.0" />


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="../xmlrpc.php" />
<script async src="../assets/js/jquery-2.2.4.min.js"></script>

<link rel="stylesheet" href="../assets/imagenes/stylea870.css?versao=5.0" />







</head>   
<body class="page-template page-template-page-simulador page-template-page-simulador-php page page-id-16">
   
        <div class="corpo-titulo">
            <h1 class='titulo-da-pagina'>Cotizar Ahora</h1>
            <p id="breadcrumbs"><span><span><a href="../">Inicio</a></span> » <span class="breadcrumb_last" aria-current="page">Cotizar Ahora</span></span></p>     
              </div>

        <div class="entry">

            <div class="conteudo-da-pagina">
                            </div>

                            <div class='chamada-simulador '><p><strong>Elija</strong> a continuación su operadora y descubra el valor de <strong>su plan de salud</strong>.</p>
                                <p>¡Es rápido y aún así garantizamos el precio más bajo! Haga clic y compruébelo, somos socios de las mejores operadoras de Argentina.</p></div>
                            <link href="../assets/css/style-formularioSimuladorGeneral.css" rel="stylesheet" type="text/css">
                            <div class="contador"  id="1" ><h3>Hoy más de <span id="contador"></span> personas solicitaron una cotización</h3></div>

                            <h2 class="passo-bandeiras">1º Paso: Selecione una empresa</h2>
                            
                            <div class="bandeiras" >
                     <img src="../assets/imagenes/logos-prepagas-190x110/todas-las-empresas.png" alt="Todos los Planes de Salud" title="Todos los Planes de Salud" data-id-operadora="Todos Los Planes" onclick="cambiarValor('11')" data-classe-operadora="multimarcas">
    <img src="../assets/imagenes/logos-prepagas-190x110/galeno-logo-medicina-prepaga-planes-de-salud.png" alt="Galeno" title="Galeno" data-id-operadora="Galeno" onclick="cambiarValor('Galeno')" data-classe-operadora="caixa-saude">
    <img src="../assets/imagenes/logos-prepagas-190x110/omint-logo-medicina-prepaga-planes-de-salud.png" alt="Omint" title="Omint" data-id-operadora="Omint" onclick="cambiarValor('Omint')" data-classe-operadora="omint">
    <img src="../assets/imagenes/logos-prepagas-190x110/hominis-logo-medicina-prepaga-planes-de-salud.png" alt="Hominis" title="Hominis" data-id-operadora="Hominis" onclick="cambiarValor('Hominis')" data-classe-operadora="">
    <img src="../assets/imagenes/logos-prepagas-190x110/premedic-logo-medicina-prepaga-planes-de-salud.png" alt="Premedic" title="Premedic" data-id-operadora="Premedic" onclick="cambiarValor('Premedic')" data-classe-operadora="sao-cristovao">
    <img src="../assets/imagenes/logos-prepagas-190x110/sancorsalud-logo-medicina-prepaga-planes-de-salud.png" alt="SanCor salud" title="SanCor Salud" data-id-operadora="SanCor Salud" onclick="cambiarValor('SanCor Salud')"  data-classe-operadora="amil">
    <img src="../assets/imagenes/logos-prepagas-190x110/medife-logo-medicina-prepaga-planes-de-salud.png" alt="Medife" title="Medifé" data-id-operadora="Medifé" onclick="cambiarValor('Medifé')" data-classe-operadora="notredame">
    <img src="../assets/imagenes/logos-prepagas-190x110/swiss-medical-logo-medicina-prepaga-planes-de-salud.gif" alt="Swiss Medical" title="Swiss Medical" data-id-operadora="Swiss Medical" onclick="cambiarValor('6')" data-classe-operadora="biovida">
    <img src="../assets/imagenes/logos-prepagas-190x110/avalian-logo-medicina-prepaga-planes-de-salud.png" alt="Avalian" title="Avalian" data-id-operadora="Avalian" onclick="cambiarValor('Avalian')"data-classe-operadora="unimed">
    <img src="../assets/imagenes/logos-prepagas-190x110/prevencion-salud-logo-medicina-prepaga-planes-de-salud.png" alt="Prevencion Salud" title="Prevencion Salud" data-id-operadora="Prevención Salud" onclick="cambiarValor('18')" data-classe-operadora="amil-one">
    <img src="../assets/imagenes/logos-prepagas-190x110/doctored-logo-medicina-prepaga-planes-de-salud.gif" alt="Doctored" title="Doctored" data-id-operadora="Doctored" onclick="cambiarValor('Doctored')" data-classe-operadora="omint">
    <img src="../assets/imagenes/logos-prepagas-190x110/salud-central-logo-medicina-prepaga-planes-de-salud.png" alt="Salud Central" title="Salud Central" data-id-operadora="Salud Central" onclick="cambiarValor('Salud Central')" data-classe-operadora="omint">

 </div>
 
 <h2 class="passo-formulario"  >2º Completá el formulario</h2>
 <form id="contact-form"  class="form-cotacao" action="../includes/contact_form.php">

    <input class="campo-pagina" type="hidden" name="formulario_pagina" id="formulario_pagina" value="cotizar-ahora-formulario-completo">

     <input class="campo-operadora" type="hidden" name="Operadora" id="Operadora" value="Sin Selección">
 
     <div class="plano-selecionado">
         <p>Plan Selecionado:</p>
         <div class="recebe-img"></div>
     </div>

		<div class="tipo-de-plano">
			<p><strong>Quienes ingresan al plan?</strong></p>
			<input type="radio" id="individual" name="idCapitas" value="Individual"><b class="btn-vos"  >Vos </b>
			<input type="radio" id="pareja" name="idCapitas" value="Pareja"><b class="btn-pareja">Pareja</b>
			<input type="radio" id="indehijo" name="idCapitas" value="Individual Con Hijo/s"><b class="btn-vosehijo">Vos e hijo/s</b>
			<input type="radio" id="parehijo" name="idCapitas" value="Pareja e Hijo/s"><b class="btn-parejaehijo">Pareja e hijo/s</b>
		</div>
		<div class="row edades">
			<p class="edad-solo"><strong>Edad</strong></p><p class="edad-varios"><strong>Edades</strong></p>

			<div class="col-6 edad_1">
			
	<span><input class="campo-edad" type="text" id="edad_1" name="edad_1" placeholder="Su edad"></span>
	</div>
	<div class="col-6 edad_2">
		<span><input class="campo-edad-pareja" type="text" id="edad_2" name="edad_2" placeholder="Edad pareja"></span>
	</div></div>
	<div class="row">
<div class="hijos_num">
	<p><strong>Edades del/los hijo/s separadas por espacios</strong></p>
	<div class="col-4">
		<span><input class="campo-edades-hijos" type="text" id="hijos_num" name="hijos_num" placeholder="cuantos hijos"></span>
	</div>	</div>
</div>


		<div class="possui-plano" id="tiene-os">
			<p><strong>Consulta por cambio de Obra Social como empleado en relacion de dependencia?</strong></p>
			<input type="radio" id="con-os" name="poseeOS" value="Desregulado"><b class="btn-con-os">Si</b>
			<input type="radio" id="sin-os" name="poseeOS" value="Particular"><b class="btn-sin-os">No</b>
		</div>

	
		<div class="possui-cnpj">
			<p><strong>Cúal como empleado o monotributista?</strong></p>
			<input type="radio" id="rel-os" name="cualOS" value="Emplado"><b class="btn-rel-os">Relacion de dependencia</b>
			<input type="radio" id="mon-os" name="cualOS" value="MOnotributo"><b class="btn-mon-os">OS del Monotributo</b>
			<!-- <input type="radio" id="sim_cnpj" name="cualOS" value="ambas"><b class="btn-ambos">Ambos</b> -->

		</div>

		<div class="row sueldo">
			<p><strong>Ingresa el importe de tu sueldo Bruto (sin descuentos)</strong></p>

			
	<span><input class="campo-sueldo" type="text" name="sueldo" id="sueldo" placeholder="Sueldo Bruto ( antes de los descuentos) "></span>
	
	</div>
	<div class="row monotributo">
		<div class="col-6">
	<span><input class="campo-categoria-mon" type="text" name="categoriaMono" id="categoriaMono" placeholder="Categoria Monotributo"></span>
</div>
<div class="col-6">

	<span><input class="campo-cant-aport-mon" type="text" name="aportantesMono" id="aportantesMono" placeholder="Cantidad de Aportantes"></span>
</div></div>
<div   class="datos-contacto" id="datos-contacto">

		<div style="clear:both;"></div>

		<p><strong>Necesitamos sus datos de contacto para enviar la cotización:</strong></p>

		<span><i>Nombre Completo</i><input class="campo-nome" type="text" name="Name"  id="Name"  placeholder="Su nombre"></span>
		<div class="telefono">

			<!-- <div class="col-6 edad_1">
			
		<span><i>Prefijo</i><input class="campo-Prefijo" type="tel"  id="Prefijo" name="Prefijo" placeholder="Ej: 11"></span>

	</div> -->
	<div>
			<span><i>Teléfono</i><input class="campo-telefone" type="tel"  id="telefone" name="telefone" placeholder="Ej:11 65924325"></span>
    
	</div></div>
	
		<span><i>E-mail</i><input class="campo-email" type="email"  id="email" name="email" placeholder="Ej: cotizar@plandesalud.ar"></span>
		</div>
        <div class="alert"></div>
        <input type="submit"   value="RECIBIR COTIZACIÓN">
		<br><br><br>
        <div class="loader" style="display: none;"></div>

	</form>


</body>
                            
                            
</html>
		
			 
                 

						
            