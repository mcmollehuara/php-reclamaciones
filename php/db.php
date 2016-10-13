<?php
require_once("config.php"); /* Configuration File */

class DB{
	
	private $link;
	
	public function __construct(){
		$this->link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
		if (mysqli_connect_errno())
		    exit();
	}
	
	public function __destruct() {
		mysqli_close($this->link);
	}
	
	public function dbNewMessage(
		$apellidos,$nombres,$tipoDocumento,
		$numeroDocumento,$direccion,$distrito,$provincia,$telefono,
		$email,$tutorNombres,$tutorApellidos,$tutorTipoDocumento,$tutorNumeroDocumento,
		$tipo,$servicio,$descripcion, $formaRespuesta){

		// $origen 	 	= mysqli_real_escape_string($this->link,$origen);
		$apellidos 	 	= mysqli_real_escape_string($this->link,$apellidos);
		$nombres 	 	= mysqli_real_escape_string($this->link,$nombres);
		$tipoDocumento 	 	= mysqli_real_escape_string($this->link,$tipoDocumento);

		$numeroDocumento 	 	= mysqli_real_escape_string($this->link,$numeroDocumento);
		$direccion 	 	= mysqli_real_escape_string($this->link,$direccion);
		$distrito 	 	= mysqli_real_escape_string($this->link,$distrito);
		$provincia 	 	= mysqli_real_escape_string($this->link,$provincia);
		$telefono 	 	= mysqli_real_escape_string($this->link,$telefono);

		$email 	 	= mysqli_real_escape_string($this->link,$email);
		$tutorNombres 	 	= mysqli_real_escape_string($this->link,$tutorNombres);
		$tutorApellidos 	 	= mysqli_real_escape_string($this->link,$tutorApellidos);
		$tutorTipoDocumento 	 	= mysqli_real_escape_string($this->link,$tutorTipoDocumento);
		$tutorNumeroDocumento 	 	= mysqli_real_escape_string($this->link,$tutorNumeroDocumento);	

		$tipo 	 	= mysqli_real_escape_string($this->link,$tipo);
		$servicio 	 	= mysqli_real_escape_string($this->link,$servicio);
		$descripcion 	 	= mysqli_real_escape_string($this->link,$descripcion);
		$formaRespuesta 	 	= mysqli_real_escape_string($this->link,$formaRespuesta);												
		
		mysqli_autocommit($this->link,FALSE);
		
		// $query = "INSERT INTO CONTACT(name,email,website,message) 
		// 		  VALUES('$name','$email','$website','$message')";

		$query = "INSERT INTO wp_libroreclamacion
		(FECHA, ORIGEN, APELLIDOS, NOMBRES, TIPODOCUMENTO,
		NUMERODOCUMENTO, DIRECCION, DISTRITO, PROVINCIA, TELEFONO,
		EMAIL,`TUTOR-NOMBRES`, `TUTOR-APELLIDOS`, `TUTOR-TIPODOCUMENTO`,`TUTOR-NUMERODOCUMENTO`,
		TIPO, SERVICIO, DESCRIPCION, FORMARESPUESTA)
		VALUES
		(	now(),'100','$apellidos','$nombres','$tipoDocumento',
		'$numeroDocumento','$direccion','$distrito','$provincia','$telefono',
		'$email','$tutorNombres', '$tutorApellidos', '$tutorTipoDocumento','$tutorNumeroDocumento',
		'$tipo','$servicio','$descripcion','$formaRespuesta')";

		mysqli_query($this->link,$query);
		
		if(mysqli_errno($this->link))
			return -1;
		else{
			mysqli_commit($this->link);
			return 1;
		}
	}   
};
?>