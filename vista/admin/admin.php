<?php
session_start();

if (!isset($_SESSION['cargo']) == 1) {
	header('location: ../../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Hospital El Oro</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../../assets/css/fonts.min.css']
			},
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

			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="user">
						<!--<div class="avatar-sm float-left mr-2">
								<img src="../../assets/img/mujer.png" alt="..." class="avatar-img rounded-circle">
							</div>-->
						<div class="info">
							<a class="text-white" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo ucfirst($_SESSION['nombre']); ?><br>
									<span class="user-level">Administrador</span>
								</span>
							</a>
						</div>
					</div>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submenú médicos -->
					<li class="nav-item">
						<a data-toggle="collapse" href="#forms" class="text-white">
							<i class="fas fa-user-md"></i> <!-- -->
							<p>Médicos</p>
							<!--<span class="caret"></span>-->
						</a>
						<div class="collapse" id="forms">
							<ul class="nav nav-collapse">
								<li>
									<a href="../../folder/doctor.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submenu Área médicas -->
					<li class="nav-item">
						<a data-toggle="collapse" href="#tables" class="text-white">
							<i class="fas fa-table"></i>
							<p>Especialidad</p>
							<!--<span class="caret"></span>-->
						</a>
						<div class="collapse" id="tables">
							<ul class="nav nav-collapse">
								<li>
									<a href="../../folder/specialty.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submenú Citas -->
					<li class="nav-item">
						<a data-toggle="collapse" href="#base" class="text-white">
							<i class="fas fa-layer-group"></i>
							<p>Citas</p>
						</a>
						<div class="collapse" id="base">
							<ul class="nav nav-collapse">

								<li>
									<a href="../../folder/appointment.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!--Submenú Pacientes-->
					<li class="nav-item">
						<a data-toggle="collapse" href="#sidebarLayouts" class="text-white">
							<i class="fas fa-male"></i>
							<p>Pacientes</p>
						</a>
						<div class="collapse" id="sidebarLayouts">
							<ul class="nav nav-collapse">
								<li>
									<a href="../../folder/customers.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->

					<!--Submenú Usuarios-->
					<li class="nav-item">
						<a data-toggle="collapse" href="#user" class="text-white">
							<i class="fas fa-user"></i>
							<p>Usuarios</p>
						</a>
						<div class="collapse" id="user">
							<ul class="nav nav-collapse">
								<li>
									<a href="../../folder/usuarios.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->

					<!--Submenú Enfermedades-->
					<!--<li class="nav-item">
						<a data-toggle="collapse" href="#calendar" class="text-white">
							<i class="fas fa-calendar-alt"></i>
							<p>Enfermedades</p>
						</a>
						<div class="collapse" id="calendar">
							<ul class="nav nav-collapse">
								<li>
									<a href="../../folder/enfermedades.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>-->

					<!-- Submenú Usuarios-->

					<!--<a  class="nav-item nav-link" href=""></a> 
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#user" class="text-white">
								<i class="fas fa-user"></i>
								<p>Exámenes</p>									
							</a>
							<div class="collapse" id="user">
								<ul class="nav nav-collapse">
									<li>
										    <a href="../../folder/examen.php">
											<span class="sub-item text-white">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>-->
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->

					<li class="nav-item">
						<a data-toggle="collapse" href="#archway" class="text-white">
							<!--<i class="fas fa-calendar-alt"></i>-->
							<i class="fas fa-archway"></i>
							<p>Reportes</p>
						</a>
						<div class="collapse" id="archway">
							<ul class="nav nav-collapse">
								<li>
									<a href="../../folder/reportes.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<!--<a  class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submenú horarios
						<li class="nav-item">
							<a data-toggle="collapse" href="#calendar" class="text-white">
								<i class="fas fa-calendar-alt"></i>
								<p>Horarios</p>								
							</a>
							<div class="collapse" id="calendar">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../folder/horario.php">
											<span class="sub-item text-white">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>-->

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<!--<div class="avatar-sm">
									<img src="../../assets/img/mujer.png" alt="..." class="avatar-img rounded-circle">
								</div>-->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../../cerrarSesion.php" type="button" class="btn btn-outline-dark">Cerrar sesión</a>
						</li>


						</a>
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


		<!-- End Custom template -->
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


	<!-- Chart JS -->
	<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->


	<!-- jQuery Vector Maps -->
	<script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo.js"></script>
	<script src="../../assets/js/demo.js"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total; ?>,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total2; ?>,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total3; ?>,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>

</html>