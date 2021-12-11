<?php require_once "includes/header.php"?>

<?php if(isset($_SESSION['errorLogin'])):?>
    <div class="container row pt-5">
        <div class="col-md-5"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <?php echo "<div class='text-center'>".$_SESSION['errorLogin']."</div>"?>
        </div>
        <div class="col-md-3"></div>
    </div>        
<?php endif;?>
<?php if(isset($_SESSION['usuario'])):?>
    <?php header('Location:erp.php') ?>
<?php endif;?>
<div class="container mt-3s d-flex justify-content-center">
    <div class="card bg-secundario" style="width: 30rem;">
            <img src="./assets/logo.png" class="card-img-top" alt="...">
        <div class="card-body ">
            <h5 class="card-title text-center">Clothes for Devs</h5>
            <p class="card-text">Inicio de sesion.</p>
        </div>
        <div class="card-body ">
            <form class="form-control" action="login.php" method="POST">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control form-control-lg" name="nombre" placeholder="Nombre" required/>
                <label for="contra" class="form-label">Constaseña:</label>
                <input type="password" class="form-control form-control-lg" name="contra" placeholder="Constraseña" required/>
                <input type="submit" class="btn btn-success mt-3 btn-lg"/>
            </form>
        </div>
    </div>
</div>

<?php "includes/footer.php" ?>
