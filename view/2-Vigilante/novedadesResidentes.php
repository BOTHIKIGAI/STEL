<!doctype html>
<html lang="en">
  
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STEL</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="shortcout icon" href="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="1. CSS/2. Modulos.css">

        <script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" defer></script>
        <script src="2. JavaScript/modulos.js" defer></script>

    </head>
    <body>

        <!-- Menu lateral -->

        <nav class="navbar navbar-expand-lg" style="background-color: #23518C;">

            <div class="container-fluid">

                <a class="navbar-brand" href="paginaInicioModulos.html">
                    <img src="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png" alt="Logo" width="60" height="65" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">

                        <li class="nav-item fs-3">
                            <a class="nav-link active text-white" aria-current="page" href="paginaInicioModulos.html">STEL</a>
                        </li>

                        <li class="nav-item dropdown align-self-center">

                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Usuarios <i class="bi bi-people-fill"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="consultarUsu.html">Consultar Usuario</a></li>
                                <li><a class="dropdown-item" href="consultarInmueble.html">Consultar Inmueble</a></li>


                            </ul>

                        <li class="nav-item dropdown align-self-center">

                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Adminstración <i class="bi bi-house"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="administracionDocumentacion.html">Documentación</a></li>
                                <li><a class="dropdown-item" href="visitantesSeccion.html">Vistantes</a></li>

                            </ul>

                        <li class="nav-item dropdown align-self-center">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Alquiler Parqueaderos <i class="bi bi-car-front-fill"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="movimientoVehiculo.html">Entrada y Salida</a></li>
                                <li><a class="dropdown-item" href="configuracionAlquiler.html">Configuración</a></li>

                             </ul>

                        </li>
                
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Comunicación <i class="bi bi-broadcast"></i></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="correspondencia.html">Correspondencia</a></li>
                                <li><a class="dropdown-item" href="novedades.html">Novedades</a></li>

                            </ul>

                        </li>

                        <li class="nav-item align-self-center">
                            <a class="nav-link active text-white d-flex justify-content-end" aria-current="page" href="index.html">Salir</a>
                        </li>
                    
                    </ul>


                </div>

            </div>

        </nav>

        <script>
            function eliminar(){
                var respuesta=confirm("Estas seguro que deseas eliminar?");
                return respuesta;
            }
        </script>

        <!-- Formulario y Imagen -->

        <div class="container d-text-center pt-4 ">

            
            <div class="row justify-content-center">
              
                <div class="col">

                    <h2> Registro Novedades</h2>
                    <hr>

                    <form action="../controller/insertarNovedad.php" method="post">

                    <!-- Remitente novedad -->    
                    
                    <label for="remitenteNovedad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Remitente Novedad</label>
                    <input type="text" class="form-control" name="remNovedades" aria-describedby="Remitente" maxlength="6" placeholder="Nombre">
                    
                    <!-- Tipo novedad --> 
                    <label for="tipoNovedad" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Tipo de Novedad</label>
                    <select name=TipoNovedad class="form-select" aria-label="Tipo de novedad">
                    <option>tipo novedad...</option>
                    <option>Vigilante</option>
                    <option>Residente</option>
                    <option>Todero</option>
                    <option>Administrador</option>
                    </select>
    
                    
                    
                    
                    <!-- Asunto de Novedad -->

                    <label for="asuntonovedad" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Asunto Novedad</label>
                    <select name="asuntoNovedades"class="form-select" aria-label="Asunto">

                    <option>Asunto de novedad...</option>
                    <option value="Solicitud Inmueble">Solicitud permiso laboral</option>
                    <option value="Solicitud zonas comunes">Solicitud zonas comunes</option>
                    <option value="Solicitud camaras de seguridad">Solicitud camaras de seguridad</option>
                    <option value="Solicitud reunión con administrador">Solicitud reunión con administrador</option>
                    <option value="Solicitud reunión con vecino">Solicitud reunión con vecino</option>     
                    </select>

                    <!-- Descripción -->

                        
                    <label for="descripcionNovedad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Descripción novedad</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="descNovedades" style="height: 100px" maxlength="180"></textarea>
                        <label for="descripcionNovedad" style="font-size: 13px;">Razon</label>
                    </div>

                    <!-- Documento Novedad -->

                    <label for="documentoNovedad" class="form-label" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Documento Novedad</label>                                            
                    <input class="form-control" type="file" name="docNovedades">
                    
                    
      
                    <!-- Fecha Evidencia -->

                    <label for="fechaNovedades" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Fecha Novedad</label>
                    <input type="date" class="form-control" name="fecNovedades" aria-describedby="fecha_de_asignacion_Multa">
 
                      
                    <!-- Respuesta Novedad -->

                    <label for="respuestanovedad" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Respuesta Novedad</label>
                    <select name="resNovedades"class="form-select" aria-label="Asunto">
                    
                    <option>Respuesta de novedad...</option>
                    <option value="Solicitud Inmueble">Revisar cronograma</option>
                    <option value="Solicitud zonas comunes">verificar estado zona</option>
                    <option value="Solicitud camaras de seguridad">conciliacion con vecinos</option>
                    <option value="Solicitud reunión con administrador">Revision turnos</option>
                    <option value="Solicitud reunión con vecino">citar vecinos</option>
                    <option value="Solicitud reunión con vecino">programar reunion</option>
                    <option value="Solicitud reunión con vecino">programar revision camaras</option>
                    <option value="Solicitud reunión con vecino">Convocar reunion anden</option>
                    <option value="Solicitud reunión con vecino">dialogar con vecino</option>

                    </select>


                    <!-- Estado novedad -->

                    <label for="estadoNovedad" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Estado Novedad</label>
                    <select name="estNovedades"class="form-select" aria-label="Asunto1">

                    <option>Estado de Novedad...</option>
                    <option value="Solicitud Inmueble">Espera</option>
                    <option value="Solicitud zonas comunes">Solicitud Atendida</option>
                    <option value="Solicitud camaras de seguridad">Solicitud No atendida</option>
                   
                    </select>
                     
                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);" name="Registrarnovedad">Registrar Novedad</button>
                   
                </form>

                    

              
                </div>

                <!-- Imagen -->
              
                <div class="col">

                    <img src="0. Imagenes/21. Novedades/2-NovResidenteForm.png" alt="" style="border-radius: 10px; margin-left: 90px; margin-top: 20px;">

                </div>
                
            </div>
          
        </div>


        <hr style="margin-left: 115px; margin-right: 115px;">

        <div style="margin-left: 115px; margin-right: 115px; margin-top: 20px; margin-bottom: 25px;">

            <table class="table table-striped" style="width:100%;">
                <thead>
                <tr>
            <th scope="col">pkidNovedades</th>
            <th scope="col">Remitente</th>
            <th scope="col">tipoNovedad</th>
            <th scope="col">Asunto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Documento</th>
            <th scope="col">Fecha</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Estado</th>
            <th scope="col"></th>
            </tr>
                </thead>
                <tbody>
            <?php
            include "../model/conexion.php";
            include "../controller/eliminarNovedad.php";
            //include "../view/editarNovedad.php";    
            $sql=$conn->query("SELECT * FROM tbl_novedades");
            while ($datos=$sql->fetch_object()){ ?>
                <div class="col-4 m-5 col-md-9 col-sm-5">
                    <tr>
                        <td><?= $datos->pkidNovedades?></td>
                        <td><?= $datos->remNovedades?></td>
                        <td><?= $datos->TipoNovedad?></td>
                        <td><?= $datos->asuntoNovedades?></td>
                        <td><?= $datos->descNovedades?></td>
                        <td><?= $datos->docNovedades?></td>
                        <td><?= $datos->fecNovedades?></td>
                        <td><?= $datos->resNovedades?></td>
                        <td><?= $datos->estNovedades?></td>
                        <td>
                            <button><a href="../view/editarNovedad.php?pkidNovedades=<?=$datos->pkidNovedades ?>" class="btn btn-outline-primary "Primary><i class="bi bi-pencil-fill" name="Actualizar"></i></a></button>
                            <button><a  onclick="return eliminar()"href="../view/novedadesResidentes.php?pkidNovedades=<?=$datos->pkidNovedades ?>" class="btn btn-outline-danger "Danger><i class="bi bi-trash-fill"></i></a></button>
                        </td>
                    </tr>
                </div>    
            <?php }
            ?>
        </tbody>
            </table>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
    
</html>