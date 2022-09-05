<!-- Modal-edit -->
<div class="modal fade" id="editRowModal_<?php echo $va['coddoc']; ?>" aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Editar</span>

				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">



				<form method="POST" action="../vista/doctor/obtener.php?id=<?php echo $va['coddoc']; ?>">


					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Cedula</label>

								<input type="text" class="form-control" maxlength="10" name="cedula" value="<?php echo $va['cedula']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Nombre</label>
								<input type="text" class="form-control" name="nombre" value="<?php echo $va['nombre']; ?>">

							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellido</label>

								<input type="text" class="form-control" name="apellido" value="<?php echo $va['apellido']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Sexo</label>
								<select class="form-control" name="sexo" value="<?php echo $va['sexo']; ?>">
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Teléfono</label>

								<input type="text" class="form-control" maxlength="10" name="telefono" value="<?php echo $va['telefono']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Fecha Nacimiento</label>

								<input type="date" class="form-control" name="fechanaci" value="<?php echo $va['fechanaci']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Correo</label>

								<input type="text" class="form-control" name="correo" value="<?php echo $va['correo']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Dirección</label>
								<input type="text" class="form-control" name="direccion" value="<?php echo $va['direccion']; ?>">
							</div>
						</div>

						<!--<div class="col-md-6">
								<div class="form-group form-group-default">
									<label>Nacionalidad</label>
									<select class="form-control" name="naciona" value="<?php echo $va['naciona']; ?>">
										<option value="Peruana(o)">Peruana(o)</option>
										<option value="Venezolana(o)">Venezolana(o)</option>
										<option value="Argentina(o)">Argentina(o)</option>
										<option value="Ecuatoriana(o)">Ecuatoriana(o)</option>
										<option value="Uruguaya(o)">Uruguaya(o)</option>
									</select>
								</div>
							</div>-->

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Ciudad</label>
								<input type="text" class="form-control" name="ciudad" value="<?php echo $va['ciudad']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Usuario</label>
								<input type="text" class="form-control" name="usuario" value="<?php echo $va['usuario']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Cargo</label>
								<select class="form-control" name="cargo" value="<?php echo $va['cargo']; ?>">
									<option value="3">Medico</option>
								</select>
							</div>
						</div>

					</div>
					<div class="modal-footer no-bd">
						<button type="submit" name="editar" class="btn btn-primary">Edit

						</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Delete
	<div class="modal fade" id="deleteRowModal<?php echo $va['coddoc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center>
						<h4 class="modal-title" id="myModalLabel"></h4>
					</center>
				</div>
				<div class="modal-body">
					<p class="text-center">¿Esta seguro de borrar el registro?</p>
					<h2 class="text-center"><?php echo $va['nombre']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					<a href="../vista/doctor/BorrarRegistro.php?coddoc=<?php echo $va['coddoc']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
				</div>

			</div>
		</div>
	</div>-->


	<!-- Delete 
		<div class="modal fade" id="deleteRowModal<?php echo $row['coddoc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<center>
							<h4 class="modal-title" id="myModalLabel"></h4>
						</center>
					</div>
					<div class="modal-body">
						<p class="text-center">¿Esta seguro de borrar el registro?</p>
						<h2 class="text-center"><?php echo $row['nombre']; ?></h2>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
						<a href="../vista/doctor/BorrarRegistro.php?coddoc=<?php echo $row['coddoc']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
					</div>

				</div>
			</div>
		</div>-->


	<!-- Password
	<div class="modal fade" id="ContraRowModal_<?php echo $va['coddoc']; ?>" aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
							Password</span>

					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">


					<form method="POST" action="../vista/doctor/password.php?id=<?php echo $va['coddoc']; ?>">

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label>New Password</label>

									<input type="password" class="form-control" name="clave">
								</div>
							</div>

						</div>

				</div>
				<div class="modal-footer no-bd">
					<button type="submit" name="editar" class="btn btn-primary">Edit

					</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>-->