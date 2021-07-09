<?php 
require_once "conexion.php";
if (isset($_GET['id']) && !empty(trim($_GET["id"]))) {
    $query = 'SELECT * FROM ponente_charla WHERE ID_CHARLA=?';
    if($stmt = $conn->prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows == 1){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $nombre_cha = $row['NOMBRE_CHARLA'];
                $apellido_cha = $row['APELLIDO_CHARLA'];
                $cedula_cha = $row['CEDULA_CHARLA'];
                $sala_cha = $row['SALA_CHARLA'];
                $correoper_cha = $row['CORREOPER_CHARLA'];
                $correoins_cha = $row['CORREOINS_CHARLA'];
                $titulo_cha = $row['TITULO_CHARLA'];
                $resumen_cha = $row['RESUMEN_CHARLA'];
                $fecha_cha = $row['FECHAPRE_CHARLA'];
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
<!---------------------------------------------------------- -->
<!---------------------------------------------------------- -->
    <div>
        <h2>DATOS DEL EXPOSITOR CHARLA</h2>
    </div>
    <div class="datos">
        <div>
            <label>Nombre</label>
            <p><?php echo $nombre_cha . " " . $apellido_cha ?></p>
        </div>
        <div>
            <label>Cédula</label>
            <p><?php echo $cedula_cha ?></p>
        </div>
        <div>
            <label>Curso</label>
            <p><?php echo $sala_cha ?></p>
        </div>

        <div>
            <label>Correo Personal</label>
            <p><?php echo $correoper_cha ?></p>
        </div>

        <div>
            <label>Correo Institucional</label>
            <p><?php echo $correoins_cha ?></p>
        </div>

        <div>
            <label>Titulo</label>
            <p><?php echo $titulo_cha ?></p>
        </div>

        <div>
            <label>Resumen de Charla</label>
            <p><?php echo $resumen_cha ?></p>
        </div>

        <div>
            <label>Fecha Programada</label>
            <p><?php echo $fecha_cha ?></p>
        </div>
        <button><a href="indexadmin.php">Atrás</button>
    </div>
</section>

</body>
</html>