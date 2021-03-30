<?php
// Declaramos archivo de conexion
include("conexion.php");

// Creamos la conexión con el servidor de datos
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
// Verificamos la conexión con el servidor MySQL
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}

// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE alumnos (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombres VARCHAR(50) NOT NULL,
apellidos VARCHAR(50) NOT NULL,
email VARCHAR(50),
fecha TIMESTAMP
)";

// Se verifica si la tabla ha sido creado
if ($conn->query($sql) === TRUE) {
    echo "la tabla alumnos ha sido creado";
} else {
    echo "Hubo un error al crear la tabla alumnos: " . $conn->error;
}
// Cerramos la conexión
$conn->close();


