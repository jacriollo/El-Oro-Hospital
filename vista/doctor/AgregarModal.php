<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Registro de Medicos</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">

						<form method="POST" autocomplete="off" enctype="multipart/form-data">
							<div class="row">
								<!--<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>DNI</label>
								<input name="dnidoc" required="" type="text" class="form-control" maxlength="8" placeholder="Ingrese dni" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>-->
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Cedula</label>
										<input name="cedula" required="" maxlength="10" type="text" class="form-control" placeholder="Ingrese cédula" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									</div>
								</div>
								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Nombre</label>
										<input name="nombre" required="" type="text" class="form-control" placeholder="Ingrese su nombre">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Apellido</label>
										<input name="apellido" required="" type="text" class="form-control" placeholder="Ingrese su apellido">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Especialidad</label>
										<select class="form-control" id="doctor" name="codespe" placeholder="Ingrese espacialidad">

										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Sexo</label>
										<select class="form-control" name="sexo">
											<option value="Masculino">Masculino</option>
											<option value="Femenino">Femenino</option>

										</select>
									</div>
								</div>

								<!--<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Teléfono</label>
								<input name="telefo" required="" type="text" class="form-control" maxlength="9" placeholder="Ingrese teléfono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>-->
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Teléfono</label>
										<input name="telefono" required="" maxlength="10" type="text" class="form-control" placeholder="Ingrese su telefono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Fecha Nacimiento</label>
										<input name="fechanaci" type="date" class="form-control" placeholder="Ingresa tu fecha">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Correo</label>
										<input name="correo" required="" type="text" class="form-control" placeholder="Ingresa tu correo">
									</div>
								</div>


								<!--<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Ciudad</label>
										<select class="form-control" name="naciona">
											<option value="Peruana(o)">Quito(o)</option>
											<option value="Venezolana(o)">Guayaquil(o)</option>
											<option value="Argentina(o)">Cuenca(o)</option>
											<option value="Ecuatoriana(o)">Loja(o)</option>
											<option value="Uruguaya(o)">Machala(o)</option>

										</select>
									</div>
								</div>-->

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
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Usuario</label>
										<input name="usuario" type="text" class="form-control" required placeholder="Ingrese usuario">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Password</label>
										<input name="clave" type="password" class="form-control" required placeholder="Ingrese contraseña">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Cargo</label>
										<select class="form-control" name="cargo">
											<option value="3">Medico</option>
										</select>
									</div>
								</div>


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