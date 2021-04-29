<?php
/*define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'modelshirts');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}*/

$nombreServidor = "localhost";
$nombreUsuario = "root";
$passwordBaseDeDatos = "";
$nombreBaseDeDatos = "modelshirts";

// Crear conexión con la base de datos.
$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
 
// Validar la conexión de base de datos.
if ($conn ->connect_error) {
  die("Connection failed: " . $conn ->connect_error);
}
?>