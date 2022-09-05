
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Registro de Pacientes</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">





						<form action="insertar.php" class="" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label for="" class="" >Nombre</label>
										<input name="nombre" type="text" class="form-control" required>

									</div>
								</div>
								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label for="">Apellido</label>
										<input name="apellido" type="text" class="form-control" required>


									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label for="">Descripción</label>
										<input name="descripcion" type="text" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label for="">Fecha</label>
										<input name="fecha" type="date" class="form-control" required>
									</div>
								</div>


							</div>

					</div>

				</div>

				<div class="modal-footer">
					<input type="file" name="archivo" class="btn btn-success" required>
					<input type="submit" class="btn btn-primary" class="glyphicon" >
					
				</form>

				







				</div>

			</div>

		</div>

	</div>
</div>
</div>
<!-- -->





















<!--
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Registro de Citas</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					

					<div class="card-body">



					
						
						<form action="insertar.php" class="form-register" method="POST" enctype="multipart/form-data">

							<h1 class="form__title">Registro de Exámenes del Paciente</h1>
							<div class="container--flex">
								<label for="" class="form__label">Nombre</label>
								<input type="text" class="form__input" name="nombre" required>
							</div>
							<div class="container--flex">
								<label for="" class="form__label">Apellido</label>
								<input type="text" class="form__input" name="apellido" required>
							</div>
							<div class="container--flex">
								<label for="" class="form__label">descripcion</label>
								<input type="text" class="form__input" name="descripcion" required>
							</div>
							<div class="container--flex">
								<label for="" class="form__label">Fecha</label>
								<input type="date" class="form__input" name="fecha" required>
							</div>

							<input type="file" name="archivo" class="form__file" required>
							<input type="submit" class="form__submit btn-primary">


						</form>

						
					</div>

				</div>

			</div>

		</div>
	</div>
</div>-->













<!-- -->