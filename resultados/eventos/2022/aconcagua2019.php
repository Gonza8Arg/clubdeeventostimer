<?php
include_once '../../base_de_datos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM aconcagua2019";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$resultados=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Club de Eventos Timer</title>
        <!-- Favicon-->
        <link rel="icon" type="../../../image/x-icon" href="../../../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="/text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="/text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../css/styles.css" rel="stylesheet" />

        <!-- datatables css -->
        <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>   
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"/>
  
    </head>
    <body id="inicio">
        <!-- Navigation-->
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="../../../index.html"><img src="../../../assets/img/logocdet.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../../../index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Consultas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header></br>
<!-- Services-->
<section class="page-section">
    <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
        <div class="text-center">
        <h2><font face="Segoe UI">ACONCAGUA ULTRA TRAIL 2019</font></h2>
                    <div class="text-center">
                        <a><font size=5 face="Segoe UI">15K | 25K | 42K | 60K | 100K</font></a>
                    </div>
        </div>
        </div>
        </div>
        </div>
<!-- Tablas-->
        <div class="container">
        <div class="row text-center">
        <div class="col-md-12">
                    <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered display compact responsive nowrap" cellspacing="0" style="width:100%">    
                    <thead class="text-center table-dark" style="font-size:12px">
                            <tr>
                                <th style="text-align: center">DORSAL</th>
                                <th style="text-align: center">NOMBRE</th> 
                                <th style="text-align: center">APELLIDO</th>
                                <th style="text-align: center">TIEMPO</th>
                                <th style="text-align: center">SEXO</th>
                                <th style="text-align: center">DISTANCIA</th> 
                                <th style="text-align: center">CATEGORIA</th>
                                <th style="text-align: center">POS. GRAL.</th>
                                <th style="text-align: center">POS. GRAL. SEXO</th>
                                <th style="text-align: center">POS. CATEGORIA</th>
                                <th style="text-align: center">PROMEDIO (MIN/KM)</th>
                                <th style="text-align: center">VELOCIDAD (KM/H)</th>                                
                                <th style="text-align: center">PAIS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" style="font-size:12px">
                            <?php
                            foreach($resultados as $aconcagua){    
                            ?>
                            <tr>
                                <td><?php echo $aconcagua['Dorsal']?></td>
                                <td><?php echo $aconcagua['Nombre']?></td>
                                <td><?php echo $aconcagua['Apellido']?></td>
                                <td><?php echo $aconcagua['Tiempo']?></td>
                                <td><?php echo $aconcagua['Sexo']?></td>
                                <td><?php echo $aconcagua['Distancia']?></td>
                                <td><?php echo $aconcagua['Categoria']?></td>
                                <td><?php echo $aconcagua['Pos.Gral.']?></td>
                                <td><?php echo $aconcagua['Pos.Gral.Sexo']?></td>
                                <td><?php echo $aconcagua['Pos.Categoria']?></td>
                                <td><?php echo $aconcagua['Promedio']?></td>
                                <td><?php echo $aconcagua['Velocidad']?></td>                                
                                <td><?php echo $aconcagua['Pais']?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
</section>
       


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Consultas de Resultados</h2>
                    <h3 class="section-subheading text-muted">Si no aparece tu tiempo. Escribinos</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Nombre y Apellido-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre y Apellido *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">El Nombre y Apellido es requerido</div>
                            </div>
                            <div class="form-group">
                                <!-- Dorsal-->
                                <input class="form-control" id="dorsal" type="text" placeholder="Dorsal *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">El Número de Dorsal es requerido</div>
                            </div>
                            <div class="form-group">
                                <!-- Evento-->
                                <input class="form-control" id="evento" type="text" placeholder="Evento *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">El Evento es requerido</div>
                            </div>
                            <div class="form-group">
                                <!-- Email-->
                                <input class="form-control" id="email" type="email" placeholder="Tu Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El email no es valido</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Mensaje Enviado Correctamente!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar el mensaje!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-lg-start">Copyright &copy; 2022</div>
                    <div class="col-lg-3 text-lg-start">Desarrollo by <b>MGMZA</b></div>
                    <!--div class="col-lg-3 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div-->
                    <div class="col-lg-3 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!"> Política de privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!"> Términos de uso</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../main.js"></script>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    </body>
</html>
