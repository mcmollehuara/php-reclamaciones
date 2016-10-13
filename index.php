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
        </style>
        <script>

            function printReclamacion(){
                window.focus();
                window.print();
            }
        </script>
                        
    </head>
    <body>
        <div>
        <div class="medium-12 large-12 columns header-print">
        </div>
         <div class="medium-12 large-12 columns header-print">
            <span id="success_message" style="display:none"></span>
        </div>
        
         
            <form id="ContactForm" method="post">
                <div class="row">
                
    <div class="medium-6 large-6 columns">
        <input name="nombres" type="text" placeholder="Nombres*" required="">
        <span class="error" style="display:none;"></span>
    </div>
    <div class="medium-6 large-6 columns">
        <input name="apellidos" type="text" placeholder="Apellidos*" required="">
        <span class="error" style="display:none;"></span>
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">
        <select name="tipoDocumento">
        <option value="1">DNI</option>
        <option value="2">Carné de Extrangería</option>
        <select>                
        <span class="error" style="display:none;"></span>
    </div>
    <div class="medium-6 large-6 columns">
        <input name="numeroDocumento" type="text" placeholder="Numero documento*" required="">
        <span class="error" style="display:none;"></span>        
    </div>
</div>
<div class="row">
    <div class="medium-12 large-12 columns">
        <input name="direccion" type="text" placeholder="Direccion*" required="">
        <span class="error" style="display:none;"></span>    
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">    
        <input name="provincia" type="text" placeholder="Provincia*" required="">
        <span class="error" style="display:none;"></span>
    </div>
    <div class="medium-6 large-6 columns">    
        <input name="distrito" type="text" placeholder="Distrito*" required="">
        <span class="error" style="display:none;"></span>
    </div>
</div>
<div class="row">
    <div class="medium-6 large-6 columns">
        <input name="telefono" type="text" placeholder="Telefono*" required="">
        <span class="error" style="display:none;"></span>
    </div>
    <div class="medium-6 large-6 columns">            
        <input name="email" type="email" placeholder="Email*" required="">
        <span class="error" style="display:none;"></span>
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
    <!-- 
            <select name="tipo" required="">
                <option value="1">Queja</option>
                <option value="2">Reclamo</option>
            <select>
             -->
             <select name="tipo" required="">
                <?php
                    require_once("db.php");
                    $db  = new DB();
                 ?>

            <select>
            <span class="error" style="display:none;"></span>
    </div>
      <div class="medium-6 large-6 columns">
            <select name="servicio" required="">
                <option value="1">Servicio 1</option>
                <option value="2">Servicio 2</option>
            <select>
            <span class="error" style="display:none;"></span>
    </div>
 
    <div class="medium-12 large-12 columns">
        *Reclamo: malestar por algún producto o servicio recibido con el que no se está conforme. <br> 
        *Queja: malestar respecto
        de algún tema que no tenga que ver directamente con el giro del negocio, como por ejemplo, la mala atención.
    </div>
</div>
<div class="row">
    <div class="large-12 columns"> 
        <textarea name="descripcion" rows="4" cols="50" required="" placeholder="Descripción">
        </textarea>
        <span class="error" style="display:none;"></span>
    </div>
</div>
<div class="row">
<div class="medium-6 large-6 columns">
            <select name="formaRespuesta" required="">
                <option value="1">Físico</option>
                <option value="2">Email</option>
            <select>
            <span class="error" style="display:none;"></span>
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