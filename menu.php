<nav class="navbar navbar-expand-sm">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navMenu" aria-controls="navMenu"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo $pg == "inicio"? "active": "";?>" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $pg == "sobre-mi"? "active": "";?>" href="sobre-mi.php">Sobre mí</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $pg == "portfolio"? "active": "";?>" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $pg == "contacto"? "active": "";?>" href="contacto.php">Contacto</a>
            </li>
        </ul>
    </div>
</nav>