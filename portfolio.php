<?php $pg = "portfolio"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
    <?php include_once("menu.php"); ?>

    </header>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-1">
                    <h1>Mi Portfolio</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Estos son algunos de los trabajos que hice durante mi carrera:</h2>
                </div>
            </div>
            <div class="row my-sm-4 my-3">
                <div class="col-sm-6 col-12 px-2">
                    <div class="bg-white">
                        <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                        <div class="row p-3">
                            <div class="col-12">
                                <h3>ABM Clientes</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML,
                                    CSS, PHP, <br> Bootstrap y Json.</p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="sistema/abmclientes/" class="btn" target="_blank">Ver Online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/depcsuite/abmclientes" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2">
                    <div class="bg-white">
                        <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                        <div class="row p-3">
                            <div class="col-12">
                                <h3>ABM Ventas</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                    Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="sistema/login" class="btn" target="_blank">Ver Online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/depcsuite/abmventas" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 mt-4 mt-sm-3">
                    <div class="bg-white">
                        <img src="images/sistema-admin.png" alt="Proyecto integrador" class="img-fluid">
                        <div class="row p-3">
                            <div class="col-12">
                                <h3>Proyecto integrador</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                                    CSS, con panel administrador, gestor de usuarios, módulo de permisos y
                                    funcionalidades a fines. </p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="sistema/abmventas/abmcliente.php" class="btn" target="_blank">Ver Online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
<?php include_once ("footer.php"); ?>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

</html>