<?php 

require_once 'conexion.php';
/*
  /* AGREGAR DATOS A LA TABLA DE PONENTES*/
  if($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_POST['NOMBRE_PONENCIA']) && isset($_POST['APELLIDO_PONENCIA'])
      && isset($_POST['ID_CARRERA'])&& isset($_POST['CEDULA_PONENCIA'])
      && isset($_POST['CURSO_PONENCIA'])&& isset($_POST['CORREOPER_PONENCIA'])
      && isset($_POST['CORREOINS_PONENCIA'])&& isset($_POST['TITULO_PONENCIA'])
      && isset($_POST['RESUMEN_PONENCIA'])){
          $query = "INSERT INTO ponente_ponencia (NOMBRE_PONENCIA, APELLIDO_PONENCIA,
          ID_CARRERA, CEDULA_PONENCIA, CURSO_PONENCIA, CORREOPER_PONENCIA, CORREOINS_PONENCIA,
          TITULO_PONENCIA, RESUMEN_PONENCIA)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
          if ($stmt = $conn->prepare($query)){
              $stmt -> bind_param('sssssssss', $_POST['NOMBRE_PONENCIA'], $_POST['APELLIDO_PONENCIA'],
              $_POST['ID_CARRERA'], $_POST['CEDULA_PONENCIA'], $_POST['CURSO_PONENCIA'],
              $_POST['CORREOPER_PONENCIA'], $_POST['CORREOINS_PONENCIA'], $_POST['TITULO_PONENCIA'],
              $_POST['RESUMEN_PONENCIA']);

              if($stmt -> execute()){
                header("location: proyectos.php");
                exit();
              }else{
                  echo "Error! Por favor intente más tarde";
              }
              $stmt -> close();
          }
      }
  }

  /* AGREGAR DATOS A LA TABLA DE CHARLAS*/
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['NOMBRE_CHARLA']) && isset($_POST['APELLIDO_CHARLA'])
    && isset($_POST['ID_CARRERA'])&& isset($_POST['CEDULA_CHARLA'])
    && isset($_POST['CORREOPER_CHARLA'])&& isset($_POST['CORREOINS_CHARLA'])
    && isset($_POST['TITULO_CHARLA'])&& isset($_POST['RESUMEN_CHARLA'])){
        $query1 = "INSERT INTO ponente_charla (NOMBRE_CHARLA, APELLIDO_CHARLA,
        ID_CARRERA, CEDULA_CHARLA, CORREOPER_CHARLA, CORREOINS_CHARLA,
        TITULO_CHARLA, RESUMEN_CHARLA)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        if ($stmt1 = $conn->prepare($query1)){
            $stmt1 -> bind_param('ssssssss', $_POST['NOMBRE_CHARLA'], $_POST['APELLIDO_CHARLA'],
            $_POST['ID_CARRERA'], $_POST['CEDULA_CHARLA'], $_POST['CORREOPER_CHARLA'], 
            $_POST['CORREOINS_CHARLA'], $_POST['TITULO_CHARLA'], $_POST['RESUMEN_CHARLA']);

            if($stmt1 -> execute()){
              header("location: proyectos.php");
              exit();
            }else{
                echo "Error! Por favor intente más tarde";
            }
            $stmt1 -> close();
        }
    }  
  }

  /* AGREGAR DATOS A LA TABLA DE POSTER*/
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['NOMBRE_POSTER']) && isset($_POST['APELLIDO_POSTER'])
    && isset($_POST['ID_CARRERA'])&& isset($_POST['CEDULA_POSTER'])
    && isset($_POST['CURSO_POSTER'])&& isset($_POST['CORREOPER_POSTER'])
    && isset($_POST['CORREOINS_POSTER'])&& isset($_POST['TITULO_POSTER'])
    && isset($_POST['RESUMEN_POSTER'])&& isset($_POST['LINK_POSTER'])){
        $query2 = "INSERT INTO ponente_poster (NOMBRE_POSTER, APELLIDO_POSTER,
        ID_CARRERA, CEDULA_POSTER, CURSO_POSTER, CORREOPER_POSTER, CORREOINS_POSTER,
        TITULO_POSTER, RESUMEN_POSTER, LINK_POSTER)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        if ($stmt2 = $conn->prepare($query2)){
            $stmt2 -> bind_param('ssssssssss', $_POST['NOMBRE_POSTER'], $_POST['APELLIDO_POSTER'],
            $_POST['ID_CARRERA'], $_POST['CEDULA_POSTER'], $_POST['CURSO_POSTER'],
            $_POST['CORREOPER_POSTER'], $_POST['CORREOINS_POSTER'], $_POST['TITULO_POSTER'],
            $_POST['RESUMEN_POSTER'], $_POST['LINK_POSTER']);

            if($stmt2 -> execute()){
              header("location: proyectos.php");
              exit();
            }else{
                echo "Error! Por favor intente más tarde";
            }
            $stmt2 -> close();
        }
    }
}

  /* AGREGAR DATOS A LA TABLA DE PUBLICO*/
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['NOMBRE_PUBLICO']) && isset($_POST['APELLIDO_PUBLICO'])
    && isset($_POST['ID_CARRERA'])&& isset($_POST['TELEFONO_PUBLICO'])
    && isset($_POST['CORREO_PUBLICO'])){
        $query3 = "INSERT INTO publico (NOMBRE_PUBLICO, APELLIDO_PUBLICO,
        ID_CARRERA, TELEFONO_PUBLICO, CORREO_PUBLICO)
        VALUES (?, ?, ?, ?, ?)";
        if ($stmt3 = $conn->prepare($query3)){
            $stmt3 -> bind_param('sssss', $_POST['NOMBRE_PUBLICO'], $_POST['APELLIDO_PUBLICO'],
            $_POST['ID_CARRERA'], $_POST['TELEFONO_PUBLICO'], $_POST['CORREO_PUBLICO']);

            if($stmt3 -> execute()){
              header("location: proyectos.php");
              exit();
            }else{
                echo "Error! Por favor intente más tarde";
            }
            $stmt3 -> close();
        }
    }
  }

  

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESPE INVESTIGA | Proyectos</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/styles-proyectos.css">
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
        <h2>Registra tu proyecto YA<h2>

            <!--Contenido del Wave-->
            <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 35%; width: 100%;">
                <path d="M-8.17,91.28 C149.99,150.00 319.69,26.14 503.10,111.02 L501.41,155.42 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
              </svg>
            </div>
      </div>
    </section>
    </header>
    <main>
      <!--Seccion de proyectos-->
      <section>
        <div class="contenido-proyectos">
          <h2>Envíanos tus proyectos</h2><br />

                <!--Botones de formularios-->
      <section>
        <div class="boton-proyectos">
          <input class="botones" type="button" value="Formulario - Ponencias" onclick="mostrarp()">
          <input class="botones" type="button" value="Formulario - Charlas" onclick="mostrarj()">
          <input class="botones" type="button" value="Formulario - Póster" onclick="mostrarpo()">
          <input class="botones" type="button" value="Formulario - Público" onclick="mostrarpu()">
        </div>
      </section>

          <!--FORMULARIO PONENCIA-->
          <section>
        <div id="formularios-p">
          <form class="primer-formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <label>Nombre:</label>
            <input type="text" name="NOMBRE_PONENCIA" placeholder="Escribe tu nombre" required>

            <label>Apellido:</label>
            <input type="text" name="APELLIDO_PONENCIA" placeholder="Escriba su apellido" required>

            <label>Carrera:</label>
            <select name="ID_CARRERA">
              <option value="1">BIO</option>
              <option value="2">ITIN</option>
              <option value="3">AGRO</option>
              <option value="4">OTRO</option>
            </select>

            <label>Cédula:</label>
            <input type="number" name="CEDULA_PONENCIA" placeholder="Escriba su cedula" required>

            <label>Curso:</label>
            <input type="text" name="CURSO_PONENCIA" placeholder="Escriba su curso" required>

            <label>Correo:</label>
            <input type="email" name="CORREOPER_PONENCIA" placeholder="Escriba su correo" required>

            <label>Correo Instirucional:</label>
            <input type="email" name="CORREOINS_PONENCIA" placeholder="Escriba su correo institucional" required>

            <br>
            <label>Titulo del proyecto:</label>
            <input type="text" name="TITULO_PONENCIA" placeholder="Escriba el titulo de su proyecto" required>

            <label>Resumen proyecto:</label><br>
            <textarea name="RESUMEN_PONENCIA"> Escribe tu resumen aquí...</textarea>
            <br>
            <input type="submit" value="Enviar"><br>
            <img class="salir-formulario" src="img/cerrar.png" onclick="ocultarp()">
          </form>
        </div>
      </section>


      <!--FORMULARIO CHARLA-->
      <section>
        <div id="formularios-j">
          <form class="primer-formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <label>Nombre:</label>
            <input type="text" name="NOMBRE_CHARLA" placeholder="Escribe tu nombre" required>

            <label>Apellido:</label>
            <input type="text" name="APELLIDO_CHARLA" placeholder="Escriba su apellido" required>

            <label>Carrera:</label>
            <select name="ID_CARRERA">
              <option value="1">BIO</option>
              <option value="2">ITIN</option>
              <option value="3">AGRO</option>
              <option value="4">OTRO</option>
            </select>

            <label>Cédula:</label>
            <input type="number" name="CEDULA_CHARLA" placeholder="Escriba su cedula" required>

            <label>Correo:</label>
            <input type="email" name="CORREOPER_CHARLA" placeholder="Escriba su correo personal" required>

            <label>Correo Institucional:</label>
            <input type="email" name="CORREOINS_CHARLA" placeholder="Escriba su correo institucional" required>

            <br>
            <label>Título de la charla:</label>
            <input type="text" name="TITULO_CHARLA" placeholder="Escriba el titulo de su proyecto" required>

            <label>Resumen:</label><br>
            <textarea name="RESUMEN_CHARLA">Escribe tu resumen aquí...</textarea>
            <br>

            <input type="submit" value="Enviar"><br>
            <img class="salir-formulario" src="img/cerrar.png" onclick="ocultarj()">
          </form>
        </div>
      </section>

      <!--FORMULARIO POSTER-->
      <section>
        <div id="formularios-po">

          <!--Formulario Poster -->
          <form class="primer-formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <label>Nombre:</label>
            <input type="text" name="NOMBRE_POSTER" placeholder="Escribe tu nombre" required>

            <label>Apellido:</label>
            <input type="text" name="APELLIDO_POSTER" placeholder="Escriba su apellido" required>

            <label>Carrera:</label>
            <select name="ID_CARRERA">
              <option value="1">BIO</option>
              <option value="2">ITIN</option>
              <option value="3">AGRO</option>
              <option value="4">OTRO</option>
            </select>

            <label>Cédula:</label>
            <input type="number" name="CEDULA_POSTER" placeholder="Escriba su cedula" required>

            <label>Curso:</label>
            <input type="text" name="CURSO_POSTER" placeholder="Escriba su curso" required>

            <label>Correo:</label>
            <input type="email" name="CORREOPER_POSTER" placeholder="Escriba su correo personal" required>

            <label>Correo Institucional:</label>
            <input type="email" name="CORREOINS_POSTER" placeholder="Escriba su correo institucional" required>

            <br>
            <label>Titulo del poster:</label>
            <input type="text" name="TITULO_POSTER" placeholder="Escriba el titulo de su proyecto" required>

            <label>Resumen poster:</label><br>
            <textarea name="RESUMEN_POSTER">Escribe tu resumen aquí...</textarea><br>

            <label>Link del poster:</label>
            <input type="text" name="LINK_POSTER" placeholder="Ingresa el link del poster" required>

            <br><br>
            <input type="submit" value="Enviar"><br>
            <img class="salir-formulario" src="img/cerrar.png" onclick="ocultarpo()">
          </form>
        </div>
      </section>


      <!--FORMULARIO PUBLICO-->
      <section>
        <div id="formularios-pu">

          <!--Formulario Publico -->
          <form class="primer-formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <label>Nombres:</label>
            <input type="text" name="NOMBRE_PUBLICO" placeholder="Escribe tus nombres" required>

            <label>Apellidos:</label>
            <input type="text" name="APELLIDO_PUBLICO" placeholder="Escriba sus apellidos" required>

            <label>Carrera:</label>
            <select name="ID_CARRERA">
              <option value="1">BIO</option>
              <option value="2">ITIN</option>
              <option value="3">AGRO</option>
              <option value="4">OTRO</option>
            </select>

            <label>Telefono:</label>
            <input type="number" name="TELEFONO_PUBLICO" placeholder="Escriba su número celular" required>

            <label>Correo:</label>
            <input type="email" name="CORREO_PUBLICO" placeholder="Escriba su correo" required>
            <br>
            <input type="submit" value="Enviar"><br>
            <img class="salir-formulario" src="img/cerrar.png" onclick="ocultarpu()">
          </form>
        </div>
      </section>
      </br>

<!--Proyectos ITIN-->
        <div id="campo-ponencia">
        <p id="abierto-ponencia">&nbsp;PONENCIAS</p>    
            <?php
                $query4 = 'SELECT * FROM ponente_ponencia';
                $result = mysqli_query($conn,$query4);
                
                if($result->num_rows >= 0){
                  while($row = $result -> fetch_assoc()){
                    echo '<div class="boxes1">';
                    echo '<div class="ponenc">';
                    echo '<strong> '. $row['TITULO_PONENCIA'] .'</strong>' . '</br>' ;
                    echo $row['RESUMEN_PONENCIA']. '</br>' ;
                    echo '</div>';       
                    echo '</div>';              
                  }
                  $result -> free();
                  }else{
                  echo '<p><em> No existe ponente registrado </em></p>';
                }
                echo'</div>';
            ?>
        </div>

      
          <!--Proyectos POSTER-->
          <div id="campo-poster">
            <p id="abierto-poster">&nbsp; PÓSTER</p>
            <?php
                $query5 = 'SELECT * FROM ponente_poster';
                $resultado = mysqli_query($conn,$query5);
                
                if($resultado->num_rows >= 0){
                  while($row = $resultado -> fetch_assoc()){
                    echo '<div class="boxes2">';
                    echo '<div class="poster">';
                    echo '<strong> '. $row['TITULO_POSTER'] .'</strong>' . '</br>' ;
                    echo $row['RESUMEN_POSTER']. '</br>' ;
                    echo '</div>';       
                    echo '</div>';              
                  }
                  $resultado -> free();
                  }else{
                  echo '<p><em> No existe ponente registrado </em></p>';
                }
                echo'</div>';
            ?>
          </div>

          <!--Proyectos CHARLA-->
          <div id="campo-charla">
            <p id="abierto-charla">&nbsp; CHARLAS MAGISTRALES</p>
            <?php
                $query6 = 'SELECT * FROM ponente_charla';
                $resultados = mysqli_query($conn,$query6);
                
                if($resultados->num_rows >= 0){
                  while($row = $resultados -> fetch_assoc()){
                    echo '<div class="boxes3">';
                    echo '<div class="charla">';
                    echo '<strong> '. $row['TITULO_CHARLA'] .'</strong>' . '</br>' ;
                    echo $row['RESUMEN_CHARLA']. '</br>' ;
                    echo '</div>';       
                    echo '</div>';              
                  }
                  $resultados -> free();
                  }else{
                  echo '<p><em> No existe ponente registrado </em></p>';
                }
                echo'</div>';
            ?>
          </div>
        </div>
      </section><br />

    </main>

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
    <script src="js/acordeon.js"></script>
    <script src="js/interacciones.js"></script>
    <script src="js/cuenta.js"></script>

</body>

</html>