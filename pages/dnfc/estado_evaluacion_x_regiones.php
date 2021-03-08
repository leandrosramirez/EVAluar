<?php 
//clases autenticación 
require_once '../users/init.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}


include('./xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('_regiones');
$xcrud->language('es');
$xcrud->table_name('Evaluacion técnica de participantes');
//COLUMNAS QUE SE MUESTRAN
$xcrud->columns('nombre,Postulantes confirmados,Evaluación hecha por región,Evaluación faltante por región');


//Descriminación por provincias al ingresar a cada región
$provinciasxregion = $xcrud->nested_table('_provincias','id_region','_provincias','region'); // 2nd level 2


//$xcrud->subselect('Products count','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 
$xcrud->subselect('Postulantes confirmados','SELECT COUNT(*) FROM _preinscriptos WHERE region = {id_region} AND G7Q00001 = 1'); // consulta sql sobre el total de confirmados por región

$xcrud->subselect('Evaluación hecha por región','SELECT COUNT(*) FROM _preinscriptos WHERE region = {id_region} AND G7Q00001 = 1 AND evaluacion_tecnica = 1'); // consulta sql que muestra los evaluados

$xcrud->subselect('Evaluación faltante por región','SELECT COUNT(*) FROM _preinscriptos WHERE region = {id_region} AND G7Q00001 = 1 AND evaluacion_tecnica = 0'); // consulta sql que muestra los faltantes por evaluar

//$xcrud->subselect('Cantidad por region','SELECT COUNT(*) FROM _preinscriptos WHERE region = {id_region} AND evaluacion_tecnica = 0'); 

//$xcrud->subselect('Evaluación técnica','SELECT SUM(*) FROM _preinscriptos WHERE evaluacion_tecnica = {id_region}','id_provincia');

//deshabilitación de botones 
$xcrud->unset_add();
$xcrud->unset_edit();
$xcrud->unset_remove();
$xcrud->unset_view();
//$xcrud->unset_csv();
$xcrud->unset_limitlist();
$xcrud->unset_numbers();
$xcrud->unset_pagination();
$xcrud->unset_print();
$xcrud->unset_search();
//$xcrud->unset_title();
$xcrud->unset_sortable();

//alinear datos
$xcrud->column_class('Postulantes confirmados,Evaluación hecha por región,Evaluación faltante por región', 'align-center');
//sumar cantidades de columnas
$xcrud->sum('Postulantes confirmados,Evaluación hecha por región,Evaluación faltante por región');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Evaluación por regiones</title>
    <?php echo Xcrud::load_css(); ?>


</head>
 
<body>
 
<?php
    echo $xcrud->render();
?>



<?php echo Xcrud::load_js(); ?>
</body>
</html>