<?php

if($_SESSION["rol"] != "Secretaria" && $_SESSION["rol"] != "Doctor" && $_SESSION["rol"] != "Administrador"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>

<?php
//Mostrar datos de los pasientes al administrador
if ($_SESSION["rol"] == "Administrador") { ?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Pacientes</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPaciente">Crear Paciente</button>
				
			</div>


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped DT">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Foto</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>opciones</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$columna = null;
						$valor = null;

						$resultado = PacientesC::VerPacientesC($columna, $valor);

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
					
									<td>'.($key+1).'</td>
									<td>'.$value["apellido"].'</td>
									<td>'.$value["nombre"].'</td>
									<td>'.$value["documento"].'</td>';

									if($value["foto"] == ""){

										echo '<td><img src="Vistas/img/defecto.png" width="40px"></td>';

									}else{

										echo '<td><img src="'.$value["foto"].'" width="40px"></td>';

									}
									

									echo '<td>'.$value["usuario"].'</td>

									<td>'.$value["clave"].'</td>

									<td>
										
										<div class="btn-group">
											
											
											<button class="btn btn-success EditarPaciente" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarPaciente"><i class="fa fa-pencil"></i> Editar</button>
											
											<button class="btn btn-danger EliminarPaciente" Pid="'.$value["id"].'" imgP="'.$value["foto"].'"><i class="fa fa-times"></i> Borrar</button>

										
										</div>

										
										

									</td>

								</tr>';
								

						}

						?>

						


					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>

<?php } ?>


<?php
//Mostrar datos de los pacientes a la secretaria
if ($_SESSION["rol"] == "Secretaria" ) { ?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Pacientes</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPaciente">Crear Paciente</button>
				
			</div>


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped DT">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Foto</th>
							<th>opciones</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$columna = null;
						$valor = null;

						$resultado = PacientesC::VerPacientesC($columna, $valor);

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
					
									<td>'.($key+1).'</td>
									<td>'.$value["apellido"].'</td>
									<td>'.$value["nombre"].'</td>
									<td>'.$value["documento"].'</td>';

									if($value["foto"] == ""){

										echo '<td><img src="Vistas/img/defecto.png" width="40px"></td>';

									}else{

										echo '<td><img src="'.$value["foto"].'" width="40px"></td>';

									}
									

									echo '<td>
										
										<div class="btn-group">
											
											
											<button class="btn btn-success EditarPaciente" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarPaciente"><i class="fa fa-pencil"></i> Editar</button>
											
											<button class="btn btn-danger EliminarPaciente" Pid="'.$value["id"].'" imgP="'.$value["foto"].'"><i class="fa fa-times"></i> Borrar</button>

										
										</div>

										
										

									</td>

								</tr>';
								

						}

						?>

						


					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>

<?php } ?>


<?php
//Mostrar datos de los pacientes a los doctores
if ($_SESSION["rol"] == "Doctor") { ?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Pacientes</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPaciente">Crear Paciente</button>
				
			</div>


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped DT">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Foto</th>
							

						</tr>

					</thead>

					<tbody>

						<?php

						$columna = null;
						$valor = null;

						$resultado = PacientesC::VerPacientesC($columna, $valor);

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
					
									<td>'.($key+1).'</td>
									<td>'.$value["apellido"].'</td>
									<td>'.$value["nombre"].'</td>
									<td>'.$value["documento"].'</td>';

									if($value["foto"] == ""){

										echo '<td><img src="Vistas/img/defecto.png" width="40px"></td>';

									}else{

										echo '<td><img src="'.$value["foto"].'" width="40px"></td>';

									}'
										
									

								</tr>';
								

						}

						?>


					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>

<?php } ?>


<!-- crear paciente -->

<div class="modal fade" rol="dialog" id="CrearPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
						<h4> <strong> Apellido</strong></h4>

							<input type="text" class="form-control" name="apellido" required>

							<input type="hidden" name="rolP" value="Paciente">

						</div>

						<div class="form-group">
							
						<h4> <strong> Nombre</strong></h4>

							<input type="text" class="form-control " name="nombre" required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Documento</strong></h4>

							<input type="text" class="form-control " name="documento" required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Usuario</strong></h4>
							<input type="text" class="form-control " id="usuario" name="usuario" required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Contraseña</strong></h4>

							<input type="text" class="form-control" name="clave" required>

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-info">Crear</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$crear = new PacientesC();
				$crear -> CrearPacienteC();

				?>

			</form>

		</div>

	</div>

</div>

<?php

if ($_SESSION["rol"] == "Administrador") { ?>

<!-- Editar Paciente Administrador -->
<div class="modal fade" rol="dialog" id="EditarPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h4><strong>Apellido</strong></h4>

							<input type="text" class="form-control " id="apellidoE" name="apellidoE" required>

							<input type="hidden" id="Pid" name="Pid">

						</div>

						<div class="form-group">
							
						<h4><strong>Nombre</strong></h4>

							<input type="text" class="form-control" id="nombreE" name="nombreE" required>

						</div>

						<div class="form-group">
							
							<h4> <strong> Documento</strong></h4>

							<input type="text" class="form-control " id="documentoE" name="documentoE" required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Usuario</strong></h4>

							<input type="text" class="form-control " id="usuarioE" name="usuarioE" required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Contraseña</strong></h4>

							<input type="text" class="form-control" id="claveE" name="claveE" required>

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-info">Guardar Cambios</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$actualizar = new PacientesC();
				$actualizar -> ActualizarPacienteC();

				?>

			</form>

		</div>

	</div>

</div>

<?php } ?>


<?php

if ($_SESSION["rol"] == "Secretaria") { ?>

<!-- Editar Paciente Secretaria -->
<div class="modal fade" rol="dialog" id="EditarPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h4><strong>Apellido</strong></h4>

							<input type="text" class="form-control " id="apellidoE" name="apellidoE" required>

							<input type="hidden" id="Pid" name="Pid">

						</div>

						<div class="form-group">
							
						<h4><strong>Nombre</strong></h4>

							<input type="text" class="form-control" id="nombreE" name="nombreE" required>

						</div>

						<div class="form-group">
							
							<h4> <strong> Documento</strong></h4>

							<input type="text" class="form-control " id="documentoE" name="documentoE" required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Usuario</strong></h4>

							<input type="hidden" class="form-control " id="usuarioE" name="usuarioE" readonly required>

						</div>

						<div class="form-group">
							
						<h4> <strong> Contraseña</strong></h4>

							<input type="hidden" class="form-control" id="claveE" name="claveE" readonly required>

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-info">Guardar Cambios</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$actualizar = new PacientesC();
				$actualizar -> ActualizarPacienteC();

				?>

			</form>

		</div>

	</div>

</div>

<?php } ?>

<?php

$borrarP = new PacientesC();
$borrarP -> BorrarPacienteC();