<?php 
/*
* @author = Eduardo Lynch Araya
* @twitter = twitter.com/Edulynch
* @github = https://github.com/Edulynch
* Contador de Visitas:
* Cada IP nueva es una visita.
*
*/

class contador {

	//Datos de la conexion a la base de datos.
	//"mysql" puede ser cambiado por el motor de base de datos.
	//"host" es la IP del servidor mysql
	//"dbname" es la base de datos.
	//"utf8" dejar como esta.
	//"root" es el usuario de la base de datos
	//'' las comillas en blanco es la contraseña (si tienes agregala dentro)
	public function ConnectDB()
	{
		try {	
			return $conection = new PDO("mysql:host=localhost;dbname=hernan56_visitas;charset=utf8", 'root', '');	
			// return $conection = new PDO("mysql:host=mysql;dbname=visitas;charset=utf8", 'root', 'Mfcd62!!Mfcd62!!');		
		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
			die();
		}
	}

	//Consigue la IP del usuario
	public function getRealIP() 
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}

		return $_SERVER['REMOTE_ADDR'];
	}

	//Agrega la IP a la base de datos
	public function add_ipaddress()
	{
		$ip_user = $this->getRealIP();
		$conection = $this->ConnectDB();
		$statement = $conection->prepare("INSERT INTO visitas (ip_address) values (:ip_address)");
		$statement->execute(array(':ip_address' => $ip_user));
	}

	//Preguntamos si la ip existe en la base de datos - true | false
	public function ipaddress_exist()
	{
		$ip_user = $this->getRealIP();
		$conection = $this->ConnectDB();
		$statement = $conection->prepare("SELECT * FROM visitas where ip_address = :ip_address LIMIT 1");
		$statement->execute(array(':ip_address' => $ip_user));
		if (!empty($statement->fetch()))
		{
			return true;
		}else {
			return false;
		}
	}

	//Numero de Filas = numero de visitas
	public function numeroDeVisitas()
	{
		$conection = $this->ConnectDB();
		$statement = $conection->prepare('SELECT id FROM visitas');
		$statement->execute();
		$numeroDeVisitas = $statement->rowCount();
		return $numeroDeVisitas;
	}
}

?>