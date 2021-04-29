<?php
session_start();
include("../config/conect.php"); 
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
    <title>Inicio</title>
</head>
<body>
    <?php 
        include ("header.php") 
    ?>
    <div class="text-center mt-3">
        <h1>Productos</h1>
    </div>
    <div class="container">
    <?php
        $sql = "SELECT * FROM productos";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    ?>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Stock</th>
                <th scope="col">Img</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
    <?php
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        
    ?>
                <tr class="table-active">
                <th scope="row"><?php echo $row['id_producto']; ?></th>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>'; ?></td>
                <td>
                    <a onclick="return confirm('¿Estás seguro que deseas editar el producto?');" href="actualizar.producto.php?id=<?php echo $row['id_producto']; ?>">Editar</a>
                    <a onclick="return confirm('¿Estás seguro que deseas eliminar el producto?');" href="../data/eliminar.producto.php?id=<?php echo $row['id_producto']; ?>">Eliminar</a>
                </td>
                </tr>
    <?php
        }
    ?>
            </tbody>
        </table>
    </div>
</body>
</html>