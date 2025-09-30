
<?php 

require '../contador.php';

$contador = new contador();

//preguntamos si la IP existe en la base de datos
if (!($contador->ipaddress_exist())) {
	 $contador->add_ipaddress(); //si no existe la agregamos
}

$ip_user = $contador->getRealIP();
$numeroDeVisitas = $contador->numeroDeVisitas();

require 'index.view.php';

?>
			 
                 

						
            