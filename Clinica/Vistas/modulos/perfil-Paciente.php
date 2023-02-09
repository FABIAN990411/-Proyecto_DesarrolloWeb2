<?php

if($_SESSION["rol"] != "Paciente"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}

?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Perfil</h1>

	</section>


	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped dt-responsive">

					<tbody>

						<?php

						$perfil = new PacientesC();
						$perfil -> VerPerfilPacienteC();

						?>

						
						
					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>