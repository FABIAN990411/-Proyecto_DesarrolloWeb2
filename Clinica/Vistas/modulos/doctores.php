<?php

if ($_SESSION["rol"] != "Secretaria" && $_SESSION["rol"] != "Administrador") {

    echo '<script>

	window.location = "inicio";
	</script>';

    return;
}


?>
<?php

//Mostrar datos de los doctores al administrador
if ($_SESSION["rol"] == "Administrador") { ?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>Gestor de doctores</h1>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header">

                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearDoctor"> Crear Doctor </button>

            </div>


            <div class="box-body">

                <table class="table table-bordered table-hover table-striped DT">

                    <thead>

                        <tr>

                            <th>N°</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Foto</th>
                            <th>Consultorio</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Editar / Borrar</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = DoctoresC::VerDoctoresC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<tr>
							
									<td>' . ($key + 1) . '</td>
                                    <td>' . $value["apellido"] . '</td>
									<td>' . $value["nombre"] . '</td>';

                            if ($value["foto"] == "") {

                                echo '<td> <img src="Vistas/img/defecto.png" width="40px"> </td>';
                            } else {

                                echo '<td> <img src="' . $value["foto"] . '" width="40px"> </td>';
                            }


                            $columna = "id";
                            $valor = $value["id_consultorio"];

                            $consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);

                            echo '<td>' . $consultorio["nombre"] . '</td> 

                            <td>' . $value["usuario"] . '</td>

                            <td>' . $value["clave"] . '</td>

                         
                            
                            <td>
										
										<div class="btn-group">
											
						                      	<button class="btn btn-success EditarDoctor" Did = "' . $value["id"] . '" data-toggle="modal" 
                                                data-target = "#EditarDoctor"><i class="fa fa-pencil"></i> 
                                                Editar</button>
											

											
												<button class="btn btn-danger EliminarDoctor" Did = "' . $value["id"] . '"
                                                imgD="' . $value["foto"] . '"><i class="fa fa-times"></i> Borrar</button>
											 

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

//Mostrar datos de los doctores al secretaria
if ($_SESSION["rol"] == "Secretaria") { ?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>Gestor de doctores</h1>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header">

                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearDoctor"> Crear Doctor </button>

            </div>


            <div class="box-body">

                <table class="table table-bordered table-hover table-striped DT">

                    <thead>

                        <tr>

                            <th>N°</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Foto</th>
                            <th>Consultorio</th>
                           
                            <th>Editar / Borrar</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $columna = null;
                        $valor = null;

                        $resultado = DoctoresC::VerDoctoresC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<tr>
							
									<td>' . ($key + 1) . '</td>
                                    <td>' . $value["apellido"] . '</td>
									<td>' . $value["nombre"] . '</td>';

                            if ($value["foto"] == "") {

                                echo '<td> <img src="Vistas/img/defecto.png" width="40px"> </td>';
                            } else {

                                echo '<td> <img src="' . $value["foto"] . '" width="40px"> </td>';
                            }


                            $columna = "id";
                            $valor = $value["id_consultorio"];

                            $consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);

                            echo '<td>' . $consultorio["nombre"] . '</td> 

                            <td>
										
										<div class="btn-group">
											
						                      	<button class="btn btn-success EditarDoctor" Did = "' . $value["id"] . '" data-toggle="modal" 
                                                data-target = "#EditarDoctor"><i class="fa fa-pencil"></i> 
                                                Editar</button>
											

											
												<button class="btn btn-danger EliminarDoctor" Did = "' . $value["id"] . '"
                                                imgD="' . $value["foto"] . '"><i class="fa fa-times"></i> Borrar</button>
											 

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

<!-- crear Doctores -->

<div class="modal fade" role="dialog" id="CrearDoctor">

    <div class="modal-dialog">

        <div class="modal-content">

            <form method="post" role="form">

                <div class="modal-body">

                    <div class="box-body">

                        <div class="form-group">

                            <h4> <strong> Apellido</strong></h4>

                            <input type="text" class="form-control " name="apellido" required>

                            <input type="hidden" name="rolD" value="Doctor">

                        </div>

                        <div class="form-group">

                            <h4> <strong> Nombre</strong></h4>

                            <input type="text" class="form-control" name="nombre" required>

                        </div>


                        <div class="form-group">

                            <h4> <strong> Sexo</strong></h4>

                            <select class="fom-control" name="sexo">

                                <option value=""> Seleccionar...</option>

                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>

                            </select>

                        </div>



                        <div class="form-group">

                            <h4> <strong> Consultorio</strong></h4>

                            <select class="fom-control" name="consultorio">

                                <option value=""> Seleccionar...</option>

                                <?php
                                $columna = null;
                                $valor = null;

                                $resultado = ConsultoriosC::VerConsultoriosC($columna, $valor);

                                foreach ($resultado as $key => $value) {

                                    echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                                }

                                ?>


                            </select>

                        </div>

                        <div class="form-group">

                            <h4> <strong> Usuario</strong></h4>

                            <input type="text" class="form-control" id="usuario" name="usuario" required>

                        </div>

                        <div class="form-group">

                            <h4> <strong> Contraseña</strong></h4>

                            <input type="password" class="form-control" name="clave" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Crear</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                </div>

                <?php

                $crear = new DoctoresC();
                $crear->CrearDoctorC();


                ?>

            </form>

        </div>

    </div>


</div>


<div class="modal fade" role="dialog" id="EditarDoctor">

    <div class="modal-dialog">

        <div class="modal-content">

            <form method="post" role="form">

                <div class="modal-body">

                    <div class="box-body">
                    <?php

                     if ($_SESSION["rol"] == "Secretaria") { ?>

                        <div class="form-group">

                        <h4> <strong> Apellido</strong></h4>

                            <input type="text" class="form-control " id="apellidoE" name="apellidoE" required>

                            <input type="hidden" id="Did" name="Did">

                        </div>

                        <div class="form-group">

                        <h4> <strong> Nombre</strong></h4>

                            <input type="text" class="form-control " id="nombreE" name="nombreE" required>

                        </div>

                        <div class="form-group">

                        <h4> <strong> Sexo</strong></h4>

                            <select class="fom-control " name="sexoE" required="">

                                <option id="sexoE"> </option>

                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>

                            </select>

                        </div>

                        <div class="form-group">

                        <h4> <strong> Usuario</strong></h4>

                            <input type="hidden" class="form-control " id="usuarioE" name="usuarioE"  readonly required>

                        </div>

                        <div class="form-group">

                        <h4> <strong> Contraseña</strong></h4>

                            <input type="hidden" class="form-control " id="claveE" name="claveE"  readonly required>

                        </div>
                        <?php } ?>



                        <?php

                     if ($_SESSION["rol"] == "Administrador") { ?>

                        <div class="form-group">

                        <h4> <strong> Apellido</strong></h4>

                            <input type="text" class="form-control " id="apellidoE" name="apellidoE" required>

                            <input type="hidden" id="Did" name="Did">

                        </div>

                        <div class="form-group">

                        <h4> <strong> Nombre</strong></h4>

                            <input type="text" class="form-control" id="nombreE" name="nombreE" required>

                        </div>

                        <div class="form-group">

                        <h4> <strong> Sexo</strong></h4>

                            <select class="fom-control " name="sexoE"  required>

                                <option id="sexoE"> </option>

                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>

                            </select>

                        </div>

                        <div class="form-group">

                        <h4> <strong> Usuario</strong></h4>

                            <input type="text" class="form-control " id="usuarioE" name="usuarioE"  required>

                        </div>

                        <div class="form-group">

                        <h4> <strong> Contraseña</strong></h4>

                            <input type="password" class="form-control" id="claveE" name="claveE"  required>

                        </div>
                        <?php } ?>


                       
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Guardar Cambios</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                </div>

                <?php

                $actualizar = new DoctoresC();
                $actualizar->ActualizarDoctorC();


                ?>

            </form>

        </div>

    </div>


</div>



<?php

$borrarD = new DoctoresC();
$borrarD->BorrardoctorC();
