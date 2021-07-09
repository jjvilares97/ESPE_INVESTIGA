<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPE INVESTIGA | Formatos</title>
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
          <h2>Conoce los formatos para postularte<h2>
            <!--Contenido del Wave-->
            <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 35%; width: 100%;"><path d="M-8.17,91.28 C149.99,150.00 319.69,26.14 503.10,111.02 L501.41,155.42 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
            </div>
        </div>
    </section>
  </header>
  <main>
 
<!-- Formato para resumen -->
<h2>Formatos para Resumen</h2>
  <section class="info">
    <img src="img/formatos/resumen.png">
    <div class="info_contenido">
      <p>El resumen se redacta en tercera persona y en pasado haciendo referencia a la investigación realizada. 
        Debe contener de 350 a 400 palabras como máximo, no debe incluir ecuaciones o referencias. 
        Use la fuente Times New Roman en tamaño 12. El contenido del resumen debe estar completamente justificado.
         Elimine las palabras y oraciones innecesarias.  De énfasis a las conclusiones y resultados. Solo se permiten
         hasta un maximo de 3 participantes incluidos en el resumen, pero para enviar se debe tener en cuenta a un solo 
         integrante  <br><br>
      </p>

      <div class="boton">
        <a href="formatos/resumen.pdf" download="resumen">
          <button>Descargar Archivo</button>
        </a>
      </div> 

    </div>
  </section>

<!--Formato para ponencia-->
<h2>Formatos para Ponencia</h2>
  <section class="info">
    <img src="img/formatos/presentacion.png">
    <div class="info_contenido">
      <p>Para la presentación de cada ponencia, se debe tener en cuenta el formato proporcionado dentro de 
        la sección de formatos.  El titulo debe ser claro, conciso y los más corto posible con una letra legible 
        de preferencia Times New Roman en tamaño 12. El contenido del resumen debe estar completamente justificado.
        Elimine las palabras y oraciones innecesarias. Trate de incluir imágenes que vayan en contexto con el 
        contenido que esta presentando. No se acptan imágenes borrosas. Trate de justificar cada imagen agregando 
        enlaces de ser necesario.<br><br>
      </p>
      <div class="boton">
        <a href="formatos/presentacion.pptx" download="presentacion">
          <button>Descargar Archivo</button>
        </a>
      </div> 

    </div>
  </section>

<!--Formato para poster-->
<h2>Formatos para Póster</h2>
  <section class="info">
    <img src="img/formatos/poster.png">
    <div class="info_contenido">
      <p>Para la presentación del póster se debe considerar el formato que se encuntra en la sección de formatos. 
        El título debe ser claro, conciso y los más corto posible con una letra legible 
        de preferencia Times New Roman en tamaño 12. Las medidas establecidas para el póster físico son 
        84 cm de ancho, 119 cm de alto, con un margen de 5cm por cada lado. Trate de ser lo más explícito posible
        incluyendo solo el contenido más esencial. En caso de ser una empresa externa se debe incluir el logo, caso 
        contrario solo se incluye los logos previamente establecidos en el formato.  <br><br>
      </p>

      <div class="boton">
        <a href="formatos/poster.pptx" download="poster">
          <button>Descargar Archivo</button>
        </a>
      </div> 

    </div>
  </section>


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
<script src="js/interacciones.js"></script>
<script src="js/scripts.js"></script>


</body>
</html>