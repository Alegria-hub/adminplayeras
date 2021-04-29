<?php
    include("../config/conect.php");

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $cat = $_POST['cat'];
    //$img = $_POST['img'];
    //subiendo img
    $revisar = getimagesize($_FILES["img"]["tmp_name"]);
    if ($revisar !== false) {
        $image = $_FILES['img']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
    }
    $mat = $_POST['mat'];
    $tall = $_POST['tall'];
    $stc = $_POST['stc'];
    $prec = $_POST['precio'];

    $sql = "UPDATE productos SET nombre='$nom', categoria='$cat', imagen='$imgContenido', material='$mat', talla='$tall', stock=$stc, precio=$prec WHERE id_producto=$id";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if ($result) {
        header("Location: ../view/panel.php");
    }else{
        echo "<script>
            alert('No se ppuedo actualizar');
        </script>";
    }
?>