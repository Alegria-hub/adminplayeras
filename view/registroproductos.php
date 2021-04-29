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
    <div class="text-center"><h2>Nuevo Producto</h2></div>
        <form method="POST" action="../data/insert.producto.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <label for="">Nombre del producto:</label>
                        <input name="nom" type="text" class="form-control" placeholder="player gucci">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="">Categoría:</label>
                        <input name="cat" type="text" class="form-control" placeholder="Otakus">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="">Material:</label>
                        <input name="mat" type="text" class="form-control" placeholder="Licra">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="">Talla:</label>
                        <input name="tall" type="text" class="form-control" placeholder="XL">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="">Stock:</label>
                        <input name="stc" type="number" class="form-control" placeholder="345">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="">Precios:</label>
                        <input name="precio" type="text" class="form-control" placeholder="123.4">                        
                    </div>
                    <div class="col-lg-12 mb-2">
                        <label for="">Foto del producto:</label>
                        <input name="img" type="file" class="form-control" id="formFile">
                    </div>
                    <div class="col-lg-12 mt-3">
                        <button class="btn btn-primary lgbtn" type="submit">Ingresar</button>
                    </div>
        </form>
    </div>
    
</body>
</html>