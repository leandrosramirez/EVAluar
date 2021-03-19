<?php 


//REGIONES//////////////////////////////////////////////
$regiones = Xcrud::get_instance();
$regiones->table('_regiones');
$regiones->language('es');
$regiones->table_name('Informe de evaluación de postulantes GCP 2021 | REGIONES');
//COLUMNAS QUE SE MUESTRAN
$regiones->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$regiones->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_region = {id_region} AND evaluadoT = 1'); // consulta sql sobre el total de confirmados por región

//Ordenar por nombre alfabeito la columna nombre
$regiones->order_by('nombre');

//deshabilitación de botones 
$regiones->unset_add();
$regiones->unset_edit();
$regiones->unset_remove();
$regiones->unset_view();
//$xcrud->unset_csv();
$regiones->unset_limitlist();
$regiones->unset_numbers();
$regiones->unset_pagination();
$regiones->unset_print();
$regiones->unset_search();
//$xcrud->unset_title();
$regiones->unset_sortable();

$regiones->limit(25);

//alinear datos
$regiones->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$regiones->sum('Evaluación Técnica');











//REGION NOA //////////////////////////////////////////////
$noa = Xcrud::get_instance();
$noa->table('_provincias');
$noa->language('es');
$noa->table_name('Región NOA');
//COLUMNAS QUE SE MUESTRAN
$noa->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$noa->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 1'); // consulta sql sobre el total de confirmados por región

$noa->where('region =', "1");//Filtra la región NEA

//Ordenar por nombre alfabeito la columna nombre
$noa->order_by('nombre');

//deshabilitación de botones 
$noa->unset_add();
$noa->unset_edit();
$noa->unset_remove();
$noa->unset_view();
//$xcrud->unset_csv();
$noa->unset_limitlist();
$noa->unset_numbers();
$noa->unset_pagination();
$noa->unset_print();
$noa->unset_search();
//$xcrud->unset_title();
$noa->unset_sortable();

$noa->limit(25);

//alinear datos
$noa->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$noa->sum('Evaluación Técnica');


//REGION NEA //////////////////////////////////////////////
$nea = Xcrud::get_instance();
$nea->table('_provincias');
$nea->language('es');
$nea->table_name('Región NEA');
//COLUMNAS QUE SE MUESTRAN
$nea->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$nea->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 2'); // consulta sql sobre el total de confirmados por región

$nea->where('region =', "2");//Filtra la región NEA

//Ordenar por nombre alfabeito la columna nombre
$nea->order_by('nombre');

//deshabilitación de botones 
$nea->unset_add();
$nea->unset_edit();
$nea->unset_remove();
$nea->unset_view();
//$xcrud->unset_csv();
$nea->unset_limitlist();
$nea->unset_numbers();
$nea->unset_pagination();
$nea->unset_print();
$nea->unset_search();
//$xcrud->unset_title();
$nea->unset_sortable();

$nea->limit(25);

//alinear datos
$nea->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$nea->sum('Evaluación Técnica');


//REGION CUYO //////////////////////////////////////////////
$cuyo = Xcrud::get_instance();
$cuyo->table('_provincias');
$cuyo->language('es');
$cuyo->table_name('Región CUYO');
//COLUMNAS QUE SE MUESTRAN
$cuyo->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$cuyo->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 6'); // consulta sql sobre el total de confirmados por región

$cuyo->where('region =', "6");//Filtra la región cuyo

//Ordenar por nombre alfabeito la columna nombre
$cuyo->order_by('nombre');

//deshabilitación de botones 
$cuyo->unset_add();
$cuyo->unset_edit();
$cuyo->unset_remove();
$cuyo->unset_view();
//$xcrud->unset_csv();
$cuyo->unset_limitlist();
$cuyo->unset_numbers();
$cuyo->unset_pagination();
$cuyo->unset_print();
$cuyo->unset_search();
//$xcrud->unset_title();
$cuyo->unset_sortable();

$cuyo->limit(25);

//alicuyor datos
$cuyo->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$cuyo->sum('Evaluación Técnica');


//REGION centro //////////////////////////////////////////////
$centro = Xcrud::get_instance();
$centro->table('_provincias');
$centro->language('es');
$centro->table_name('Región CENTRO');
//COLUMNAS QUE SE MUESTRAN
$centro->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$centro->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 3'); // consulta sql sobre el total de confirmados por región

$centro->where('region =', "3");//Filtra la región centro

//Ordenar por nombre alfabeito la columna nombre
$centro->order_by('nombre');

//deshabilitación de botones 
$centro->unset_add();
$centro->unset_edit();
$centro->unset_remove();
$centro->unset_view();
//$xcrud->unset_csv();
$centro->unset_limitlist();
$centro->unset_numbers();
$centro->unset_pagination();
$centro->unset_print();
$centro->unset_search();
//$xcrud->unset_title();
$centro->unset_sortable();

$centro->limit(25);

//alicentror datos
$centro->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$centro->sum('Evaluación Técnica');


//REGION patagonia //////////////////////////////////////////////
$patagonia = Xcrud::get_instance();
$patagonia->table('_provincias');
$patagonia->language('es');
$patagonia->table_name('Región PATAGONIA');
//COLUMNAS QUE SE MUESTRAN
$patagonia->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$patagonia->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 5'); // consulta sql sobre el total de confirmados por región

$patagonia->where('region =', "5");//Filtra la región patagonia

//Ordenar por nombre alfabeito la columna nombre
$patagonia->order_by('nombre');

//deshabilitación de botones 
$patagonia->unset_add();
$patagonia->unset_edit();
$patagonia->unset_remove();
$patagonia->unset_view();
//$xcrud->unset_csv();
$patagonia->unset_limitlist();
$patagonia->unset_numbers();
$patagonia->unset_pagination();
$patagonia->unset_print();
$patagonia->unset_search();
//$xcrud->unset_title();
$patagonia->unset_sortable();

$patagonia->limit(25);

//alipatagoniar datos
$patagonia->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$patagonia->sum('Evaluación Técnica');


//REGION baires //////////////////////////////////////////////
$baires = Xcrud::get_instance();
$baires->table('_provincias');
$baires->language('es');
$baires->table_name('Región BAIRES');
//COLUMNAS QUE SE MUESTRAN
$baires->columns('nombre,Evaluación Técnica');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$baires->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 4'); // consulta sql sobre el total de confirmados por región

$baires->where('region =', "4");//Filtra la región baires

//Ordenar por nombre alfabeito la columna nombre
$baires->order_by('nombre');

//deshabilitación de botones 
$baires->unset_add();
$baires->unset_edit();
$baires->unset_remove();
$baires->unset_view();
//$xcrud->unset_csv();
$baires->unset_limitlist();
$baires->unset_numbers();
$baires->unset_pagination();
$baires->unset_print();
$baires->unset_search();
//$xcrud->unset_title();
$baires->unset_sortable();

$baires->limit(25);

//alibairesr datos
$baires->column_class('Evaluación Técnica', 'align-center');
//sumar cantidades de columnas
$baires->sum('Evaluación Técnica');

  echo $regiones->render();


?>






<!DOCTYPE HTML>
<html>
<head>


</head>
 
<body>

<div class="row"> 

<div class="col-md-6">
	<?php
    echo $noa->render();
?>
</div>
 
 <div class="col-md-6">
	<?php
    echo $patagonia->render();
?>
</div>

<div class="col-md-6">
	<?php
    echo $centro->render();
?>
</div>
<div class="col-md-6">
	<?php
    echo $cuyo->render();
?>
</div>
<div class="col-md-6">
	<?php
    echo $nea->render();
?>
</div>
<div class="col-md-6">
	<?php
    echo $baires->render();
?>
</div>


</div>

</body>
</html>