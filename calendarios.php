<!-- Tabla ponentes -->
<?php 
require_once "conexion.php";

    $query = 'SELECT * FROM ponente_ponencia ';
    if($stmt = $conn->prepare($query)){
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $nombre = $row['NOMBRE_PONENCIA'];
                $apellido = $row['APELLIDO_PONENCIA'];
                $correo = $row['CORREOINS_PONENCIA'];
                $link = $row['LINK_PONENCIA']; 
                $titulo = $row['TITULO_PONENCIA'];
                $fecha = $row['FECHAPRE_PONENCIA'];
            } else{
                echo 'Error! No existen resultados.';
                exit();
            }
        } else {
            echo "Error! Revise la conexión con la base de datos.";
            exit();
        }
    }
    $stmt ->close();



    $query1 = 'SELECT * FROM ponente_poster ';
    if($stmt1 = $conn->prepare($query1)){
        if($stmt1->execute()){
            $result1 = $stmt1->get_result();
            if($result1->num_rows > 0){
                $row1 = $result1-> fetch_array(MYSQLI_ASSOC);
                $nombre1 = $row1['NOMBRE_POSTER'];
                $apellido1 = $row1['APELLIDO_POSTER'];
                $correo1 = $row1['CORREOINS_POSTER']; 
                $titulo1 = $row1['TITULO_POSTER'];
                $fecha1 = $row1['FECHAPRE_POSTER'];
                $link = $row1['LINK_POSTER'];
            } else{
                echo 'Error! No existen resultados.';
                exit();
            }
        } else {
            echo "Error! Revise la conexión con la base de datos.";
            exit();
        }
    }
    $stmt1 ->close();


    $query2 = 'SELECT * FROM ponente_charla ';
    if($stmt2 = $conn->prepare($query2)){
        if($stmt2->execute()){
            $result2 = $stmt2->get_result();
            if($result2->num_rows > 0){
                $row2 = $result2-> fetch_array(MYSQLI_ASSOC);
                $nombre2 = $row2['NOMBRE_CHARLA'];
                $apellido2 = $row2['APELLIDO_CHARLA'];
                $correo2 = $row2['CORREOINS_CHARLA']; 
                $titulo2 = $row2['TITULO_CHARLA'];
                $fecha2 = $row2['FECHAPRE_CHARLA'];
                $sala = $row2['SALA_CHARLA'];
            } else{
                echo 'Error! No existen resultados.';
                exit();
            }
        } else {
            echo "Error! Revise la conexión con la base de datos.";
            exit();
        }
    }
    $stmt2 ->close();
    $conn ->close();

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPE INVESTIGA | Calendarios</title>
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
  <!-- Imagen Header -->
    <section class="banner">
        <div class="banner-content1">
          <h1>BIENVENIDOS A LA FERIA DE CIENCIAS</h1>
          <h1>ESPE SANTO DOMINGO</h1>
          <h2>Conoce el calendario de proyectos<h2>
            <!--Contenido del Wave-->
            <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 35%; width: 100%;"><path d="M-8.17,91.28 C149.99,150.00 319.69,26.14 503.10,111.02 L501.41,155.42 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
            </div>
        </div>
    </section>
  </header>
  <main>
 


  <!--seccion de los calendarios-->
  <h2>Agenda Ponentes</h2>
  <?php 
    echo '<div class="boxes1">';
      if($result->num_rows >= 0){
        while($row = $result -> fetch_assoc()){
                    
        echo '<div class="ponenc">';
        echo $row['NOMBRE_PONENCIA'] . " "
        . $row['APELLIDO_PONENCIA']. '</br>' ;
        echo $row['CORREOINS_PONENCIA'] . '</br>' ;
        echo '<strong> '. $row['TITULO_PONENCIA'] .'</strong>' . '</br>' ;
        echo $row['FECHAPRE_PONENCIA']. '</br>' ;
  
        echo '<div class="boton2">';
        echo  '<a href="'. $row['LINK_PONENCIA'].'"><button>Ir Al Meet</button></a>';
        echo '</div>';
        echo '</div>';
                                     
        }
        $result -> free();
        }else{
        echo '<p><em> No existe ponente registrado </em></p>';
      }

    echo '</div>';

  ?>
  


  <h2>Agenda Póster</h2>
  <?php 
    echo '<div class="boxes2">';
      if($result1->num_rows >= 0){
        while($row1 = $result1 -> fetch_assoc()){
                    
        echo '<div class="poster">';
        echo $row1['NOMBRE_POSTER'] . " "
        . $row1['APELLIDO_POSTER']. '</br>' ;
        echo $row1['CORREOINS_POSTER'] . '</br>' ;
        echo '<strong> '. $row1['TITULO_POSTER'] .'</strong>' . '</br>' ;
        echo $row1['FECHAPRE_POSTER']. '</br>' ;
  
        echo '<div class="boton2">';
        echo  '<a href="'. $row1['LINK_POSTER'].'"><button>Ir Al Poster</button></a>';
        echo '</div>';
        echo '</div>';
                                     
        }
        $result1 -> free();
        }else{
        echo '<p><em> No existe ponente registrado </em></p>';
      }

    echo '</div>';

  ?>

<h2>Agenda Charlas</h2>
  <?php 
    echo '<div class="boxes3">';
      if($result2->num_rows >= 0){
        while($row2 = $result2 -> fetch_assoc()){
                    
        echo '<div class="charla">';
        echo $row2['NOMBRE_CHARLA'] . " "
        . $row2['APELLIDO_CHARLA']. '</br>' ;
        echo $row2['CORREOINS_CHARLA'] . '</br>' ;
        echo '<strong> '. $row2['TITULO_CHARLA'] .'</strong>' . '</br>' ;
        echo $row2['FECHAPRE_CHARLA']. '</br>' ;
  
        echo '<div class="boton2">';
        echo  '<a href="'. $row2['SALA_CHARLA'] .'"><button>Ir a Charla</button></a>';
        echo '</div>';
        echo '</div>';
                                     
        }
        $result2 -> free();
        }else{
        echo '<p><em> No existe ponente registrado </em></p>';
      }

    echo '</div>';

  ?>

<!-- Acerca de nosotros -->
<div class="footer">
  <div class="deg-footer"></div>
  <div class="ejeZfooter">
  <div class="footer-content">
   <div class="footer-title">
     <h2>Conoce nuestro Calendario</h2>
   </div>
   <section class="our-projects2">
    <div class="deg-background2"></div>
      <div class="container-project2">

        <!--seccion del calendario-->
        <div class="calendar">
            <div class="calendar__info">
                <div class="calendar__prev" id="prev-month">&#9664;</div>
                <div class="calendar__month" id="month"></div>
                <div class="calendar__year" id="year"></div>
                <div class="calendar__next" id="next-month">&#9654;</div>
            </div>

            <div class="calendar__week">
                <div class="calendar__day calendar__item">LUN</div>
                <div class="calendar__day calendar__item">MAR</div>
                <div class="calendar__day calendar__item">MIE</div>
                <div class="calendar__day calendar__item">JUE</div>
                <div class="calendar__day calendar__item">VIE</div>
                <div class="calendar__day calendar__item">SAB</div>
                <div class="calendar__day calendar__item">DOM</div>
            </div>
            <div class="calendar__dates" id="dates"></div>
          </div>

     </div>
    </section>
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
                  <li><a href="#">Telf: 0979514382</a></li>
                  <li><a href="#">Fax: 927397294 </a></li>
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