
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
$sql = "ALTER TABLE alumnos ADD direccion varchar(50) NOT NULL;";

// Se verifica si la tabla ha sido creado
if ($conn->query($sql) === TRUE) {
    echo "se agrego todo ok re piola ameo";
} else {
    echo "Hubo un error al crear la tabla alumnos: " . $conn->error;
}
// Cerramos la conexión
$conn->close();


