<?php 
require_once "conexion.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['NOMBRE_ADMIN']) && isset($_POST['CEDULA_ADMIN'])
    && isset($_POST['USUARIO_ADMIN'])&& isset($_POST['CONTRASENIA_ADMIN'])){
        $query = "INSERT INTO datos_admi (NOMBRE_ADMIN, CEDULA_ADMIN,
        USUARIO_ADMIN, CONTRASENIA_ADMIN) VALUES (?, ?, ?, ?)";
        if ($stmt = $conn->prepare($query)){
            $stmt -> bind_param(ssss, $_POST['NOMBRE_ADMIN'], $_POST['CEDULA_ADMIN'],
            $_POST['USUARIO_ADMIN'], $_POST['CONTRASENIA_ADMIN']);
            if($stmt -> execute()){
                header("location: administrador.php");
                exit();
            }else{
                echo "Error! Por favor intente más tarde";
            }
            $stmt -> close();
        }
    }
    $conn -> close();
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
     <!----FORMULARIO REGISTRO --->
 <br><br>
 <form class="formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h1>Registrate</h1>
    <div class="contenedor">

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Nombre completo" id="NOMBRE_ADMIN" name="NOMBRE_ADMIN">
        </div>
        
        <div class="input-contenedor">
            <i class="fas fa-address-card icon"></i>
            <input type="text" placeholder="Cedula" id="CEDULA_ADMIN" name="CEDULA_ADMIN">
        </div>
        
        <div class="input-contenedor">
            <i class="fas fa-user-tie icon"></i>
            <input type="text" placeholder="Usuario" id="USUARIO_ADMIN" name="USUARIO_ADMIN">
        </div>
        
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contrasenia" id="CONTRASENIA_ADMIN" name="CONTRASENIA_ADMIN">
        </div>
        
        <input type="submit" value="Registrate" class="button" id="registrar"  name="registrar">
        <p> Al registrarte, aceptas todas las Condiciones de uso y Politicas de privacidad.</p>
        <p> ¿Ya tienes una cuenta? <a class="link" href="administrador.php">Iniciar Sesion</a></p>
     
     
     </div> 
</form>
</body>
</html>