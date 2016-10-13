<?php
require_once("db.php");					/* Database Class */
require_once('utils/is_email.php');		/* Email Validation Script */

/* Handle Ajax Request */
if(isset($_POST['newcontact'])){
	$contact = new Contact();
	unset($contact);
}
else{
	header('Location: /');
}

/* Class Contact */
class Contact{
	
	private $db; 						/* the database obj */
	
	private $errors 		= array();  /* holds error messages */
	private $num_errors;   				/* number of errors in submitted form */
	
	public function __construct(){
		$this->db = new DB();
		if(isset($_POST['newcontact']))
			$this->processNewMessage();
		else
			header("Location: /");
	}

	public function processNewMessage(){
		// $menorEdad= $_POST['menorEdad'];
		// $origen= $_POST['origen'];
		$apellidos= $_POST['apellidos'];
		$nombres= $_POST['nombres'];
		$tipoDocumento= $_POST['tipoDocumento'];

		$numeroDocumento= $_POST['numeroDocumento'];
		$direccion= $_POST['direccion'];
		$distrito= $_POST['distrito'];
		$provincia= $_POST['provincia'];
		$telefono= $_POST['telefono'];
		
		$email= $_POST['email'];
		$tutorNombres= $_POST['tutorNombres'];
		$tutorApellidos= $_POST['tutorApellidos'];
		$tutorTipoDocumento= $_POST['tutorTipoDocumento'];
		$tutorNumeroDocumento= $_POST['tutorNumeroDocumento'];
		
		$tipo= $_POST['tipo'];
		$servicio= $_POST['servicio'];
		$descripcion= $_POST['descripcion']; 
		$formaRespuesta= $_POST['formaRespuesta'];
		
		/* Server Side Data Validation */
		
		/* Email Validation */
		if(!$email || mb_strlen($email = trim($email)) == 0)
			$this->setError('email','required field');
		else{
			if(!is_email($email))
				$this->setError('email', 'invalid email');
			else if(mb_strlen($email) > 120)
				$this->setError('email', 'too long! 120');
		}
		
		/* apellidos Validation */
		if(!$apellidos || mb_strlen($apellidos = trim($apellidos)) == 0)
			$this->setError('apellidos', 'campo requerido');
		else if(mb_strlen(trim($apellidos)) > 50)
			$this->setError('apellidos', 'El valor es mayor al permitido');
	
		/* nombres Validation */
	    if(!$nombres || mb_strlen($nombres = trim($nombres)) == 0)
			$this->setError('nombres', 'campo requerido');
		else if(mb_strlen(trim($nombres)) > 50)
			$this->setError('nombres', 'El valor es mayor al permitido');

/* tipoDocumento Validation */
	    if(!$tipoDocumento || mb_strlen($tipoDocumento = trim($tipoDocumento)) == 0)
			$this->setError('tipoDocumento', 'campo requerido');
		else if(mb_strlen(trim($tipoDocumento)) > 2)
			$this->setError('tipoDocumento', 'El valor es mayor al permitido');

/* numeroDocumento Validation */
	    if(!$numeroDocumento || mb_strlen($numeroDocumento = trim($numeroDocumento)) == 0)
			$this->setError('numeroDocumento', 'campo requerido');
		else if(mb_strlen(trim($numeroDocumento)) > 20)
			$this->setError('numeroDocumento', 'El valor es mayor al permitido');									

/* direccion Validation */
	    if(!$direccion || mb_strlen($direccion = trim($direccion)) == 0)
			$this->setError('direccion', 'campo requerido');
		else if(mb_strlen(trim($direccion)) > 100)
			$this->setError('direccion', 'El valor es mayor al permitido');


/* distrito Validation */
	    if(!$distrito || mb_strlen($distrito = trim($distrito)) == 0)
			$this->setError('distrito', 'campo requerido');
		else if(mb_strlen(trim($distrito)) > 50)
			$this->setError('distrito', 'El valor es mayor al permitido');												


/* provincia Validation */
	    if(!$provincia || mb_strlen($provincia = trim($provincia)) == 0)
			$this->setError('provincia', 'campo requerido');
		else if(mb_strlen(trim($provincia)) > 50)
			$this->setError('provincia', 'El valor es mayor al permitido');


/* telefono Validation */
	    if(!$telefono || mb_strlen($telefono = trim($telefono)) == 0)
			$this->setError('telefono', 'campo requerido');
		else if(mb_strlen(trim($telefono)) > 50)
			$this->setError('telefono', 'El valor es mayor al permitido');


		/* Email Validation */
		if(!$email || mb_strlen($email = trim($email)) == 0)
			$this->setError('email','required field');
		else{
			if(!is_email($email))
				$this->setError('email', 'invalid email');
			else if(mb_strlen($email) > 100)
				$this->setError('email', 'too long! 120');
		}


/* tutorNombres Validation */
	    // if(!$tutorNombres || mb_strlen($tutorNombres = trim($tutorNombres)) == 0)
		// 	$tutorNombres->setError('tutorNombres', 'campo requerido');
		// else if(mb_strlen(trim($tutorNombres)) > 50)
		// 	$this->setError('tutorNombres', 'El valor es mayor al permitido');

/* tutorApellidos Validation */
	    // if(!$tutorApellidos || mb_strlen($tutorApellidos = trim($tutorApellidos)) == 0)
		// 	$tutorApellidos->setError('tutorApellidos', 'campo requerido');
		// else if(mb_strlen(trim($tutorApellidos)) > 50)
		// 	$this->setError('tutorApellidos', 'El valor es mayor al permitido');

/* tutorTipoDocumento Validation */
	    // if(!$tutorTipoDocumento || mb_strlen($tutorTipoDocumento = trim($tutorTipoDocumento)) == 0)
		// 	$tutorTipoDocumento->setError('tutorTipoDocumento', 'campo requerido');
		// else if(mb_strlen(trim($tutorTipoDocumento)) > 2)
		// 	$this->setError('tutorTipoDocumento', 'El valor es mayor al permitido');

/* tutorNumeroDocumento Validation */
	    // if(!$tutorNumeroDocumento || mb_strlen($tutorNumeroDocumento = trim($tutorNumeroDocumento)) == 0)
		// 	$tutorNumeroDocumento->setError('tutorNumeroDocumento', 'campo requerido');
		// else if(mb_strlen(trim($tutorNumeroDocumento)) > 20)
		// 	$this->setError('tutorNumeroDocumento', 'El valor es mayor al permitido');

/* tipo Validation */
	    if(!$tipo || mb_strlen($tipo = trim($tipo)) == 0)
			$this->setError('tipo', 'campo requerido');
		else if(mb_strlen(trim($tipo)) > 2)
			$this->setError('tipo', 'El valor es mayor al permitido');

/* servicio Validation */
	    if(!$servicio || mb_strlen($servicio = trim($servicio)) == 0)
			$this->setError('servicio', 'campo requerido');
		else if(mb_strlen(trim($servicio)) > 2)
			$this->setError('servicio', 'El valor es mayor al permitido');

/* descripcion Validation */
	    if(!$descripcion || mb_strlen($descripcion = trim($descripcion)) == 0)
			$this->setError('descripcion', 'campo requerido');
		else if(mb_strlen(trim($descripcion)) > 2000)
			$this->setError('descripcion', 'El valor es mayor al permitido');

/* formaRespuesta Validation */
	    if(!$formaRespuesta || mb_strlen($formaRespuesta = trim($formaRespuesta)) == 0)
			$this->setError('formaRespuesta', 'campo requerido');
		else if(mb_strlen(trim($formaRespuesta)) > 2)
			$this->setError('formaRespuesta', 'El valor es mayor al permitido');

		/* Errors exist */
		if($this->countErrors() > 0){
			$json = array(
				'result' => -1, 
				'errors' => array(
								// array('name' => 'origen'		,'value' => $this->error_value('origen')),
								array('name' => 'apellidos'		,'value' => $this->error_value('apellidos')),
								array('name' => 'nombres'		,'value' => $this->error_value('nombres')),
								array('name' => 'tipoDocumento'		,'value' => $this->error_value('tipoDocumento')),
								array('name' => 'numeroDocumento'		,'value' => $this->error_value('numeroDocumento')),

								array('name' => 'direccion'		,'value' => $this->error_value('direccion')),
								array('name' => 'distrito'		,'value' => $this->error_value('distrito')),
								array('name' => 'provincia'		,'value' => $this->error_value('provincia')),
								array('name' => 'telefono'		,'value' => $this->error_value('telefono')),
								array('name' => 'email'		,'value' => $this->error_value('email')),

								array('name' => 'tutorNombres'		,'value' => $this->error_value('tutorNombres')),
								array('name' => 'tutorApellidos'		,'value' => $this->error_value('tutorApellidos')),
								array('name' => 'tutorTipoDocumento'		,'value' => $this->error_value('tutorTipoDocumento')),
								array('name' => 'tutorNumeroDocumento'		,'value' => $this->error_value('tutorNumeroDocumento')),
								array('name' => 'tipo'		,'value' => $this->error_value('tipo')),

								array('name' => 'servicio'		,'value' => $this->error_value('servicio')),
								array('name' => 'descripcion'		,'value' => $this->error_value('descripcion')),
								array('name' => 'formaRespuesta'		,'value' => $this->error_value('formaRespuesta'))

							)
				);				
			$encoded = json_encode($json);
			echo $encoded;
			unset($encoded);
		}
		/* No errors, insert in db*/
		else{
			if(($ret = $this->db->dbNewMessage($apellidos,$nombres,$tipoDocumento,
		$numeroDocumento,$direccion,$distrito,$provincia,$telefono,
		$email,$tutorNombres,$tutorApellidos,$tutorTipoDocumento,$tutorNumeroDocumento,
		$tipo,$servicio,$descripcion, $formaRespuesta)) > 0){
				$json = array('result' 		=> 1); 
				if(SEND_EMAIL){					
					$name = $nombres.' '.$apellidos;
					$this->sendEmail($email,$name,$descripcion);
				}					
			}	
			else
				$json = array('result' 		=> -2); /* something went wrong in database insertion  */
			$encoded = json_encode($json);
			echo $encoded;
			unset($encoded);
		}
	}
	
	public function sendEmail($email,$name,$descripcion){
		/* Just format the email text the way you want ... */
		$message_body		= "Hola, ".$name."(".$email.") se envio un email como constancia a tu \n"
									."email: ".$email."\n"
									."message: "."\n"
									.$descripcion; 
		$headers			= "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
		
		return mail(EMAIL_TO,MESSAGE_SUBJECT,$message_body,$headers);
	}
	
	public function setError($field, $errmsg){
		$this->errors[$field] 	= $errmsg;
		$this->num_errors 		= count($this->errors);
	}
	
	public function error_value($field){
		if(array_key_exists($field,$this->errors))
			return $this->errors[$field];
		else
			return '';
	}
	
	public function countErrors(){
		return $this->num_errors;
	}
};
?>
