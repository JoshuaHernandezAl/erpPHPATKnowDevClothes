<?php require_once 'includes/header.php';?>
<?php require_once 'helpers/consultas.php';?>


<?php if(!isset($_SESSION['usuario']) || $_SESSION['usuario']['puesto']!=='gerente'):?>
    <?php header('Location:index.php') ?>
<?php endif;?>

<?php require_once 'includes/navbar.php';?>

<?php if(isset($_SESSION['errorRegistrar'])):?>
    <div class="container row pt-5">
        <div class="col-md-5"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <?php 
                echo "<div class='text-center'>".$_SESSION['errorRegistrar']."</div>";
                unset($_SESSION['errorRegistrar']);
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>   
<?php endif;?>
<div class="container mt-3s d-flex justify-content-center">
    <div class="card bg-secundario" style="width: 50rem;">
            <img src="./assets/logo.png" class="card-img-top" alt="...">
        <div class="card-body ">
            <h5 class="card-title text-center">Clothes for Devs</h5>
            <p class="card-text">Nuevo empleado</p>
        </div>
        <div class="card-body ">
            <form class="form-control" action="nuevo-empleado.php" method="POST"  enctype="multipart/form-data">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control form-control-lg" name="nombre" placeholder="nombre" required/>

                <label for="edad" class="form-label">Edad:</label>
                <input type="number" class="form-control form-control-lg" name="edad" placeholder="edad" required/>

                <label for="sueldo" class="form-label">Sueldo:</label>
                <input type="number" class="form-control form-control-lg" name="sueldo" placeholder="sueldo" required/>
                
                <label for="puesto" class="form-label">Puesto</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="puesto" required>
                    <option selected disabled>Puesto</option>
                    <option value="vendedor">Vendedor</option>
                    <option value="cajero">Cajero</option>
                    <option value="gerente">Gerente</option>
                </select>
                
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control form-control-lg" name="correo" placeholder="correo" required/>
                
                <label for="contrato" class="form-label">Contrato</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="contrato" required>
                    <option selected disabled>Tipo contrato</option>
                    <option value="medio_tiempo">Medio tiempo</option>
                    <option value="tiempo_completo">Tiempo completo</option>
                </select>

                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="sexo" required>
                    <option selected disabled>Sexo</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                
                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password" class="form-control form-control-lg" name="pass" placeholder="contraseña" required/>
                
                <input type="submit" class="btn btn-success mt-3 btn-lg" value="Registrar"/>
            </form>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php';?>

