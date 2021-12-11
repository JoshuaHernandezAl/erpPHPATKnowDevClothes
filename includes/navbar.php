<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="erp.php"><img src="./assets/logo_transparent.png" width="75px" height="60px"/></a>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <span class="mx-2"><?php echo $_SESSION['usuario']['nombre'];?></span>
                <span class="mx-2"><?php echo $_SESSION['usuario']['sucursal'];?></span>
                <span class="mx-2"><?php echo $_SESSION['usuario']['puesto'];?></span>
            </li>
            <li class="ms-5 nav-item">
                <a class="nav-link" href="playeras.php">Playeras</a>
            </li>
            <li class="ms-5 nav-item">
                <a class="nav-link" href="sudaderas.php">Sudaderas</a>
            </li>
            <li class="ms-5 nav-item">
                <a class="nav-link" href="nuevo-producto.php">Nuevo producto</a>
            </li>
            <?php if($_SESSION['usuario']['puesto']=='gerente'):?>
                <li class="ms-5 nav-item">
                    <a class="nav-link" href="registrarUsuarios.php">Nuevo empleado</a>
                </li>
                <li class="ms-5 nav-item">
                    <a class="nav-link" href="empleados.php">Lista empleados</a>
                </li>
            <?php endif;?>
        </ul>
        <form class="d-flex" action="./helpers/logout.php" method="post">
            <button class="btn btn-outline-danger btn-lg" type="submit">Cerrar Sesión</button>
        </form>
        </div>
    </div>
</nav>

