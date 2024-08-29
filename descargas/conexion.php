<?php





class Conexion{

public static function Conectar(){

            define('servidor','mysql-3ad0a4a6-hernan527-ea37.a.aivencloud.com');

            define('nombre_bd','defaultdb');

            define('usuario','avnadmin');

            define('password','AVNS_dBDZ4JZdGX8CYwSc6sA');

            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            ?php
            //Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
            
            //Conectar a la base de datos
            
            $hostname="mysql-3ad0a4a6-hernan527-ea37.a.aivencloud.com";
            $username="avnadmin";
            $password="AVNS_dBDZ4JZdGX8CYwSc6sA";
            $dbname="defaultdb";
            $usertable="contador";
            $yourfield = "time";
            
            mysqli_connect($hostname,$username, $password) o morir ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
            mysqli_select_db($dbname);
            
            # Comprobar si existe registro
            
            $query = “SELECCIONAR * DESDE $usertable”;
            
            $result = mysqli_query($query);
            
            si($result){
                while($row = mysqli_fetch_array($result)){
                    $name = $row["$yourfield"];
                    echo "Nombre: ".$name."br/>";
                }
            }
        ?>