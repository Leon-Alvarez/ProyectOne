<?php
//Recuperar e insertar datos

if(isset($_POST['btn'])){
    $NombrePlantel=$conecta->real_scape_string($_POST['NombrePlantel']);
    $ClavePlantel=$conecta->real_scape_string($_POST['ClavePlantel']);
    $Direccion=$conecta->real_scape_string($_POST['Direccion']);
    $Telefono=$conecta->real_scape_string($_POST['Telefono']);
    $Responsable=$conecta->real_scape_string($_POST['Responsable']);

if($NombrePlantel==""||$ClavePlantel==""||$Direccion==""||$Telefono==""||$Responsable==""){
    $Alert="Alguno de los datos estan vacios";
}
else{
    $registro="INSERT INTO Usuario(NombrePlantel,ClavePlantel,Direccion,Telefono,responsable) VALUES ('$NombrePlantel','$ClavePlantel','$Direccion','$Telefono','$Responsable')";
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
    <title> Registro del Plantel </title>
</head>
<body>
    <div class="container col-6 border shadow p-2">
        <div class="row text-center">
            <h1 class="text-succes">Plantel</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['PHP_SELF']?>" nethod="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Nombre Plantel" class="form-control" placeholder="Nombre Plantel" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Clave Plantel" class="form-control" placeholder="Clave Plantel" required>
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
                <input type="text" name="Responsable" class="form-control" placeholder="Responsable" required>
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