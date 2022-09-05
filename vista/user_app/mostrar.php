<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../login.php');
  }
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Citas</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>

	<div class="wrapper">
		<div class="main-header">
			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
			<div class="container-fluid">
					<div class="user">							
							<div class="info">
								<a class="text-white" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
									<span>
									<?php  echo ucfirst($_SESSION['nombre']); ?><br>
										<span class="user-level">Paciente</span>									
									</span>
								</a>								
							</div>
					</div>

						<li class="nav-item" >
							<a data-toggle="collapse" href="#forms" class="text-white">
							<i class="fas fa-layer-group"></i> <!-- -->
								<p>Citas</p>
								<!--<span class="caret"></span>-->
							</a> 
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
									<a href="../user_app/mostrar.php">
											<span class="sub-item text-white" >Mostrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables" class="text-white">
								<i class="fas fa-table"></i>
								<p>Exámenes</p>
								<!--<span class="caret"></span>-->
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
									<a href="../user_app/mostrararchivo.php">
											<span class="sub-item text-white">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>	 <!--  -->
						<a  class="nav-item nav-link" href=""></a> <!-- Espaciado -->				


						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">								
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../../cerrarSesion.php" type="button" class="btn btn-outline-dark">Cerrar sesión</a>
							</a>
						</li>
										
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">								
										</div>
									</li>									
								</div>
							</ul>
						</li>
					</ul>	
				</div>

			</nav>
			<!-- End Navbar -->
		</div>


		<div class="main-panel">

			<div class="content">

				<div class="page-inner">

					<div class="page-header">
						<h4 class="page-title">Citas</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="../vista/admin/admin.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							
							
							<li class="nav-item">
								<a href="#">Mostrar</a>
							</li>
						</ul>
					</div>
					<div class="row">
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Citas Agendadas</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>#</th>
													<th>Cédula</th>
													<th>Paciente</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Médico</th>
													<th>Especialidad</th>
													<th style="width: 10%">Estado</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<!--<th>#</th>-->
													<th>Cédula</th>
													<th>Paciente</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Médico</th>
													<th>Especialidad</th>
													<th>Estado</th>
												</tr>
											</tfoot>
											
											
										<tbody>
											<?php

										if (isset($_SESSION['id'])) {
											
											include "../config/conex.php";

											$sql = "SELECT cita.codcit, cita.dates, cita.hour, paciente.codpaci, 
																paciente.cedula, paciente.nombrep, paciente.apellidop, doctor.coddoc, doctor.cedula, doctor.nombre, 
																doctor.apellido, especialidad.codespe, especialidad.nombrees, cita.estado FROM cita INNER JOIN paciente ON 
																cita.codpaci=paciente.codpaci INNER JOIN doctor ON cita.coddoc=doctor.coddoc INNER JOIN especialidad ON 
																cita.codespe=especialidad.codespe WHERE paciente.codpaci='$id'";

											$query = mysqli_query($conex, $sql);
										?>

										<?php
													if (mysqli_num_rows($query) > 0) {
														while ($row = mysqli_fetch_assoc($query)) {
													?>
													<!--<td><?php // echo $row['codcit']; ?></td>-->
													<td><?php echo $row['cedula']; ?></td>
													<td><?php echo $row['nombrep']; ?> &nbsp;<?php echo $row['apellidop']; ?></td>

													<td><?php echo $row['dates']; ?></td>
													<td><?php echo $row['hour']; ?></td>
													
													<td><?php echo $row['nombre']; ?>&nbsp;<?php echo $row['apellido']; ?></td>
													<td><?php echo $row['nombrees']; ?></td>
													<td>
																<?php    if($row['estado']==1)  { ?> 
																<form  method="get" action="javascript:activo('<?php echo $row['codcit']; ?>')">
																	<span class="badge badge-success">Atendido</span>

																</form>
																<?php  }   else {?> 

																<form  method="get" action="javascript:inactivo('<?php echo $row['codcit']; ?>')"> 
																	
																	<span class="badge badge-danger">Pendiente</span>
																</form>
																<?php  }  ?>                         
															</td>
													<?php
															}
														} else {
															?>
															
															<div class="message">
																
																<p class="alert alert-warning">No cuenta con ninguna cita</p>
															</div>
														<?php
														}
														?>
														
												<?php
											} else {
												header('location:mostrar.php');
											}
											?>
					
										</tbody>
																							
											
										</table>
									</div>
									


								</div>
							</div>





					</div>
					
				</div>
			</div>
			
		</div>
		
	</div>
	<!--   Core JS Files   -->
	
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>

	
	 
</body>
