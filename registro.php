<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="icons/icomoon.css">
	<link rel="stylesheet" href="assets/css/estilos.css">

</head>

<body>

	<main>

		<navbar class="navbar fixed-left navbar-expand-lg navbar-white bg-dark p-1px">
			<a href="principal.php" type="button" class="btn btn-primary mt-1">Inicio</a>
		</navbar>

		<section class="boxContacto p-3" id="linkContacto">
			<h3 class="p-0">Registro en Línea</h3>

			<div class="container contacto p-3">

				<form id="miForm" name="" action="./registro.php" method="POST">

					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail"><b>Cédula</b></label>
							<input type="cedula" name="sucedula" class="form-control" id="inputEmail" maxlength="10" placeholder="Digita tu cedula" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputName"><b>Nombre</b></label>
							<input type="text" name="sunombre" class="form-control" id="inputName" placeholder="Digita tu nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre'] ?>" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputName"><b>Apellido</b></label>
							<input type="text" name="suapellido" class="form-control" id="inputLastName" placeholder="Digita tu apellido" value="<?php if (isset($_POST['apellido'])) echo $_POST['apellido'] ?>" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail"><b>Email</b></label>
							<input type="email" name="suemail" class="form-control" id="inputEmail" placeholder="Digita tu correo" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" required>
						</div>
						<div class="form-group col-md-6">
							<label for="inputName"><b>Sexo</b></label>
							<select class="form-control" name="susexo" value="<?php if (isset($_POST['sexo'])) echo $_POST['sexo'] ?>" required>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputName"><b>Fecha Nacimiento</b></label>
							<input name="fechanaci" type="date" class="form-control" id="inputName" value="<?php if (isset($_POST['fechanaci'])) echo $_POST['fechanaci'] ?>" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputName"><b>Teléfono</b></label>
							<input type="text" name="sutelefono" class="form-control" id="inputLastName" maxlength="10" placeholder="Digita tu telefono" value="<?php if (isset($_POST['telefono'])) echo $_POST['telefono'] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputName"><b>Dirección</b></label>
							<input type="text" name="sudireccion" class="form-control" id="inputName" placeholder="Digita tu direccion" value="<?php if (isset($_POST['direccion'])) echo $_POST['direccion'] ?>" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputName"><b>Ciudad</b></label>
							<input type="text" name="suciudad" class="form-control" id="inputLastName" placeholder="Digita tu ciudad" value="<?php if (isset($_POST['ciudad'])) echo $_POST['ciudad'] ?>" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputName"><b>Usuario</b></label>
							<input type="text" name="suusuario" class="form-control" id="inputName" placeholder="Digita tu usuario" value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputLastName"><b>Contraseña</b></label>
							<input type="password" name="suclave" class="form-control" id="inputLastName" placeholder="Digita tu contraseña" value="<?php if (isset($_POST['clave'])) echo $_POST['clave'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail"><b>Cargo</b></label>
						<select class="form-control" name="cargo">
							<option value="2">Paciente</option>
						</select>

					</div>

					<button type="submit" name='registro' class="btn btn-success">Registrar</button>

				</form>

				<!--<div class="d-grid gap-1 d-md-flex justify-content-md-end ml-3">
					<a href="" class="btn btn-success me-md-2" type="button">Cancelar</a>
					<a href="" class="btn btn-primary ml-5" type="button">Guardar Registro</a>
				</div>-->
			</div>
		</section>
	</main>

	<footer class="footer bg-warning">
		<div class="boxTextFooter">
			<p class="text-primary">@Copyright<a target="_blank" class="text-dark"> Hospital Básico El oro 2022</a></p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="assets/js/new/dataApi.js"></script>
	<script src="assets/js/new/app.js"></script>


</body>

</html>


<?php

require './vista/config/conexion3.php';

if (isset($_POST['sunombre'])) {
	$cedula = $_POST['sucedula'];
	$nombrep = $_POST['sunombre'];
	$apellidop = $_POST['suapellido'];
	$correo = $_POST['suemail'];
	$sexo = $_POST['susexo'];
	$fechanaci = $_POST['fechanaci'];
	$telefono = $_POST['sutelefono'];
	$direccion = $_POST['sudireccion'];
	$ciudad = $_POST['suciudad'];
	$usuario = $_POST['suusuario'];
	$cargo = $_POST['cargo'];
	$clave = $_POST['suclave'];

	$query = $connect->query("select * from paciente where nombrep='$nombrep'");



	if ($data == false) {
		$errMsg = "Usuario $usuario no encontrado.";
	} else {

		if ($clave == $data['clave']) {

			$_SESSION['id'] = $data['id'];
			$_SESSION['nombre'] = $data['nombre'];
			$_SESSION['cedula'] = $data['cedula'];
			$_SESSION['usuario'] = $data['usuario'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['clave'] = $data['clave'];
			$_SESSION['cargo'] = $data['cargo'];
			$_SESSION['telefono'] = $data['telefono'];


			if ($_SESSION['cargo'] == 1) {
				header('Location: vista/admin/admin.php');
			} else if ($_SESSION['cargo'] == 2) {
				header('Location: vista/user/user.php');
			}


			exit;
		} else
			$errMsg = 'Contraseña incorrecta.';
	}

	if ($query->num_rows > 0) {

?>
		<span>Username already exist.</span>
	<?php
	} elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $usuario)) {
	?>
		<span style="font-size:11px;">Invalid username. Space & Special Characters not allowed.</span>
	<?php
	} elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $clave)) {
	?>
		<span style="font-size:11px;">Invalid password. Space & Special Characters not allowed.</span>
	<?php
	} else {
		$mclave = md5($clave);
		$connect->query("insert into paciente (cedula,nombrep,apellidop,correo, sexo,fechanaci,telefono,direccion,ciudad,usuario, clave, cargo) values ('$cedula','$nombrep','$apellidop','$correo','$sexo','$fechanaci','$telefono','$direccion','$ciudad','$usuario','$mclave','$cargo')");

		if ($query != null) {
			print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='./login.php';</script>";
		}
	?>
		<span>Sign up Successful.</span>
<?php
	}
}
?>