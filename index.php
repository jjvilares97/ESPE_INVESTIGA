<?php

require_once "conexion.php";

  $query = $conn->prepare("SELECT * FROM publico");
  $query->execute();
  $query->store_result();

  $rows = $query->num_rows;

  
  $query1 = $conn->prepare("SELECT * FROM ponente_ponencia");
  $query1->execute();
  $query1->store_result();

  $rows1 = $query1->num_rows;

  $query2 = $conn->prepare("SELECT * FROM ponente_charla");
  $query2->execute();
  $query2->store_result();

  $rows2 = $query2->num_rows;

  $conn -> close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>ESPE INVESTIGA | Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Llamado a los estilos CSS -->
  <link rel="icon" type="image/png" href="img/icon.png" />
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.easing-1.3.js"></script>
</head>

<body>

  <!-- Menu de Navegacion -->
  <header>
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
  <!-- Imagen Header -->
    <section class="banner">
        <div class="banner-content">
          <h1>FERIA DE CIENCIAS Y TECNOLOGIAS</h1>
          <h1>ESPE INVESTIGA</h1>
          <h2>Innovación para la excelencia<h2>
            <div class="boton">
              <a href="proyectos.php">
                <button>INSCRÍBETE</button>
              </a>
            </div>
            <!--Cuenta Regresiva del Evento -->
            <div id="cuentaRegresiva"></div> 

            <!--Contenido del Wave-->
            <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 35%; width: 100%;"><path d="M-8.17,91.28 C149.99,150.00 319.69,26.14 503.10,111.02 L501.41,155.42 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
            </div>
        </div>
    </section>
  </header>


<!-- Acerca de nosotros -->
  <h2>Sobre Nosotros</h2>
  <section class="info">
    <img src="img/gif/participa.gif">
    <div class="info_contenido">
      <p>Los proyectos expuestos en esta sección, son proyectos desarrollados por parte de estudiantes de la Universidad
        de las Fuerzas Armadas-ESPE extensión Santo Domingo. Tambien ofrecemos una espacio para que la sociedad tenga la
        oportunidad de hacer conocer sus proyectos. <br><br>
        Si eres un estudiante de carrera o una persona en particular, y quieres participar en este evento. Para mayor 
        información sobre el proceso de incripción y participación dale clic en el siguiente enlace.<br><br>
      </p>
      <div class="boton">
        <a href="nosotros.php">
          <button>CONOCE MÁS</button>
        </a>
      </div>
    </div>
  </section>

   <!--Informacion de Nuestros Congreso -->
   <h2>Nuestro Congreso</h2>
   <section class="our-projects">
   <div class="contenido_num">
      <div class="fila_num">
          <div class="columna_num">
              <h1><?php echo $rows ?></h1><br>
              <p>Asistentes</p>
          </div>
          <div class="columna_num">
            <h1><?php echo $rows1 ?></h1><br>
            <p>Ponentes</p>
          </div>
          <div class="columna_num">
            <h1><?php echo $rows2 ?></h1><br>
            <p>Charlas</p>
          </div>
      </div>
  </div>
  </section>
  
   <!--Seccion Categorias -->
   <h2>Nuestras Categorías</h2>
   <section class="boxes">
      <div class="box1">
        <a href="proyectos.php"><img src="img/computadora.png" id="img1"></a>
        <h3>ITIN</h3>
      </div>
      <div class="box2">
        <a href="proyectos.php"><img src="img/biologia.png" id="img2"></a>
        <h3>BIOTECNOLOGÍA</h3>
      </div>
      <div class="box3">
        <a href="proyectos.php"><img src="img/planta.png" id="img3"></a>
        <h3>AGROPECUARIA</h3>
      </div>
      <div class="box4">
        <a href="proyectos.php"><img src="img/equipo.png" id="img4"></a>
        <h3>INVITADOS</h3>
      </div>
  </section>
 

  <!--seccion del mapa-->
  <h2>Ubícanos en Google</h2>
  <section class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7979.43148665111!2d-79.3082637295403!3d-0.4108535411987204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1596391694180!5m2!1ses!2sec" 
    width="100%" height="350" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>

<!--seccion del slider empresas-->


<!--seccion del enviar comentarios-->
 <div class="footer">
  <div class="deg-footer"></div>
  <div class="ejeZfooter">
  <div class="footer-content">
   <div class="footer-title">
     <h2>Ayúdanos a mejorar</h2>
   </div>

   <div class="formulario-content">
    <form id="formulario" action="enviar.php" method="post">
        <label>Nombre y Apellido :</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre y apellido" required="">
   
        <label>Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu Correo Electronico" required="">

        <label>Asunto :</label>
        <input type="text" id="asunto" name="asunto" placeholder="Ingresa tus Nombre" required="">     
   
        <label for="message">Escribe tu mensaje</label>
        <textarea name="mensaje" id="mensaje"></textarea>
   
        <div class="send"><button type="submit" name="send" id="send"> ENVIAR </button></div>
     </form>
   </div>
  </div>
  </div>
</div>

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
                <li><a href="#">Telf: 0-979514382</a></li>
                <li><a href="#">Fax: (02)-3775320 </a></li>
                <li><a href="#">Sede Santo Domingo</a></li>
                <li><a href="#">Universidad de las Fuerzas Armadas ESPE</a></li>
            </ul>
          </div>
          <div class="columna_ppg">
              <h3>Encuéntranos en</h3>
                  <a href="https://www.facebook.com/ESPE.U.SD/"><img src="img/footer/facebook.png" ></a>
                  <a href="https://twitter.com/ESPEU"><img src="img/footer/twitter.png"  ></a>
                  <a href="https://api.whatsapp.com/send?phone=+593978681164&text=%C2%BFQu%C3%A9%20servicios%20ofrecen?"><img src="img/footer/whatsapp.png" ></a>
                  <a href="https://ec.linkedin.com/school/espe-escuela-politecnica-del-ejercito/"><img src="img/footer/linkedin.png" ></a>
          </div>
      </div>
  </div>
  <div class="derechos_reservados">
      <div class="container">
          ESPE Santo Domingo
          &copy; 2020 - Todos los derechos reservados
      </div>
  </div>
</footer>




<!-- Scripts -->

<script src="https://kit.fontawesome.com/35db202371.js"></script>
<script src="js/interacciones.js"></script>
<script src="js/cuenta.js"></script>
</body>
</html>