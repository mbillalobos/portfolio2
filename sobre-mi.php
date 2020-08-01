<?php $pg = "sobre-mi"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sobre Mi</title>
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
    <section id="sobre-mi">
        <div class="container">
            <div class="row sm-12">
                <div class="col-sm-7 col-12">
                    <h1>Sobre mí</h1>
                    <h2>Apasionado por la programación y la tecnología. Tengo formación técnica en electronica y
                        automatización</h2>
                    <a href="files/.pdf" class="btn my-4" target="_blank">Descargar CV</a>
                </div>
                <div class="col-sm-5 col-9">
                    <img src="images/manuel-ignacio-billalobos.jpg" alt="Nelson Daniel Tarche"
                        title="Nelson Daniel Tarche" class="img-fluid img-circle">
                </div>
                <div class="row my-sm-4 my-3">
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-code"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>PROGRAMACIÓN</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>HTML, CSS, Bootstrap, PHP, POO, MVC, Framework Laravel, Javascript, jQuery,
                                        React.js, AJAX, REST API, WSDL, JSON, C, C++, ASP.NET, C#.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-database"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>BASE DE DATOS</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>MySQL/MariaDB, MS SQL Server, PostgreSQL, LDAP, Mongo DB.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-server"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>SERVIDORES</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>VMware ESXi 6.5, HTTP Apache, Bind9, ProFTPd, IIS, XAMPP, SSL certbot,
                                        migraciones y upgrades.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-language"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>IDIOMAS</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>INGLES - Intermediate B2<br>ESPAÑOL - Nativo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-window-restore"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>SOFTWARE</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>GIT, GitHub, Visual Code, Sublime, WinSCP/Filezilla, SSH Putty, Navicat, MySQL
                                        Workbench, Heidi SQL, Adobe Illustrator, Balsamiq mockups, MS Office, Google
                                        Docs. Redmine, MS Project, Trello. MS Windows, Debian GNU/Linux y macOS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-puzzle-piece"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>HOBBIES</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>Turismo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experiencia">
    <div class="container py-sm-5 py-4">
        <div class="row">
            <div class="col-12 py-4">
                <h2>Experiencia laboral</h2>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>2016 – PRESENTE - DePC Suite</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/depcsuite.png" class="img-resposive py-3 py-sm-0" width="70" alt="DePC Suite" title="DePC Suite">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Lidero el desarrollo y posicionamiento de la empresa en sus tres líneas de negocio: cloud services, desarrollo de sistemas y educación IT en Buenos Aires, con sedes en Puerto Madero y Belgrano. Celebración de convenios estratégicos con la Escuela Argentina de Negocios y la Unión de Músicos Independientes de Argentina UMI. Desarrollo de nuevos productos. Coordinación de colaboradores y docentes. Administración de VMware Cloud. Docente de cursos tecnológicos. Desarrollo de sistemas.</h4>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>2015 – 2020 - UBA</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/uba.jpg" class="img-resposive py-3 py-sm-0" width="70" alt="Universidad de Buenos Aires" title="Universidad de Buenos Aires">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Planeamiento del proyecto, seguimiento, reuniones de avance, estimación de entregables. Trato con clientes y equipos internos. Desarrollo de nuevos sistemas. Capacitar y organizar el área de desarrollo. Gestionar los ambientes de desarrollo. Administrar repositorio. Asignar tareas al equipo.</h4>
            </div>
        </div><div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>2012 – 2018 - ENACOM</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/enacom.jpg" class="img-resposive py-3 py-sm-0" width="70" alt="ENACOM" title="ENACOM">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Diseño y desarrollo de sistemas internos para el organismo. Mantenimiento de los sistemas existentes. Gestión de base de datos y reportes. Trato con distintos clientes internos y equipos. Reuniones de avance. Organización del proyecto en Redmine. Resolución de pedidos mediante sistema de incidencias.</h4>
            </div>
        </div><div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>2014 – 2016 - Consultora</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/buenosaires.png" class="img-resposive py-3 py-sm-0" width="70" alt="Buenos Aires Ciudad" title="Golshy">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Proyecto de desarrollo de sistema Web para la Subsecretaría de Seguridad Ciudadana del Ministerio de Justicia y Seguridad de la Ciudad de Buenos Aires.</h4>
            </div>
        </div><div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>2011 – 2016 - Golshy</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/golshy.jpg" class="img-resposive py-3 py-sm-0" width="70" alt="Golshy" title="Golshy">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Desarrollo, implementación y mantenimiento de sistemas y páginas Web. Relevamiento de requisitos. Trato con el cliente. Desarrollo del Brief de marca y del sitio web. Administración de servidores. Participación en eventos de networking.</h4>
            </div>
        </div><div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>2010 – 2011 - Globons</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/globons.png" class="img-resposive py-3 py-sm-0" width="70" alt="Globons" title="Globons">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Desarrollo de sistemas web para el sector público y privado.</h4>
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