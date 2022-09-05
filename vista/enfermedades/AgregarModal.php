<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Registro de Enfermedades</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">

						<form method="POST" autocomplete="off" enctype="multipart/form-data">
							<div class="row">

								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Enfermedad</label>
										<input name="nombre" required="" type="text" class="form-control" placeholder="Ingrese su nombre">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Descripción</label>
										<input name="descrip" required="" type="text" class="form-control" placeholder="Ingrese una descripcion">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Paciente</label>
										<select class="form-control" id="paciente" required name="codpaci">
										</select>
									</div>
								</div>

								<!--<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Especialidad</label>
										<select class="form-control" id="doctor" name="codespe" placeholder="Ingrese espacialidad">

										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Direccion</label>
										<input name="direccion" required="" type="text" class="form-control" placeholder="Ingrese su direccion">
									</div>
								</div>

								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Ciudad</label>
										<input name="ciudad" required="" type="text" class="form-control" placeholder="Ingrese su ciudad">
									</div>
								</div>-->

							</div>

					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar


					</button>
					<button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
					</form>

				</div>

			</div>

		</div>

	</div>
</div>
</div>
<!-- -->