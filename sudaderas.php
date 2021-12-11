<?php require_once 'includes/header.php';?>
<?php require_once 'helpers/consultas.php';?>


<?php if(isset($_SESSION['errorLogin'])|| !isset($_SESSION['usuario'])):?>
    <?php header('Location:index.php') ?>
<?php elseif(isset($_SESSION['errorProducto'])):?>
    <div class="container row pt-5">
        <div class="col-md-5"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <?php echo "<div class='text-center'>".$_SESSION['errorProducto']."</div>"?>
        </div>
        <div class="col-md-3"></div>
    </div>  
<?php endif;?>

<?php require_once 'includes/navbar.php';?>

<?php if(isset($_SESSION['errorBorrar'])):?>
    <div class="container row pt-5">
        <div class="col-md-5"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <?php 
                echo "<div class='text-center'>".$_SESSION['errorBorrar']."</div>";
                unset($_SESSION['errorBorrar']);
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>  
<?php endif;?>
<?php if(isset($_SESSION['errorUpdate'])):?>
    <div class="container row pt-5">
        <div class="col-md-5"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <?php 
                echo "<div class='text-center'>".$_SESSION['errorUpdate']."</div>";
                unset($_SESSION['errorUpdate']);
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>  
<?php endif;?>
<div class="container">
    <div class="row">    
        <div class="col-md-2"></div>    
        <div class="col-md-8">
            <h3 class="fw-blod fs-2 ">Sudaderas:</h3>
            <table class="table table-secondary table-striped mt-5">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">modelo</th>
                    <th scope="col">precio</th>
                    <th scope="col">talla</th>
                    <th scope="col">color</th>
                    <th scope="col">imagen</th>
                    <th scope="col">stock</th>
                    <th scope="col">disponible</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sudaderas=listarTodasSudaderas($db);
                        if(!empty($sudaderas)):
                            foreach($sudaderas as $sudadera):                            
                    ?>
                        <tr>
                            <th scope="row"><?=$sudadera['id']?></th>
                            <td><?=$sudadera['modelo']?></td>
                            <td><?=$sudadera['precio']?></td>
                            <td><?=$sudadera['talla']?></td>
                            <td><?=$sudadera['color']?></td>
                            <td><img src="./files/sudaderas/<?=$sudadera['imagen']?>" width="75px" height="60px"/></td>
                            <td><?=$sudadera['stock']?></td>
                            <td><?=$sudadera['disponible']?></td>
                            <td><button class="btn btn-primary btn-lg "><a href="editar.php?categoria=sudaderas&id=<?=$sudadera['id']?>" class="link-light fw-bold">Editar</a></button></td>
                            <td><button class="btn btn-danger btn-lg "><a href="eliminar.php?categoria=sudaderas&id=<?=$sudadera['id']?>" class="link-light fw-bold">Eliminar</a></button></td>
                        </tr>
                    <?php 
                            endforeach;
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php require_once 'includes/busqueda.php';?> 
<?php if(isset($_SESSION['errorBusqueda'])):?>
    <div class="container row pt-5">
        <div class="col-md-5"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <?php echo "<div class='text-center'>".$_SESSION['errorBusqueda']."</div>"?>
        </div>
        <div class="col-md-3"></div>
    </div>    
<?php elseif(isset($_SESSION['producto'])):?>
    <div class="container">
        <h3 class="fw-blod fs-2 ">Resultado:</h3>
        <table class="table table-secondary table-striped mt-5">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">modelo</th>
                <th scope="col">precio</th>
                <th scope="col">talla</th>
                <th scope="col">color</th>
                <th scope="col">imagen</th>
                <th scope="col">stock</th>
                <th scope="col">disponible</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $productos=$_SESSION['producto'];
                    for($i=0;$i<sizeof($productos)-1;$i++):
                        $producto=$productos[$i];   
                ?>
                    <tr>
                        <th scope="row"><?=$producto['id']?></th>
                        <td><?=$producto['modelo']?></td>
                        <td><?=$producto['precio']?></td>
                        <td><?=$producto['talla']?></td>
                        <td><?=$producto['color']?></td>
                        <td><img src="./files/<?=$_SESSION['producto']['categoria']?>/<?=$producto['imagen']?>" width="75px" height="60px"/></td>
                        <td><?=$producto['stock']?></td>
                        <td><?=$producto['disponible']?></td>
                        <td><button class="btn btn-primary btn-lg "><a href="editar.php?categoria=sudaderas&id=<?=$producto['id']?>" class="link-light fw-bold">Editar</a></button></td>
                        <td><button class="btn btn-danger btn-lg "><a href="editar.php?categoria=sudaderas&id=<?=$producto['id']?>" class="link-light fw-bold">Eliminar</a></button></td>
                    </tr>
                <?php 
                    endfor;
                ?>
                
            </tbody>
        </table>
    </div>
<?php endif;
    unset($_SESSION['producto']);
?>


<?php require_once 'includes/footer.php';?>

