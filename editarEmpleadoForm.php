<?php require_once 'includes/header.php';?>
<?php require_once 'helpers/consultas.php';?>


<?php if(!isset($_SESSION['empleadoUpdate'])):?>
    <?php header('Location:erp.php') ?>
<?php endif;?>
<?php if(!isset($_SESSION['usuario'])):?>
    <?php header('Location:index.php') ?>
<?php endif;?>
<?php require_once 'includes/navbar.php';?>

<div class="container mt-3s d-flex justify-content-center">
    <div class="card bg-secundario" style="width: 50rem;">
    <img src="./assets/logo.png" class="card-img-top" alt="...">
        <div class="card-body ">
            <h5 class="card-title text-center"><?=$_SESSION['empleadoUpdate']['nombre']?></h5>
            <p class="card-text fs-3">Sueldo: <?=$_SESSION['empleadoUpdate']['sueldo']?></p>
        </div>
        <div class="card-body ">
            <form class="form-control" action="actualizarEmpleado.php" method="POST">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control form-control-lg" name="nombre" placeholder="nombre" value="<?=$_SESSION['empleadoUpdate']['nombre']?>" required/>

                <label for="sueldo" class="form-label">Sueldo:</label>
                <input type="number" class="form-control form-control-lg" name="sueldo" placeholder="sueldo" value="<?=$_SESSION['empleadoUpdate']['sueldo']?>" required/>

                <label for="puesto" class="form-label">Puesto:</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="puesto" required>
                    <option value="vendedor" <?= ($_SESSION['empleadoUpdate']['puesto']=='vendedor')?  'selected="selected"':''?> >Vendedor</option>
                    <option value="cajero"  <?= ($_SESSION['empleadoUpdate']['puesto']=='cajero')?  'selected="selected"':''?> >Cajero</option>
                    <option value="gerente"  <?= ($_SESSION['empleadoUpdate']['puesto']=='gerente')?  'selected="selected"':''?> >Gerente</option>
                </select>

                <label for="correo" class="form-label">correo:</label>
                <input type="email" class="form-control form-control-lg" name="correo" placeholder="correo" value="<?=$_SESSION['empleadoUpdate']['correo']?>" required/>

                <label for="contrato" class="form-label">Contrato:</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="contrato" required>
                    <option disabled>Tipo contrato</option>
                    <option value="medio_tiempo" <?=($_SESSION['empleadoUpdate']['contrato']=='medio_tiempo')?  'selected="selected"':''?> >Medio tiempo</option>
                    <option value="tiempo_completo" <?=($_SESSION['empleadoUpdate']['contrato']=='tiempo_completo')?  'selected="selected"':''?> >Tiempo completo</option>
                </select>

                <label for="sexo" class="form-label">sexo:</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="sexo" required>
                    <option disabled>Sexo</option>
                    <option value="Masculino" <?=($_SESSION['empleadoUpdate']['sexo']=='Masculino')?  'selected="selected"':''?> >Masculino</option>
                    <option value="Femenino" <?=($_SESSION['empleadoUpdate']['sexo']=='Femenino')?  'selected="selected"':''?> >Femenino</option>
                </select>
                
                <label for="edad" class="form-label">edad:</label>
                <input type="number" class="form-control form-control-lg" name="edad" placeholder="edad" value="<?=$_SESSION['empleadoUpdate']['edad']?>" required/>

                <input type="submit" class="btn btn-success mt-3 btn-lg"/>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php';?>

