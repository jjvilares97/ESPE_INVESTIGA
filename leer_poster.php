<?php 
require_once "conexion.php";
if (isset($_GET['id']) && !empty(trim($_GET["id"]))) {
    $query = 'SELECT * FROM ponente_poster WHERE ID_POSTER=?';
    if($stmt = $conn->prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows == 1){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $nombre = $row['NOMBRE_POSTER'];
                $apellido = $row['APELLIDO_POSTER'];
                $cedula = $row['CEDULA_POSTER'];
                $curso = $row['CURSO_POSTER'];
                $correoper = $row['CORREOPER_POSTER'];
                $correoins = $row['CORREOINS_POSTER'];
                $titulo = $row['TITULO_POSTER'];
                $resumen = $row['RESUMEN_POSTER'];
                $fecha = $row['FECHAPRE_POSTER'];
                $link = $row['LINK_POSTER']; 
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
    $conn ->close();
}else{
    echo "Error! Intente más tarde.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Datos Cliente</title>
</head>

<link rel="stylesheet" type="text/css" href="css/styles-leer.css">
<body>
<section class="contenido_tabla">
    <div>
        <h2>DATOS DEL PONENTE</h2>
    </div>
    <div class="datos">
        <div>
            <label>Nombre</label>
            <p><?php echo $nombre . " " . $apellido ?></p>
        </div>
        <div>
            <label>Cédula</label>
            <p><?php echo $cedula ?></p>
        </div>
        <div>
            <label>Curso</label>
            <p><?php echo $curso ?></p>
        </div>

        <div>
            <label>Correo Personal</label>
            <p><?php echo $correoper ?></p>
        </div>

        <div>
            <label>Correo Institucional</label>
            <p><?php echo $correoins ?></p>
        </div>
        <div>
            <label>Titulo</label>
            <p><?php echo $titulo ?></p>
        </div>
        <div>
            <label>Resumen Poster</label>
            <p><?php echo $resumen ?></p>
        </div>
        
        <div>
            <label>Fecha Programada</label>
            <p><?php echo $fecha ?></p>
        </div>
        <div>
            <label>Link Poster</label>
            <p><?php echo $link ?></p>
        </div>
        <button><a href="indexadmin.php">Atrás</button>
    </div>
</section>

</body>
</html>