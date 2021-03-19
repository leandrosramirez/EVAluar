<?php 

$xcrud = Xcrud::get_instance();
$xcrud->table('_provincias');
$xcrud->language('es');
$xcrud->table_name('Informe de evaluación de postulantes GCP 2021 | PROVINCIAS');
//COLUMNAS QUE SE MUESTRAN
$xcrud->columns('nombre,Evaluación Técnica');




//Contar cuantos postulantes por provincia están evaluados técnicamente
$xcrud->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1'); // consulta sql sobre el total de confirmados por región

//Ordenar por nombre alfabeito la columna nombre
$xcrud->order_by('region');

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

$xcrud->limit(25);

//alinear datos
$xcrud->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$xcrud->sum('Evaluación Técnica');



  echo $xcrud->render();


?>

