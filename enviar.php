<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPE INVESTIGA | mensaje</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-calendario.css">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
  <!-- Menu de Navegacion -->
  <header">
    <nav class="menu">
      <div class="logo">
        <a href="index.php"><img src="img/logo.png"></a>
          <!--Pequeño boton para que aprece cuando es responsive la página-->
          <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>
    <!-- Elementos del menu -->
      <div class="list-container">
        <ul class="lists">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="calendarios.php">Calendarios</a></li>
          <li><a href="proyectos.php">Proyectos</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="formatos.php">Documentación</a></li>
        </ul>
      </div>
    </nav>
</header>
<br><br><br><br><br>
   <?php
      if (isset($_POST['send'])){
         include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
         
         /*Configuracion de variables para enviar el correo*/
         $mail_username="heykids.projecto@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
         $mail_userpassword="heykids2020";//Tu contraseña de gmail
         $mail_addAddress="heykids.projecto@gmail.com";//correo electronico que recibira el mensaje
         $template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
         
         /*Inicio captura de datos enviados por $_POST para enviar el correo */
         $mail_setFromEmail=$_POST['email'];
         $mail_setFromName=$_POST['nombre'];
         $txt_message=$_POST['mensaje'];
         $mail_subject=$_POST['asunto'];
         
         sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
      }
	?>



<br>
<br>
<br>
<br>

  <!--seccion del pie de pagina-->
<footer class="pie_pagina">
    <div class="contenido_ppg">
        <div class="fila">
            <div class="columna_ppg">
                <img src="img/footer/logo_blanco.png" class="logo-blanco">
            </div>
            <div class="columna_ppg">
              <h3>Via Quevedo 24Km - Hacienda Zolia Luz</h3>
              <ul>
                  <li><a href="#">Telf: 0979514382</a></li>
                  <li><a href="#">Fax: 927397294 </a></li>
                  <li><a href="#">Sede Santo Domingo</a></li>
                  <li><a href="#">Universidad de las Fuerzas Armadas ESPE</a></li>
              </ul>
            </div>
            <div class="columna_ppg">
                <h3>Encuentranos en</h3>
                    <a href="#"><img src="img/footer/facebook.png" ></a>
                    <a href="#"><img src="img/footer/twitter.png"  ></a>
                    <a href="#"><img src="img/footer/whatsapp.png" ></a>
                    <a href="#"><img src="img/footer/linkedin.png" ></a>
            </div>
        </div>
    </div>
    <div class="derechos_reservados">
        <div class="container">
            &copy; 2020 - Todos los derechos reservados
        </div>
    </div>
  </footer>
    

  <!-- Scripts -->
<script src="https://kit.fontawesome.com/35db202371.js"></script>
<script src="js/interacciones.js"></script>
<script src="js/scripts.js"></script>


</body>
</html>

