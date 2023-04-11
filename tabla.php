<?php  
include 'include/conecta.php';
// consulta
$consulta = "SELECT * FROM Usuario";
$guardar = $conecta->query($consulta);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/preloader.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://upkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="js/jquery-3.5.1.min.js"></script>
	<title> Tabla Dinamica </title>
</head>
<body>
<?php include "include/navbar.php"; ?>
<?php include "include/menu.php"; ?>
	   <div claas="container col-6 border shadow p-2">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h3 class="text-center"> Tabla Dinamica con la Base de Datos </h3>
				<div class="table-responsive table-hover" id="TablaConsulta">
					<table class="table">
						<thead class="text-muted">
						<th class="text-center"> Id_Usuarios </th>
							<th class="text-center"> Nombre </th>
							<th class="text-center"> Apellidos </th>
							<th class="text-center"> Direccion </th>
							<th class="text-center"> Telefono </th>
							<th class="text-center"> Fecha </th>
							<th class="text-center"> Email </th>
						</thead>
						<tbody>
							<?php while($row = $guardar ->fetch_assoc()){?>
							<tr>
								<td><?php echo $row['Id_usuario'] ?></td>
								<td><?php echo $row['nombre'] ?></td>
								<td><?php echo $row['apellidos'] ?></td>
								<td><?php echo $row['direccion'] ?></td>
								<td><?php echo $row['telefono'] ?></td>
								<td><?php echo $row['fecha_nac'] ?></td>
								<td><?php echo $row['email'] ?></td>
							</tr>
						    <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>