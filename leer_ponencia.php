<?php 
require_once "conexion.php";
if (isset($_GET['id']) && !empty(trim($_GET["id"]))) {
    $query = 'SELECT * FROM ponente_ponencia WHERE ID_PONENCIA=?';
    if($stmt = $conn->prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows == 1){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $nombre_po = $row['NOMBRE_PONENCIA'];
                $apellido_po = $row['APELLIDO_PONENCIA'];
                $cedula_po = $row['CEDULA_PONENCIA'];
                $curso_po = $row['CURSO_PONENCIA'];
                $correoper_po = $row['CORREOPER_PONENCIA'];
                $correoins_po = $row['CORREOINS_PONENCIA'];
                $link_po = $row['LINK_PONENCIA']; 
                $titulo_po = $row['TITULO_PONENCIA'];
                $resumen_po = $row['RESUMEN_PONENCIA'];
                $fecha_po = $row['FECHAPRE_PONENCIA'];
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
            <p><?php echo $nombre_po . " " . $apellido_po ?></p>
        </div>
        <div>
            <label>Cédula</label>
            <p><?php echo $cedula_po ?></p>
        </div>
        <div>
            <label>Curso</label>
            <p><?php echo $curso_po ?></p>
        </div>

        <div>
            <label>Correo Personal</label>
            <p><?php echo $correoper_po ?></p>
        </div>

        <div>
            <label>Correo Institucional</label>
            <p><?php echo $correoins_po ?></p>
        </div>

        <div>
            <label>Link Sala</label>
            <p><?php echo $link_po ?></p>
        </div>
        <div>
            <label>Titulo</label>
            <p><?php echo $titulo_po ?></p>
        </div>
        <div>
            <label>Resumen Enviado</label>
            <p><?php echo $resumen_po ?></p>
        </div>
        <div>
            <label>Fecha Programada</label>
            <p><?php echo $fecha_po ?></p>
        </div>
        <button><a href="indexadmin.php">Atrás</button>
    </div>

</section>
</body>
</html>