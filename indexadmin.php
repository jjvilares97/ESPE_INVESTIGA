<?php 
    require_once 'conexion.php';
    $query = "SELECT ID_PONENCIA, ID_CARRERA, NOMBRE_PONENCIA, 
    APELLIDO_PONENCIA, CEDULA_PONENCIA, CORREOINS_PONENCIA, FECHAPRE_PONENCIA FROM ponente_ponencia";
    $result = $conn -> query($query);

    $query1 = "SELECT ID_CHARLA, ID_CARRERA, NOMBRE_CHARLA, 
    APELLIDO_CHARLA, CEDULA_CHARLA, CORREOINS_CHARLA, FECHAPRE_CHARLA FROM ponente_charla";
    $resultado = $conn -> query($query1);

    $query2 = "SELECT ID_POSTER, ID_CARRERA, NOMBRE_POSTER, 
    APELLIDO_POSTER, CEDULA_POSTER, CORREOINS_POSTER, FECHAPRE_POSTER FROM ponente_poster";
    $solucion = $conn -> query($query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles-indexadmin.css">
    <title>Administrador | ESPE-INVESTIGA</title>
</head>

<body>
<section class="contenido_tabla">
        <h2>PONENCIAS</h2>
        <div class="main-container" >
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>#Carrera</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Fecha</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                if($result->num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo '<tr>';
                        echo '<td>' . $row['ID_PONENCIA'] . '</td>';
                        echo '<td>' . $row['ID_CARRERA'] . '</td>';
                        echo '<td>' . $row['NOMBRE_PONENCIA'] . " " 
                        . $row['APELLIDO_PONENCIA'] . '</td>';
                        echo '<td>' . $row['CEDULA_PONENCIA'] . '</td>';
                        echo '<td>' . $row['CORREOINS_PONENCIA'] . '</td>';
                        echo '<td>' . $row['FECHAPRE_PONENCIA'] . '</td>';
                        echo '<td>';
                        echo '<a href="leer_ponencia.php?id='. $row['ID_PONENCIA'] .'"> Leer </a>';
                        echo '<a href="eliminar_ponencia.php?id='. $row['ID_PONENCIA'] .'"> Eliminar </a>';
                    }
                    $result -> free();
                }else{
                    echo '<p><em> No existen datos registrados </em></p>';
                }
                ?>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="contenido_tabla">
        <h2>CHARLAS</h2>
        <div class="main-container" >
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>#Carrera</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Fecha</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($resultado) && $resultado->num_rows > 0){
                    while($row = $resultado -> fetch_assoc()){
                        echo '<tr>';
                        echo '<td>' . $row['ID_CHARLA'] . '</td>';
                        echo '<td>' . $row['ID_CARRERA'] . '</td>';
                        echo '<td>' . $row['NOMBRE_CHARLA'] . " " 
                        . $row['APELLIDO_CHARLA'] . '</td>';
                        echo '<td>' . $row['CEDULA_CHARLA'] . '</td>';
                        echo '<td>' . $row['CORREOINS_CHARLA'] . '</td>';
                        echo '<td>' . $row['FECHAPRE_CHARLA'] . '</td>';
                        echo '<td>';
                        echo '<a href="leer_charla.php?id='. $row['ID_CHARLA'] .'"> Leer </a>';
                        echo '<a href="eliminar_charla.php?id='. $row['ID_CHARLA'] .'"> Eliminar </a>';
                    }
                    $resultado -> free();
                }else{
                    echo '<p><em> No existen datos registrados </em></p>';
                }
                ?>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="contenido_tabla">
        <h2>PÓSTER</h2>
        <div class="main-container" >
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>#Carrera</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Fecha</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($solucion) && $solucion->num_rows > 0){
                    while($row = $solucion -> fetch_assoc()){
                        echo '<tr>';
                        echo '<td>' . $row['ID_POSTER'] . '</td>';
                        echo '<td>' . $row['ID_CARRERA'] . '</td>';
                        echo '<td>' . $row['NOMBRE_POSTER'] . " " 
                        . $row['APELLIDO_POSTER'] . '</td>';
                        echo '<td>' . $row['CEDULA_POSTER'] . '</td>';
                        echo '<td>' . $row['CORREOINS_POSTER'] . '</td>';
                        echo '<td>' . $row['FECHAPRE_POSTER'] . '</td>';
                        echo '<td>';
                        echo '<a href="leer_poster.php?id='. $row['ID_POSTER'] .'"> Leer </a>';
                        echo '<a href="eliminar_poster.php?id='. $row['ID_POSTER'] .'"> Eliminar </a>';
                    }
                    $solucion -> free();
                }else{
                    echo '<p><em> No existen datos registrados </em></p>';
                }
                ?>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
</br></br>  </br></br>  
</body>
</html>