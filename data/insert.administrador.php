<?php
    include("../config/conect.php");

    $nom = $_POST['admin'];
    $apel = $_POST['apel'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //$pass2 = $_POST['pass1'];
    
    //$hash = password_hash($pass, PASSWORD_DEFAULT, [15]);

    $sql = "INSERT INTO administradores VALUES (null,'$nom', '$apel', '$email', '$pass')";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Administrador agregado');
        window.location.href='../view/panel.php';
        </script>");
    }else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Ocurrio un error');
        window.location.href='../view/registroadministrador.php';
        </script>");
    }
        
?>