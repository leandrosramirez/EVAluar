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
$sql = "INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `email`, `fecha`) VALUES
(1, 'leandro', 'ramitrez', 'lean@gmail.com', '2021-03-17 18:51:07'),
(2, 'johanna', 'tabella', 'jopha@gmail.com', '2021-03-16 18:51:07');";

// Se verifica si la tabla ha sido creado
if ($conn->query($sql) === TRUE) {
    echo "los registros fueron cargados correctamente";
} else {
    echo "Hubo un error al crear la tabla alumnos: " . $conn->error;
}
// Cerramos la conexión
$conn->close();


