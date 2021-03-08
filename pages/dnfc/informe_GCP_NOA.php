<?php 
//clases autenticación 
require_once '../users/init.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}


include('./xcrud/xcrud.php');
Xcrud_config::$editor_url = 'https://datossociales.com/participantes/users/editors/ckeditor/ckeditor.js';
$xcrud = Xcrud::get_instance();
$xcrud->table('logs_GCP_NOA');
$xcrud->language('es');
$xcrud->table_name('logs GCP NOA');

$xcrud->label('id','identificador');
$xcrud->label('Hora','Hora');
$xcrud->label('Nombre_completo_del_usuario','Usuario');
$xcrud->label('Usuario_afectado','Usuario Afectado');
$xcrud->label('Contexto_del_evento','Contexto del Evento');
$xcrud->label('Componente','Componente');
$xcrud->label('Nombre_evento','Nombre del Evento');
$xcrud->label('Descripcion','Descripción');
$xcrud->label('Origen','Origen');
$xcrud->label('Dirección_IP','Dirección de IP');
$xcrud->label('id_usuario','id_usuario');


//relación con la tabla provincia
//$xcrud->relation('G01Q09','_provincias','id_provincia','nombre');

//****************************DATOS QUE SE MUESTRAN EN LA LISTA*********************************
$xcrud->columns('Nombre_completo_del_usuario,Usuario_afectado,Contexto_del_evento,Componente,Nombre_evento,Origen');


//$xcrud->button('https://aula.cultura.gob.ar/user/editadvanced.php?id={id}','Editar Perfil','glyphicon glyphicon-pencil','',array('target'=>'_blank'));
//$xcrud->button('https://aula.cultura.gob.ar/user/profile.php?id={id}','Ver Perfil','glyphicon glyphicon-user','',array('target'=>'_blank'));

//************************************Consulta cantidad de participantes por aula ******************************
//Matriculaciones: es el nombre de la columna
//cursada: es el nombre de la tabla donde se busca el dato
//id_usuario: nombre de la columna de datos de la tabla actual (ene ste caso estamos parados en la tabla usuarios)
//{id}: valor del campo del campo que se busca en la clolumna id de la tabla cursada
//$xcrud->subselect('Matriculaciones','SELECT COUNT(*) FROM cursada WHERE id_usuario = {id}'); //

//*********************SUMA DE VALORES AL PIE DE LA COLUMNA*************
//$xcrud->sum('Matriculaciones','align-right'); // use {value} tag to get sum value in pattern


//*********************ALINEACIÓN DE LAS COLUMNAS***************
//$xcrud->column_class('Matriculaciones', 'align-right');



//////estudiantes por aulas
//$planesestudio = $xcrud->nested_table('instancia','id','cursada','id_usuario'); // 2nd level 2
    //$planesestudio->where('modulo =', 1; //puede ser $db->query(...)
    //$planesestudio->relation('codigo_materia','materias','cod_mat','nombre');
    //$planesestudio->relation('id_aula','aulas','id','nombre');
    //$planesestudio->relation('id_usuario','usuarios','id','username');
    //$planesestudio->change_type('rol','select','','Estudiante,Gestor,Profesor,Profesor SPE,Invitade');




//$xcrud->subselect('puntajefinal','SELECT SUM(amount) FROM TDS WHERE G02Q16 = {customerNumber}'); // other table

//*****************************Suma de puntaje automático****************************************
//$xcrud->subselect('Punt_Total','{G02Q01}+{G02Q03}+{G01Q13bis}+{G02Q02bis}+{G02Q06bis}+{G02Q11bis}+{G02Q13bis}+{G02Q14bis}');


//*******************************VALORES DE CAMPO PARA EVALUACIÓN CUANLITATIVA***********************
//$xcrud->change_type('G01Q13bis','select','','0,1,2');


//*********************************SOLAPAS en el formulario******************
//$xcrud->fields('G02Q01,G02Q03', false, 'Evaluación cuantitativa');
//$xcrud->fields('G01Q13,G01Q13bis,G02Q02,G02Q02bis,G02Q06,G02Q06bis,G02Q11,G02Q11bis,G02Q13,G02Q13bis,G02Q14,G02Q14bis', false, 'Evaluación Cualitativa');
//$xcrud->fields('nombre_jurado,puntaje_jurado,observaciones,Punt_Total,evaluacion_final', false, 'Evaluación final');


//desplegar lista de selección (valores) para el campo evaluación_final
//$xcrud->change_type('evaluacion_final_evaluador2','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('postulacion_final','select','',',SI,NO,A REVISAR,SUPLENTE');

//$xcrud->order_by('Puntaje','desc');

//resaltador de campo // 
//$xcrud->highlight_row('evaluacion_final', '=', "Seleccionado", '#D3FF91');
//$xcrud->highlight_row('evaluacion_final', '=', "No Seleccionado", '#FF9191');
//$xcrud->highlight_row('evaluacion_final', '=', "En Evaluación", '#feffc4');

//Deshabilitar edición de evaluacion_final_evaluador2
//$xcrud->disabled('evaluacion_final_evaluador1');
//$xcrud->disabled('comentarios_evaluador1');


//$xcrud->condition(array('evaluacion_final_evaluador1','evaluacion_final_evaluador2'),'=','SI','disabled','postulacion_final');

//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G3Q00005,G5Q00002,t1,t2,t3,t4,t5,t6,comentarios,evaluacion_tecnica,c1,c2,c3,c4,c5,c6,c7,c8,c8,c10,evaluacion_cuantitativa,evaluacion_cualitativa');
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G1Q00008,G1Q00009,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G2Q00005,G2Q00007,G2Q00008,G3Q00001,G3Q00002,G3Q00002[other],G3Q00003,G3Q00004,G3Q00005,G3Q00006,G4Q00001,G4Q00002,G4Q00003,G4Q00004[SQ001],G4Q00004[SQ002],G4Q00004[SQ003],G4Q00004[SQ004],G4Q00004[other],G4Q00005,G4Q00006,G4Q00007,G4Q00008,G5Q00001,G5Q00001[other],G5Q00002,G5Q00003,G5Q00004,G5Q00005,G5Q00006,G5Q00007,t1,t2,t3,t4,t5,t6,c1,c2,c3,c4,c5,c6,c7,c8,c9,comentarios,c10,evaluacion_tecnica,evaluacion_cuantitativa,evaluacion_cualitativa');


//$xcrud->change_type('nombre_jurado','select','',' ,Diego Amorin,Lautaro Aguirre,Paula Bruno,Natalia Filacanavo,Rosario Lucesole,Marina Navarro');
//$xcrud->change_type('evaluacion_final','select','',' ,En Evaluación,Seleccionado,No Seleccionado');

//$xcrud->button('{G06Q56}', 'Descargar Carta Aval','icon-file','',array('target'=>'_blank'));
//tooltips
//$xcrud->field_tooltip('c1','1 a 5 (1 punto hasta 5; 5 puntos sólo 1) fomenta representatividad');
//$xcrud->field_tooltip('c2','1 a 5 (1 punto menor 1 año; 5 puntos más de 7 años) fomenta continuidad');
//$xcrud->field_tooltip('c3','1 a 5 (1 punto mucha; 5 puntos poca) fomenta renovación');
//$xcrud->field_tooltip('c4','1 a 5 (1 posgrado; 5 primaria) fomenta inclusión');
//$xcrud->field_tooltip('c5','1 a 5 (1 mínimo; 5 máximo) fomenta conectividad actual');
//$xcrud->field_tooltip('c6','1 a 5 (1 en varias; 5 en ninguna) fomenta dedicación');
//$xcrud->field_tooltip('c7','1 a 5 (1 mínimo; 5 máximo) fomenta diversidad cultural');
//$xcrud->field_tooltip('c8','1 a 5 (1 mínimo; 5 máximo) fomenta reconocimiento');
//$xcrud->field_tooltip('c9','1 a 5 (1 mínimo; 5 máximo) fomenta vinculación política');
//$xcrud->field_tooltip('c10','1 a 5 (1 mínimo; 5 máximo) fomenta replicabilidad');
//filtrar
//$xcrud->where('G7Q00001 =', "1");
//$xcrud->where('region =', "1");//Filtra la región NOA
//$xcrud->where('region =', "2");//Filtra la región NEA
//$xcrud->where('region =', "3");//Filtra la región CENTRO
//$xcrud->where('region =', "4");//Filtra la región BUENOS AIRES
//$xcrud->where('region =', "5");//Filtra la región PATAGONIA
//$xcrud->where('region =', "6");//Filtra la región CUYO
//$xcrud->where('region =', "5");//Filtra la región NEA

//$xcrud->where('region =', "4"); //filtra por regiones de la 1  LA 6 NO PUEDEN HABER DOS REGIONES JUNTAS
//$xcrud->query('SELECT * FROM _preinscriptos WHERE G7Q00001 = "Sí"');


//$xcrud->button('{G6Q00001}', 'Descargar CV','icon-file','',array('target'=>'_blank'));
//$xcrud->button('{G6Q00002}', 'Carta Aval','icon-file','',array('target'=>'_blank'));

////$xcrud->subselect('Products count','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 
//$xcrud->subselect('Puntaje','{c2}+{c3}+{c4}+{c5}+{c6}+{c7}+{c8}+{c9}');


//selector de regiones
//$xcrud->relation('region','_regiones','id_region','nombre');
//$xcrud->relation('G1Q00008','_provincias','id_provincia','nombre');
//resaltador de fila // $xcrud->highlight_row('evaluacion_tecnica', '=', 0, '#8DED79');


//$xcrud->highlight('evaluacion_cuantitativa', '=', 1, '#F1ECAC');
//$xcrud->highlight('evaluacion_cualitativa', '=', 1, '#F1ECAC');
//$xcrud->column_class('c1,Puntaje', 'align-center');
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
//$xcrud->disabled('G1Q00008');

//DESHABILITAR EDICIÓN
//$xcrud->change_type('G01Q01','none');
//$xcrud->change_type('G01Q02','none');





//SETEO DE BOTONES****************************
//$xcrud->unset_add();
//$xcrud->unset_edit();
$xcrud->unset_remove();
//$xcrud->unset_view();
//$xcrud->unset_csv();
//$xcrud->unset_limitlist();
////$xcrud->unset_numbers();
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
    <title>logs GCP NOA</title>
    <?php echo Xcrud::load_css(); ?>
    <!-- Latest compiled and minified JavaScript -->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


</head>
 
<body>

<img src="http://datossociales.com/participantes/logos.png"  width="500">




<?php
    echo $xcrud->render();
?>



<?php echo Xcrud::load_js(); ?>
</body>
</html>