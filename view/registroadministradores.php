<?php
session_start();
 
if(!isset($_SESSION['correo'])){
    header('Location: ../index.php');
    exit;
} else {
    // Show users the page!
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/superhero/bootstrap.min.css" integrity="sha384-HnTY+mLT0stQlOwD3wcAzSVAZbrBp141qwfR4WfTqVQKSgmcgzk+oP0ieIyrxiFO" crossorigin="anonymous">
    <title>Registro de productos</title>
    <style>
        .lgbtn{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include ("header.php") ?>
    <div class="container mt-5">
    <div class="text-center"><h2>Nuevo Administrador</h2></div>
        <form method="POST" action="../data/insert.administrador.php">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <label for="">Nombre del administrador:</label>
                        <input name="admin" type="text" class="form-control" placeholder="Jaime" required>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <label for="">Apellidos:</label>
                        <input name="apel" type="text" class="form-control" placeholder="Alegría Mejía" required>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <label for="">Correo:</label>
                        <input name="email" type="text" class="form-control" placeholder="example@colteck.com" required>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <label for="">Contraseña:</label>
                        <input name="pass" type="password" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <button class="btn btn-primary lgbtn" type="submit">Agregar</button>
                    </div>
                </div>
        </form>
    </div>
    
</body>
</html>