<?php require_once 'includes/header.php';?>
<?php require_once 'helpers/consultas.php';?>


<?php if(!isset($_SESSION['productoUpdate'])):?>
    <?php header('Location:erp.php') ?>
<?php endif;?>
<?php if(!isset($_SESSION['usuario'])):?>
    <?php header('Location:index.php') ?>
<?php endif;?>
<?php require_once 'includes/navbar.php';?>

<div class="container mt-3s d-flex justify-content-center">
    <div class="card bg-secundario" style="width: 50rem;">
            <img src="./files/<?=$_SESSION['productoUpdate']['categoria']."/".$_SESSION['productoUpdate']['imagen']?>" class="card-img-top" alt="...">
        <div class="card-body ">
            <h5 class="card-title text-center"><?=$_SESSION['productoUpdate']['modelo']?></h5>
            <p class="card-text"><?=$_SESSION['productoUpdate']['descripcion']?></p>
        </div>
        <div class="card-body ">
            <form class="form-control" action="updateProduct.php" method="POST">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" class="form-control form-control-lg" name="modelo" placeholder="Modelo" value="<?=$_SESSION['productoUpdate']['modelo']?>" required/>

                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control form-control-lg" name="precio" placeholder="Precio" value="<?=$_SESSION['productoUpdate']['precio']?>" required/>

                <label for="talla" class="form-label">Talla:</label>
                <input type="text" class="form-control form-control-lg" name="talla" placeholder="Talla" value="<?=$_SESSION['productoUpdate']['talla']?>" required/>

                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control form-control-lg" name="descripcion" placeholder="Descripcion" value="<?=$_SESSION['productoUpdate']['descripcion']?>" required/>

                <label for="color" class="form-label">Color:</label>
                <input type="text" class="form-control form-control-lg" name="color" placeholder="Color" value="<?=$_SESSION['productoUpdate']['color']?>" required/>

                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control form-control-lg" name="stock" placeholder="Stock" value="<?=$_SESSION['productoUpdate']['stock']?>" required/>

                <input type="submit" class="btn btn-success mt-3 btn-lg"/>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php';?>

