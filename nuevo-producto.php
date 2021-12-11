<?php require_once 'includes/header.php';?>
<?php require_once 'helpers/consultas.php';?>


<?php if(!isset($_SESSION['usuario'])):?>
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
            <p class="card-text">Nuevo producto</p>
        </div>
        <div class="card-body ">
            <form class="form-control" action="insertar.php" method="POST"  enctype="multipart/form-data">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control form-control-lg" name="modelo" placeholder="Modelo" required/>

                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control form-control-lg" name="precio" placeholder="Precio" required/>

                <label for="talla" class="form-label">Talla</label>
                <input type="text" class="form-control form-control-lg" name="talla" placeholder="Talla" required/>
                
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control form-control-lg" name="descripcion" placeholder="Descripcion" required/>
                
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control form-control-lg" name="color" placeholder="Color" required/>
                
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control form-control-lg" name="imagen" placeholder="imagen" required/>

                <label for="stock" class="form-label">stock:</label>
                <input type="number" class="form-control form-control-lg" name="stock" placeholder="Sctock" required/>
                
                <label for="categoria" class="form-label">Categoria:</label>
                <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="categoria" required>
                    <option selected disabled>Seleciona categoria</option>
                    <option value="playeras">Playeras</option>
                    <option value="sudaderas">Sudaderas</option>
                </select>

                <input type="submit" class="btn btn-success mt-3 btn-lg" value="Registrar"/>
            </form>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php';?>

