<?php 

    require_once 'conexion.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['USUARIO_ADMIN'])&& isset($_POST['CONTRASENIA_ADMIN'])){
        $query = "SELECT * FROM datos_admi WHERE USUARIO_ADMIN = '".$_POST['USUARIO_ADMIN']."' AND CONTRASENIA_ADMIN='".$_POST['CONTRASENIA_ADMIN']."'";
        if($stmt = $conn->prepare($query)){
            if($stmt->execute()){
                header('location: indexadmin.php');
                exit();
            }else{
                echo "Error! Revise la conexión a la base de datos.";
                exit();
            }

    }
    
    
}
$conn->close();
}






  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6d4c14e273.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles-admi.css">
    <title>ESPE</title>
    
</head>
<body>
</br></br>
<form class="formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h1>Iniciar Sesion</h1>
    <div class="contenedor">
        
        <div class="input-contenedor">
            <i class="fas fa-user-tie icon"></i>
            <input type="text" placeholder="Usuario" id="USUARIO_ADMIN" name="USUARIO_ADMIN">
        </div>
        
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contrase&ntilde;a" id="CONTRASENIA_ADMIN" name="CONTRASENIA_ADMIN">
        </div>
            
        <input type="submit" value="Inicar Sesion" class="button">
        <p> Al registrarte, aceptas todas las Condiciones de uso y Politicas de privacidad.</p>
        <p> ¿No tienes una cuenta? <a class="link" href="registro.php">Registrate</a></p>

     
     </div> 
</form>
</body>
</html>