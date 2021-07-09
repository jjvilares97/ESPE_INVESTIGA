<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once 'conexion.php';
    $query = 'DELETE FROM ponente_poster WHERE ID_POSTER=?';
    if($stmt = $conn->prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt->execute()){
            header('location: indexadmin.php');
            exit();
        }else{
            echo "Error! Revise la conexión a la base de datos.";
            exit();
        }
    }
    $stmt->close();
    $conn->close();
}else{
    echo "Error! Por favor intente más tarde.";
    exit();
}
?>