<?php
session_start();
include("../config/conect.php");


if (!isset($_SESSION['correo'])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/superhero/bootstrap.min.css" integrity="sha384-HnTY+mLT0stQlOwD3wcAzSVAZbrBp141qwfR4WfTqVQKSgmcgzk+oP0ieIyrxiFO" crossorigin="anonymous">
    <title>Actualizar producto</title>
    <style>
        .lgbtn {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php include("../view/header.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM productos WHERE id_producto = $id";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    ?>
    <div class="container mt-5">
        <div class="text-center">
            <h2>Editar Producto</h2>
        </div>
        <form method="POST" action="../data/update.producto.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <input name="id" type="text" class="form-control" placeholder="player gucci" value="<?php echo $row['id_producto'] ?>" hidden>
                </div>
                <div class="col-lg-6 mb-2">
                    <label for="">Nombre del producto:</label>
                    <input name="nom" type="text" class="form-control" placeholder="player gucci" value="<?php echo $row['nombre'] ?>">
                </div>
                <div class="col-lg-6 mb-2">
                    <label for="">Categoría:</label>
                    <input name="cat" type="text" class="form-control" placeholder="Otakus" value="<?php echo $row['categoria'] ?>">
                </div>
                <div class="col-lg-6 mb-2">
                    <label for="">Material:</label>
                    <input name="mat" type="text" class="form-control" placeholder="Licra" value="<?php echo $row['material'] ?>">
                </div>
                <div class="col-lg-6 mb-2">
                    <label for="">Talla:</label>
                    <input name="tall" type="text" class="form-control" placeholder="XL" value="<?php echo $row['talla'] ?>">
                </div>
                <div class="col-lg-6 mb-2">
                    <label for="">Stock:</label>
                    <input name="stc" type="number" class="form-control" placeholder="345" value="<?php echo $row['stock'] ?>">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="">Precios:</label>
                    <input name="precio" type="text" class="form-control" placeholder="123.4" value="<?php echo $row['precio'] ?>">
                </div>
                <div class="col-lg-12 mb-2">
                    <label for="">Foto del producto:</label>
                    <?php echo '<img height="80" width="80" src="data:image/jpeg;base64,' . base64_encode($row["imagen"]) . '"/>'; ?>
                    <input name="img" type="file" class="form-control">
                </div>
                <div class="col-lg-12 mt-3">
                    <button class="btn btn-primary lgbtn" type="submit">Actualizar</button>
                </div>
        </form>
    </div>
</body>

</html>