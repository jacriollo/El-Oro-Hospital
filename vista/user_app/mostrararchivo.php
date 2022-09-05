


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
			<!-- Logo Header 
			<div class="logo-header" data-background-color="blue">
				
				<a href="../user/user.php" class="logo">
					<img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>-->
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
			<div class="container-fluid">
					<div class="user">							
							<div class="info">
								<a class="text-white" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
									<span>
									<?php  echo ucfirst($_SESSION['nombre']); ?><br>
										<span class="user-level">Área Pacientes</span>									
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
											<span class="sub-item text-white" >Mostrar1</span>
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
				<!--<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">0</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 0 new notification</div>
								</li>
								<li>
									
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
					
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/mujer.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../../assets/img/mujer.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php // echo ucfirst($_SESSION['nombre']); ?></h4>
												<p class="text-muted">Customers</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../../cerrarSesion.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>-->
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar 
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/mujer.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php // echo ucfirst($_SESSION['nombre']); ?>
									<span class="user-level">Customers</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									
									<li>
										<a href="../../cerrarSesion.php">
											<span class="link-collapse">Logout</span>
										</a>

									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
						
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Home</p>
								<span class="caret"></span>
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Citas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									
									
									<li>
										<a href="mostrar.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>-->
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Exámenes</h4>						
					</div>
					<div class="row">
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Paciente:    <?php  echo ucfirst($_SESSION['nombre']); ?>  </h4>
										
										<a href="#addRowModal" class="btn btn-primary btn-round ml-auto" data-toggle="modal">Nuevo</a>
										<?php include('agregar.php'); ?>
									</div>
									<!--<div class="card-tools">
											<a href="../vista/appointment/reporte.php" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export
											</a>
											
										</div>-->
					<div class="card-body">		
								<div class="table-responsive">
							<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<!--<th>#</th>-->
													<th>Número de cita</th>
													<th>Médicos</th>
													<th>Especialidad</th>
													
													
													<!--<th style="width: 2%" align="center">Acción</th>-->
												</tr>
											</thead>
											<!--<tfoot>
												<tr>
													<th>#</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Paciente</th>
													<th>Médico</th>
													<th>Consultorio</th>
													<th>Estado</th>
													<th>Action</th>
												</tr>
											</tfoot>-->
											
											
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
									
									<tr>
										<td><?php echo $row['codcit'];?></td>
										<td><?php echo $row['nombre']; ?> &nbsp;<?php echo $row['apellido']; ?></td>																		
										<td><?php echo $row ['nombrees'];?></td>
										<!--<td><?php // echo $row ['decripcion'];?></td>-->
										
										
							   
										<!--<td>-->
									<?php    if($row['estado']==1)  { ?> 
									<!--<form  method="get" action="javascript:activo('<?php // echo $row['codcit']; ?>')">
										
										<span class="text-success pl-3">Atendido</span>
									</form>-->
									<?php  }   else {?> 

									

									<!--<form  method="get" action="javascript:inactivo('<?php // echo $row['codcit']; ?>')"> 
										<button type="submit" class="btn btn-danger btn-xs">Cargar</button>
									</form>-->
									<?php  } ?>                         
									<!--</td>-->
                              		<!--<td>-->
									  	
									 <!-- <button class="btn btn-primary" type="submit">Guardar</button>-->
										<!--<div class="form-button-action">		glyphicon .glyphicon-download											
											<button href="#deleteRowModal=<?php // echo $row['codcit'];?>" class="btn btn-link btn-danger btn-lg" data-toggle="modal"  title="" data-original-title="Delete Task" data-target="#deleteRowModal<?php // echo $row['codcit']; ?>">
												<i class="fa fa-trash"></i>						
											</button>													
										</div>-->
									<!--</td>-->
									<?php // include('editar.php'); ?>								
									</tr>
									<?php
									}
									}
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

	<!--   Core JS Files   -->

	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
	
	  	<script>
	function activo(codcit)
{
	var id=codcit;
	$.ajax({
        type:"GET",
		url:"../assets/ajax/editar_estado_activo_cita.php?id="+id,
    }).done(function(data){
        window.location.href ='../folder/appointment.php';
    })

}

// Editar estado inactivo
function inactivo(codcit)
{
	var id=codcit;
	$.ajax({
		type:"GET",
		url:"../assets/ajax/editar_estado_inactivo_cita.php?id="+id,
    }).done(function(data){
        window.location.href ='../folder/appointment.php';
    })
}

	
	</script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!--------------------------------script nuevo--------------------------------------------------->

<?php
if(isset($_POST["agregar"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "el oro";

// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Revisamos la conexión
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
$coddoc=$_POST['coddoc'];
$codpaci=$_POST['codpaci'];
$decripcion=$_POST['decripcion'];
$urlpdf=$_POST['urlpdf'];



// Realizamos la consulta para saber si coincide con uno de esos criterios
//$sql = "select * from cita where codcit='$codcit'";
$sql = "SELECT * FROM `examen` WHERE examen.codpaci='$codpaci'";
$result = mysqli_query($conn, $sql);
?>


<?php
 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
        // Si es mayor a cero imprimimos que ya existe el usuario
      
        if($result){
   ?>

        <script type="text/javascript">

Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Ya existe el registro a agregar!'
 
})


        </script>

    <?php
    }
  
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
//$sql2 = "INSERT INTO cita (dates,hour,codpaci,coddoc,codespe,estado)VALUES ('$dates','$hour','$codpaci','$coddoc','$codespe','0')";
$sql2 = "INSERT INTO examen (coddoc,codpaci,descripcion,urlpdf)VALUES ('$coddoc','$codpaci','$decripcion','$urlpdf')";


if (mysqli_query($conn, $sql2)) {
      
       if($sql2){
   ?>

        <script type="text/javascript">
             
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Agregado correctamente',
  showConfirmButton: false,
  timer: 1500
}).then(function() {
            window.location = "../folder/appointment.php";
        });
        </script>

    <?php
    }
    else{
       ?>
       <script type="text/javascript">
        Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'No se pudo guardar!'
 
})
       </script>
       <?php

    }
    
} else {
      
       echo "Error: " . $sql2 . "" . mysqli_error($conn);
}

}
// Cerramos la conexión
$conn->close();

}
?>
	
</body>
</html>