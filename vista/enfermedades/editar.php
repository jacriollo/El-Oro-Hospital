<!-- Modal-edit -->
<div class="modal fade" id="editRowModal_<?php echo $va['codenfer']; ?>" aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
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



				<form method="POST" action="../vista/enfermedades/obtener.php?id=<?php echo $va['codenfer']; ?>">


					<div class="row">

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Nombre</label>
								<input type="text" class="form-control" name="nombre" value="<?php echo $va['nombre']; ?>">

							</div>
						</div>

						<!--<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellido</label>

								<input type="text" class="form-control" name="apellido" value="<?php echo $va['apellido']; ?>">
							</div>
						</div>-->


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