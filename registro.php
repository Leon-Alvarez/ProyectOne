<?php
//Recuperar e insertar datos

if(isset($_POST['btn'])){
    $Nombre=$conecta->real_scape_string($_POST['Nombre']);
    $Apellido=$conecta->real_scape_string($_POST['Apellido']);
    $Direccion=$conecta->real_scape_string($_POST['Direccion']);
    $Telefono=$conecta->real_scape_string($_POST['Telefono']);
    $Fecha=$conecta->real_scape_string($_POST['Fecha']);
    $Email=$conecta->real_scape_string($_POST['Email']);

if($Nombre==""||$Apellido==""||$Direccion==""||$Telefono==""||$Fecha==""||$Email==""){
    $Alert="Alguno de los datos estan vacios";
}
else{
    $registro="INSERT INTO Usuario(Nombre,Apellido,Direccion,Telefono,Fecha,Email) VALUES ('$Nombre','$Apellido','$Direccion','$Telefono','$Fecha','$Email')";
    $registros=$conecta->query($registro);
if($registros>0){
    echo "Registro exitoso";
}
else{
    echo "Error al registrarse";
}
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title> Registros a la BD </title>
</head>
<body>
<?php include 'include/conecta.php'?>
<?php include "include/navbar.php"; ?>
<?php include "include/menu.php"; ?>
    <div class="container col-6 border shadow p-2">
        <div class="row text-center">
            <h1 class="text-succes">Registro</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['PHP_SELF']?>" nethod="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="Direccion" class="form-control">Direccion</textarea>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="Telefono" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="Date" name="Fecha" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="Email" name="Email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <input class="container" class="text-center" type="submit" name="Registro" value="Registro" class="btn btn-sm btn-block btn-succes">
            </div>
        </div>

    </form>
    </div>

</body>
</html>