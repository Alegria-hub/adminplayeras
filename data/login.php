<?php
    session_start();
    include("../config/conect.php");

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM administradores WHERE correo = '$email' AND contrasena = '$pass'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        echo $count;
        if ($count == 1) {
            $_SESSION['correo'] = $email;
            $_SESSION['nom'] = $row['nombre'];
            header('Location: ../view/panel.php');
        } else {
            echo "<script>alert('contraseña o correo incorrecto'); 
                            window.location.href='../index.php';
                </script>";
            }
?>