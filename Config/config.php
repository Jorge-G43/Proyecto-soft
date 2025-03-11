<?php
  
  //define("BASE_URL","http://localhost:8080/tienda_virtual/");   Manera de Definir
  const BASE_URL = "http://localhost:8080/Proyecto-soft";
  
  //Zona horaria
	date_default_timezone_set('America/Guatemala');
  
  //Datos de  Conexion a Base de Datos
    const DB_HOST  = "localhost";
	const DB_NAME = "proyecto-soft";
    const DB_USER  = "root";
	const DB_PASSWORD  = "48997807";
	const DB_CHARSET = "charset=utf8";

    //Deliminadores decimal y millar Ej. 24,1989.00
	  const SPD = ".";
	  const SPM = ",";

	  //Simbolo de moneda
	  const SMONEY = "Q";
		

?>