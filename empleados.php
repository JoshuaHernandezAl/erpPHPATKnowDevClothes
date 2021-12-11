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
            <h3 class="fw-blod fs-2 ">Empleados:</h3>
            <table class="table table-primary table-striped mt-5">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">sueldo</th>
                    <th scope="col">puesto</th>
                    <th scope="col">correo</th>
                    <th scope="col">contrato</th>
                    <th scope="col">edad</th>
                    <th scope="col">sexo</th>
                    <th scope="col">sucursal</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $empleados=listarEmpleados($db);
                        if(!empty($empleados)):
                            foreach($empleados as $empleado):                            
                    ?>
                        <tr>
                            <th scope="row"><?=$empleado['id']?></th>
                            <td><?=$empleado['nombre']?></td>
                            <td><?=$empleado['sueldo']?></td>
                            <td><?=$empleado['puesto']?></td>
                            <td><?=$empleado['correo']?></td>
                            <td><?=$empleado['contrato']?></td>
                            <td><?=$empleado['edad']?></td>
                            <td><?=$empleado['sexo']?></td>
                            <td><?=$empleado['sucursal']?></td>
                            <td><button class="btn btn-primary btn-lg "><a href="editarEmpleado.php?id=<?=$empleado['id']?>" class="link-light fw-bold">Editar</a></button></td>
                            <td><button class="btn btn-danger btn-lg "><a href="eliminar.php?categoria=usuarios&id=<?=$empleado['id']?>" class="link-light fw-bold">Eliminar</a></button></td>
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


<?php require_once 'includes/footer.php';?>

