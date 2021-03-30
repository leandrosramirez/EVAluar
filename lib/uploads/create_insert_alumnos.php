
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
$sql = "CREATE TABLE IF NOT EXISTS alumnos (
  id INT(6)  NOT NULL AUTO_INCREMENT,
  nombres varchar(50) NOT NULL,
  apellidos varchar(50) NOT NULL,
  email varchar(50) DEFAULT NULL,
  fecha timestamp NULL DEFAULT NULL,
  direccion varchar(50) NOT NULL,
  PRIMARY KEY (id)
)  CHARSET=utf8;



INSERT INTO alumnos (id, nombres, apellidos, email, fecha, direccion) VALUES
(2, 'johanna', 'tabella', 'joha@gmail.com', '2021-03-16 21:51:07', 'mi direccion'),
(1, 'leandro', 'ramirez', 'lean@gmail.com', '2021-03-17 21:51:07', 'mi direccion');
COMMIT;

";

// Se verifica si la tabla ha sido creado
if ($conn->query($sql) === TRUE) {
    echo "Se agrego todo ok";
} else {
    echo "Hubo un error al crear la tabla alumnos: " . $conn->error;
}
// Cerramos la conexión
$conn->close();


