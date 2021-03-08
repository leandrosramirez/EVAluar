<?php 
//clases autenticación 
require_once '../users/init.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}


include('./xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('formar_cultura');
$xcrud->language('es');

$xcrud->label('id','Identificador');
$xcrud->label('nombre','Nombre');
$xcrud->label('apellido','Apellido');
$xcrud->label('email','Email');
$xcrud->label('perfil','Perfil');
$xcrud->label('usuarie_ac','Usuarix de AULA CULTURA');



//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('id,nombre,apellido,email,perfil,usuarie_ac');

//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
$xcrud->fields('id,nombre,apellido,email,perfil,usuarie_ac');

//filtrar
//$xcrud->where('G7Q00001 =', "1");
//$xcrud->where('region =', "3");//Filtra la región NEA
//$xcrud->where('region =', "4"); //filtra por regiones de la 1  LA 6 NO PUEDEN HABER DOS REGIONES JUNTAS
//$xcrud->query('SELECT * FROM _preinscriptos WHERE G7Q00001 = "Sí"');


//$xcrud->button('{G6Q00001}', 'Descargar CV','icon-file','',array('target'=>'_blank'));
//$xcrud->button('{G6Q00002}', 'Carta Aval','icon-file','',array('target'=>'_blank'));


//selector de regiones
//$xcrud->relation('region','_regiones','id_region','nombre');
//resaltador de fila // $xcrud->highlight_row('evaluacion_tecnica', '=', 0, '#8DED79');
//resaltador de campo // 
//$xcrud->highlight_row('evaluacion_tecnica', '=', 1, '#91D8F7');
//$xcrud->highlight('evaluacion_cuantitativa', '=', 0, '#F7ADAF');
//$xcrud->highlight('evaluacion_cualitativa', '=', 0, '#A8CF45');
//tamaño de la la columna
//$xcrud->column_width('evaluacion_tecnica','5%');
//$xcrud->column_width('evaluacion_cuantitativa','5%');
//$xcrud->column_width('evaluacion_cualitativa','5%');
//$xcrud->column_width('G1Q00003','5%');
//$xcrud->column_width('G1Q00001','15%');
//$xcrud->column_width('G1Q00002','15%');
//$xcrud->limit(10);



//inhabilitar edición de campos
//$xcrud->change_type('G1Q00001','none');


//seteo de botones
//$xcrud->unset_add();
//$xcrud->unset_edit();
//$xcrud->unset_remove();
//$xcrud->unset_view();
//$xcrud->unset_csv();
//$xcrud->unset_limitlist();
//$xcrud->unset_numbers();
//$xcrud->unset_pagination();
//$xcrud->unset_print();
//$xcrud->unset_search();
//$xcrud->unset_title();
//$xcrud->unset_sortable();
$xcrud->limit(10);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Usuarixs de FORMAR CULTURA</title>
    <?php echo Xcrud::load_css(); ?>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
 
<body>

	<img src="http://datossociales.com/participantes/logos.png"  width="500"><br><br>

<!-- menu -->

 <a type="button" class="btn btn-primary" href="https://datossociales.com/participantes/users/aulas.php">Aulas</a> 
 <a type="button" class="btn btn-primary" href="https://datossociales.com/participantes/users/usuarios_aulacultura.php">Usuarios Aula Cultura</a> 
 <a type="button" class="btn btn-primary" href="https://datossociales.com/participantes/users/usuaries_formar_cultura.php">Usuarios Formar Cultura</a> 
 <a type="button" class="btn btn-primary" href="https://datossociales.com/participantes/users/cursada.php">Cursada</a> 

<!-- fin menu -->
 
<?php
    echo $xcrud->render();
?>



<?php echo Xcrud::load_js(); ?>
</body>
</html>