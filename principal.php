!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aplicativo Web">
    <title>webapp 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/icons/icomoon.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


    <!-- Contenedor Header -->
    <header id="linkHome" class="">

        <nav id="navFixed" class="navbar fixed-top navbar-expand-lg navbar-white bg-dark p-10px">

            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link scroll current text-white" href="#linkInicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll text-white" href="#linkEspecialidades">Especialidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll text-white" href="#linkNosotros">Nosotros</a>
                    </li>
                    <div class="d-grid gap-1 d-md-flex justify-content-md-end ml-5">
                        <a href="login.php" class="btn btn-primary me-md-2 ml-5" type="button">Login</a>
                        <a href="registro.php" class="btn btn-primary ml-5" type="button">Registro en Línea</a>
                    </div>


                </ul>
            </div>

        </nav>

        <div class="boxHeader ">
            <div class="textosHeader">
                <h1><b>Hospital Basico El Oro</b></h1>
                <p>Hospital El Oro se ha convertido en el líder en la prestación de asistencia hospitalaria y en una Institución de prestigio en el país.</p>
            </div>

            <div class="imgHeader">
                <img src="assets/img/hospital/8.jpg" alt="">
            </div>
        </div>
    </header>
    <!-- Fin Contenedor Header -->

    <!-- Contenedor Main -->
    <main>
     
        <section class="boxFeatures btn-primary text-dark" id="linkEspecialidades">
            <h3 class="text-white">Especialidades</h3>
            <div class="features">
                <div class="cardFeatures">
                    <h4>Odontología</h4>
                    <p>Se encarga del diagnóstico, tratamiento y prevención de las enfermedades del aparato estomatognático, el cual incluye además de los dientes, las encías, el tejido periodontal.</p>
                </div>

                <div class="cardFeatures">
                    <h4>Medicina Interna</h4>
                    <p>Estudia las enfermedades que afectan al ser humano, los modos de prevenirlas y las formas de tratamiento para curarlas.</p>
                </div>

                <div class="cardFeatures">
                    <h4>Pediatría</h4>
                    <p>Especialidad médica que estudia al niño, en Medihospital contamos con colaboradores altamente calificados en el tratamiento de los niños.</p>
                </div>

                <div class="cardFeatures">
                    <h4>Ginecología</h4>
                    <p>Salud integral para la mujer, así como el tratamiento adecuado de los fenómenos fisiológicos relacionados con la reproducción humana, incluyendo la gestación, el parto y el puerperio.</p>
                </div>

                <div class="cardFeatures">
                    <h4>Gastroenterología</h4>
                    <p>Parte de la medicina que se ocupa del estómago y los intestinos y sus enfermedades, así como del resto de los órganos del aparato digestivo.</p>
                </div>

                <div class="cardFeatures">
                    <h4>Cirugía</h4>
                    <p>Parte de la medicina que se ocupa de curar las enfermedades, malformaciones, traumatismos, etc., mediante operaciones manuales o instrumentales.</p>
                </div>
            </div>

        </section>
        <!-- Fin Sección Features -->

        <!-- Sección Call To Actions -->
        <section class="boxCallToActions" id="linkNosotros">
            <div class="callToActions">
                <div class="imgCallToActions">
                    <img src="assets/img/hospital/2.jpg" alt="">
                </div>

                <article class="contenido">
                    <h3>Sobre Nosotros</h3>
                    <p></p>

                    <ul>
                        <li> <span class="icon-check"></span> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                        <li> <span class="icon-check"></span> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                    </ul>

                </article>


            </div>
        </section>
        <!-- Fin Sección Call To Actions -->


        <!--OTRA SECTION--->

    </main>
    <!-- Fin Contenedor Main -->

    <!-- Contenedor Footer -->
    <footer class="footer btn-warning">
        <div class="boxTextFooter ">
            <p class="text-primary">@Copyright<a target="_blank" class="text-dark"> Hospital Básico El oro 2022</a></p>
        </div>
    </footer>
    <!-- Fin Contenedor Footer -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="assets/js/new/dataApi.js"></script>
    <script src="assets/js/new/app.js"></script>

</body>

</html>