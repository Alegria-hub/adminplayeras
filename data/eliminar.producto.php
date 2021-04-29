<?php
    include "../config/conect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM productos WHERE id_producto = $id";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Producto eliminado');
        window.location.href='../view/panel.php';
        </script>");
    }else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Hubo un error');
        window.location.href='actualizar.producto.php';
        </script>");
    }
?>