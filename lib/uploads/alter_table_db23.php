
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
//$sql = "ALTER TABLE tds2021 ADD direccion varchar(50) NOT NULL;";
$sql = "ALTER TABLE tds2021 MODIFY COLUMN db23 varchar(10) NOT NULL;" ; // Cambio el tipo de dato de una columna


// Se verifica si la tabla ha sido creado
if ($conn->query($sql) === TRUE) {
    echo "se agrego todo ok";
} else {
    echo "Hubo un error al crear la tabla alumnos: " . $conn->error;
}
// Cerramos la conexión
$conn->close();


