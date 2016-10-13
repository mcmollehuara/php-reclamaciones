<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="./css/foundation.css" type="text/css" media="screen"/>
        <style>
        
        @media print {
            * {-webkit-print-color-adjust:exact;}
            .header-print{   
                 width:100%;
                height:50px;      
                background-color:#088eff;
                background-image: url("http://aelucoop.pe/web_aelucoop/wp-content/themes/aelucoop/img/logo.png");    
                background-repeat: no-repeat;
            }
            .sticky-container{
                display:none;
            } 
            .encabezado{
                display:none;
            }
            .footer{
                display:none;
            }
            .footerblue{
                display:none;
            }                     
        }
        .error{
                color:red;                
            }  
        </style>
        <script>

            function printReclamacion(){
                window.focus();
                window.print();
            }
        </script>
                        
    </head>
    <body>
        <div class="row">
        <div class="medium-12 large-12 columns header-print">
        </div>
         <div class="medium-12 large-12 columns">
            <span id="success_message" style="display:none"></span>
        </div>
        
         
            <form id="ContactForm" method="post">
                <div class="row">
                
    <div class="medium-6 large-6 columns">
        <input id="nombres" name="nombres" type="text" placeholder="Nombres*" required="">
        <small class="error" style="display:none;"></small>
    </div>
    <div class="medium-6 large-6 columns">
        <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos*" required="">
        <small class="error" style="display:none;"></small>
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">
        <select id="tipoDocumento" name="tipoDocumento">
        <option value="1">DNI</option>
        <option value="2">Carné de Extrangería</option>
        <select>                
        <small class="error" style="display:none;"></small>
    </div>
    <div class="medium-6 large-6 columns">
        <input id="numeroDocumento" name="numeroDocumento" type="text" placeholder="Numero documento*" required="">
        <small class="error" style="display:none;"></small>    
    </div>
</div>
<div class="row">
    <div class="medium-12 large-12 columns">
        <input id="direccion" name="direccion" type="text" placeholder="Direccion*" required="">
        <small class="error" style="display:none;"></small>
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">    
        <input id="provincia"  name="provincia" type="text" placeholder="Provincia*" required="">
        <small class="error" style="display:none;"></small>
    </div>
    <div class="medium-6 large-6 columns">    
        <input id="distrito" name="distrito" type="text" placeholder="Distrito*" required="">
        <small class="error" style="display:none;"></small>
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">
        <input id="telefono" name="telefono" type="text" placeholder="Telefono*" required="">
        <small class="error" style="display:none;"></small>
    </div>
    <div class="medium-6 large-6 columns">            
        <input id="email" name="email" type="email" placeholder="Email*" required="">
        <small class="error" style="display:none;"></small>
    </div>
</div>
<div class="row">
    <div class="medium-12 large-12 columns">   
    
    *Si es menor de edad completar los siguientes datos
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">
        <input name="tutorApellidos" type="text" placeholder="Apellidos del Tutor">
    </div>
    <div class="medium-6 large-6 columns">
        <input name="tutorNombres" type="text"  placeholder="Nombres del Tutor">    
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">
    <select name="tutorTipoDocumento">
        <option value="1">DNI</option>
        <option value="2">Carné de Extrangería</option>
        <select>
    </div>
    <div class="medium-6 large-6 columns">
        <input name="tutorNumeroDocumento" type="text" placeholder="Numero documento del tutor">        
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">    
             <select id="tipo" name="tipo" required="">
                <option value="1">Queja</option>
        <option value="2">Reclamo</option>
            <select>
            <small class="error" style="display:none;"></small>
    </div>
      <div class="medium-6 large-6 columns">
            <select id="servicio"  name="servicio" required="">
                <?php
                    require_once("php/db.php");
                    $db  = new DB();
                    $result = $db->getServices();
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='".$row[TIPO]."'>".$row[DESCRIPCION]."</option>";                        
                    }                    
                 ?>
            <select>
            <small class="error" style="display:none;"></small>
    </div>
 
    <div class="medium-12 large-12 columns">
        *Reclamo: malestar por algún producto o servicio recibido con el que no se está conforme. <br> 
        *Queja: malestar respecto
        de algún tema que no tenga que ver directamente con el giro del negocio, como por ejemplo, la mala atención.
    </div>
</div>
<div class="row">
    <div class="large-12 columns"> 
        <textarea  id="descripcion"  name="descripcion" rows="4" cols="50" required="" placeholder="Descripcion*"></textarea>
        <small class="error" style="display:none;"></small>
    </div>
</div>
<div class="row">
<div class="medium-6 large-6 columns">
            <select id="formaRespuesta" name="formaRespuesta" required="">
                <option value="1">Físico</option>
                <option value="2">Email</option>
            <select>
            <small class="error" style="display:none;"></small>
    </div>
</div>
<div class="row">
<div class="medium-6 large-6 columns">
<p class="submit">
                <span id="loader" class="loader" style="display:none;"></span>
                    <input id="send" type="button" value="Enviar" class="button"/>
                    <input id="print" type="button" value="Print" onclick="printReclamacion()"  class="button"/>
                    					
                </p>	
                <input id="newcontact" name="newcontact" type="hidden" value="1"></input>
</div>    
</div>

                
                			
            </form>
        </div>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="javascript/jquery.contact.js" type="text/javascript"></script>                 
    </body>
</html>