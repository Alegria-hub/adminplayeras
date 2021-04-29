<?php
    require_once "../config/conect.php";
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

    $sql = "INSERT INTO productos VALUES (null,'$nom', '$cat', '$imgContenido', '$mat', '$tall', $stc, $prec)";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Producto agregado');
        window.location.href='../view/panel.php';
        </script>");
    }else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Ocurrio un error');
        window.location.href='../view/registroproducto.php';
        </script>");
    }
?>