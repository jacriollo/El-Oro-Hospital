<?php
require 'assets/db/config.php';
if (isset($_POST['login'])) {
  $errMsg = '';

  // Get data from FORM
  $usuario = $_POST['usuario'];

  $clave = MD5($_POST['clave']);

  if ($usuario == '')
    $errMsg = 'Digite su usuario';
  if ($clave == '')
    $errMsg = 'Digite su contraseña';

  if ($errMsg == '') {
    try {
      $stmt = $connect->prepare('SELECT id, nombre, usuario, email,clave, cargo FROM usuarios WHERE usuario = :usuario UNION SELECT codpaci, nombrep,apellidop, usuario, clave, cargo FROM paciente WHERE usuario = :usuario UNION SELECT coddoc, nombre,apellido, usuario, clave, cargo FROM doctor WHERE usuario = :usuario');


      $stmt->execute(array(
        ':usuario' => $usuario


      ));
      $data = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($data == false) {
        $errMsg = "Usuario $usuario no encontrado.";
      } else {
        if ($clave == $data['clave']) {

          $_SESSION['id'] = $data['id'];
          $_SESSION['nombre'] = $data['nombre'];
          $_SESSION['usuario'] = $data['usuario'];
          $_SESSION['email'] = $data['email'];
          $_SESSION['clave'] = $data['clave'];
          $_SESSION['cargo'] = $data['cargo'];


          if ($_SESSION['cargo'] == 1) {
            header('Location: vista/admin/admin.php');
          } else if ($_SESSION['cargo'] == 2) {
            header('Location: vista/user/user.php');
          } else if ($_SESSION['cargo'] == 3) {
            header('Location: vista/user/user3.php');
          } else if ($_SESSION['cargo'] == 4) {
            header('Location: vista/user/user4.php');
          } else if ($_SESSION['cargo'] == 5) {
            header('Location: vista/user/user5.php');
          }


          exit;
        } else
          $errMsg = 'Contraseña incorrecta.';
      }
    } catch (PDOException $e) {
      $errMsg = $e->getMessage();
    }
  }
}


?>

<!--<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login 4</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css " href="assets/css/style.css">
  <link rel="stylesheet" type="text/css " href="assets/css/css/all.min.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <style>
    .slider {
      background: url("assets/img/bg-3.png");
      background-size: cover;
      background-position: center;
      height: 700px;
      top: -17px;
    }
  </style>
</head>

<body>

  <div class="">

    <div class="container-fluid slider text-white d-flex flex-column justify-content-center align-items-center">

      <!--CONTENEDOR DE LOGIN
      <div class="contenedor">

        <div class="contenido-login">

          <form id="form_ingreso" name="form_ingreso" method="POST" role="form">
            <table width="800" border="0" align="center">
              <tr>
                <td width="400" class="">
                  <div align="right" class="Estilo2 Estilo4">Usuario</div>
                </td>
                <td width="180"><label>
                    <input type="text" name="usuario" value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" placeholder="">

                    <!--<input name="cedula" type="text" id="cedula" onkeyup="this.value=this.value.replace();" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" size="20" maxlength="10" />-->

<!--</label></td>
              </tr>

              <tr>
                <td>
                  <div align="right" class="Estilo3">Contraseña</div>
                </td>
                <td><label>
                    <!--<input name="contrasena" type="password" id="contrasena" onkeyup="this.value=this.value.replace();" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" size="20" maxlength="10" />-->
<!--<input type="password" required="true" name="clave" value="<?php if (isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" placeholder="">

                  </label></td>
              </tr>

              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>

              <tr>
                <td colspan="2">
                  <button class="btn btn-danger" name='login' type="submit"> Iniciar sesion</button>
                </td>
              </tr>

            </table>

          </form>

          <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>

        </div>
      </div>



    </div>




  </div>




</body>

</html>-->



<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="icons/icomoon.css">
  <link rel="stylesheet" href="assets/css/estilos.css">


  <style>
    .slider {
      background: url("assets/img/bg-3.png");
      background-size: cover;
      background-position: center;
      height: 500px;
      width: 150%;
      top: -25px;
    }
  </style>

</head>

<body>

  <main>

    <navbar class="navbar fixed-left navbar-expand-lg navbar-white bg-dark p-1px">
      <a href="principal.php" type="button" class="btn btn-primary mt-1">Inicio</a>
    </navbar>

    <section class="boxContacto p-3 bg-info" id="linkContacto">

      <h3 class="p-3 text-white">LOGIN</h3>

      <div class="container contacto p-3 bg-info">

        <form id="miForm" name="form_ingreso" action="" method="POST" role="form">

          <div class="form-group col-md-10 text-white">
            <label for="inputName"><b>Usuario</b></label>
            <input type="text" name="usuario" class="form-control" id="inputName" value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" required>
          </div>

          <div class="form-group col-md-10 text-white">
            <label for="inputLastName"><b>Contraseña</b></label>
            <input type="password" name="clave" class="form-control" id="inputLastName" value="<?php if (isset($_POST['clave'])) echo $_POST['clave'] ?>" required>
          </div>

          <button type="submit" name='login' class="btn btn-danger ml-3 mt-3">Iniciar sesion</button>

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