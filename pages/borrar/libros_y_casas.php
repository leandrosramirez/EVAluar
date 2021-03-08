<?php 
//clases autenticación 
require_once '../users/init.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}


include('./xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('LYC');
$xcrud->language('es');
$xcrud->table_name('Evaluacion Libros y Casas');

$xcrud->label('G01Q01','Nombre');
$xcrud->label('G01Q02','Apellido');
$xcrud->label('G01Q03','DNI');
$xcrud->label('G01Q04','Fecha de Nacimiento');
$xcrud->label('G01Q05','Correo electrónico');
$xcrud->label('G01Q06','Teléfono personal fijo');
$xcrud->label('G01Q07','Teléfono personal celular');
$xcrud->label('G01Q08','¿Usas WhatsApp?');
$xcrud->label('G01Q09','Provincia');
$xcrud->label('G01Q10','Género');
$xcrud->label('G01Q11','Escribe el género que mejor te represente');
$xcrud->label('G01Q12','¿Tenie formación sobre promoción de la lectura?');
$xcrud->label('G01Q13','Contanos cuál es (Máximo 500 caracteres con espacios)');
$xcrud->label('G02Q01','¿Por qué te interesa hacer este taller?*');
$xcrud->label('G02Q02','¿Por qué te interesa hacer este taller? Otras opciones (máximo 500 caracteres con espacios)');
$xcrud->label('G02Q03','Interés en desarrollar un proyecto concreto');
$xcrud->label('G02Q04','Características del lugar y dónde está ubicado');
$xcrud->label('G02Q05','¿Tenés experiencia previa en una actividad de promoción de la lectura?');
$xcrud->label('G02Q06','¿Tenés experiencia previa en una actividad de promoción de la lectura? Contanos brevemente tu experiencia');
$xcrud->label('G02Q07[SQ001]','Grupo etario [Niñxs]');
$xcrud->label('G02Q07[SQ002]','Grupo etario [Adolescentes]');
$xcrud->label('G02Q07[SQ003]','Grupo etario [Jóvenes]');
$xcrud->label('G02Q07[SQ004]','Grupo etario [Adultxs]');
$xcrud->label('G02Q07[SQ005]','Grupo etario [Adultxs Mayores]');
$xcrud->label('G02Q08[SQ001]','Me gustaría desarrollar el taller con [Vecinxs de un barrio]');
$xcrud->label('G02Q08[SQ002]','Me gustaría desarrollar el taller con [Comunidades específicas]');
$xcrud->label('G02Q08[SQ003]','Me gustaría desarrollar el taller con [Asistentes a una biblioteca]');
$xcrud->label('G02Q08[SQ004]','Me gustaría desarrollar el taller con [Alumnxs]');
$xcrud->label('G02Q08[SQ005]','Me gustaría desarrollar el taller con [Participantes de centro de jubiladxs]');
$xcrud->label('G02Q08[SQ006]','Me gustaría desarrollar el taller con [Asistentes a comedor comunitario]');
$xcrud->label('G02Q08[SQ007]','Me gustaría desarrollar el taller con [Otros]');
$xcrud->label('G02Q09','Me gustaría desarrollar el taller con otros');
$xcrud->label('G02Q10','¿Formás parte de alguna organización, grupo o colectivo?');
$xcrud->label('G02Q11','¿Formás parte de alguna organización, grupo o colectivo? ¿cuál/es?, ¿qué actividades realiza/n? ');
$xcrud->label('G02Q12','Link a la web o redes sociales de la organización');
$xcrud->label('G02Q13','¿Cuál es tu rol en esa organización?');
$xcrud->label('G02Q14','¿Qué esperás llevarte a nivel personal de este Taller?*');
$xcrud->label('G05Q43','¿Dispone de dispositivos tecnológicos y conexión?');
$xcrud->label('G05Q44','¿Disponibilidad horaria?');
$xcrud->label('G05Q46[SQ001]','¿Tiene? [Computadora de escritorio]');
$xcrud->label('G05Q46[SQ002]','¿Tiene? [Computadora Portátil (netebook)]');
$xcrud->label('G05Q46[SQ003]','¿Tiene? [Tablet]');
$xcrud->label('G05Q46[SQ004]','¿Tiene?[Celular]');
$xcrud->label('G05Q47','¿Tiene un lugar donde estudiar?');
$xcrud->label('G05Q48','¿Tiene cámara web?');
$xcrud->label('G05Q49','¿Tiene micrófono? ');
$xcrud->label('G01Q13bis','PONDERACIÓN');
$xcrud->label('G02Q02bis','PONDERACIÓN');
$xcrud->label('G02Q06bis','PONDERACIÓN');
$xcrud->label('G02Q11bis','PONDERACIÓN');
$xcrud->label('G02Q13bis','PONDERACIÓN');
$xcrud->label('G02Q14bis','PONDERACIÓN');
$xcrud->label('evaluacion_final','Evaluación Fianl');



//relación con la tabla provincia
//$xcrud->relation('G01Q09','_provincias','id_provincia','nombre');

//selector de preguntas
//$xcrud->relation('G02Q01','LyC_preg','id','nombre');


//****************************DATOS QUE SE MUESTRAN EN LA LISTA*********************************
$xcrud->columns('G01Q01,G01Q02,G01Q03,G01Q09,Puntaje Total,evaluacion_final');

//$xcrud->subselect('puntajefinal','SELECT SUM(amount) FROM TDS WHERE G02Q16 = {customerNumber}'); // other table

//*****************************Suma de puntaje automático****************************************
$xcrud->subselect('Puntaje Total','{G02Q01}+{G02Q03}+{G01Q13bis}+{G02Q02bis}+{G02Q06bis}+{G02Q11bis}+{G02Q13bis}+{G02Q14bis}');


//*******************************VALORES DE CAMPO PARA EVALUACIÓN CUANLITATIVA***********************
$xcrud->change_type('G01Q13bis','select','','0,1,2');
$xcrud->change_type('G02Q02bis','select','','0,1,2,3,4,5');
$xcrud->change_type('G02Q06bis','select','','0,1,2');
$xcrud->change_type('G02Q11bis','select','','0,3,5');
$xcrud->change_type('G02Q13bis','select','','0,3,5');
$xcrud->change_type('G02Q14bis','select','','0,3,5');

//*********************************SOLAPAS en el formulario******************
$xcrud->fields('G02Q01,G02Q03', false, 'Evaluación cuantitativa');
$xcrud->fields('G01Q13,G01Q13bis,G02Q02,G02Q02bis,G02Q06,G02Q06bis,G02Q11,G02Q11bis,G02Q13,G02Q13bis,G02Q14,G02Q14bis', false, 'Evaluación Cualitativa');
$xcrud->fields('evaluacion_final', false, 'Evaluación Final');
//$xcrud->fields('nombre_jurado,puntaje_jurado,observaciones,Punt_Total,evaluacion_final', false, 'Evaluación final');


//desplegar lista de selección (valores) para el campo evaluación_final
//$xcrud->change_type('evaluacion_final_evaluador2','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('postulacion_final','select','',',SI,NO,A REVISAR,SUPLENTE');

//$xcrud->order_by('Puntaje','desc');

//resaltador de campo // 
$xcrud->highlight_row('evaluacion_final', '=', "Seleccionado", '#D3FF91');
$xcrud->highlight_row('evaluacion_final', '=', "No Seleccionado", '#FF9191');
$xcrud->highlight_row('evaluacion_final', '=', "En Evaluación", '#BFEFFF');

//Deshabilitar edición de evaluacion_final_evaluador2
//$xcrud->disabled('evaluacion_final_evaluador1');
//$xcrud->disabled('comentarios_evaluador1');


//$xcrud->condition(array('evaluacion_final_evaluador1','evaluacion_final_evaluador2'),'=','SI','disabled','postulacion_final');

//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G3Q00005,G5Q00002,t1,t2,t3,t4,t5,t6,comentarios,evaluacion_tecnica,c1,c2,c3,c4,c5,c6,c7,c8,c8,c10,evaluacion_cuantitativa,evaluacion_cualitativa');
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G1Q00008,G1Q00009,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G2Q00005,G2Q00007,G2Q00008,G3Q00001,G3Q00002,G3Q00002[other],G3Q00003,G3Q00004,G3Q00005,G3Q00006,G4Q00001,G4Q00002,G4Q00003,G4Q00004[SQ001],G4Q00004[SQ002],G4Q00004[SQ003],G4Q00004[SQ004],G4Q00004[other],G4Q00005,G4Q00006,G4Q00007,G4Q00008,G5Q00001,G5Q00001[other],G5Q00002,G5Q00003,G5Q00004,G5Q00005,G5Q00006,G5Q00007,t1,t2,t3,t4,t5,t6,c1,c2,c3,c4,c5,c6,c7,c8,c9,comentarios,c10,evaluacion_tecnica,evaluacion_cuantitativa,evaluacion_cualitativa');


//$xcrud->change_type('nombre_jurado','select','',' ,Diego Amorin,Lautaro Aguirre,Paula Bruno,Natalia Filacanavo,Rosario Lucesole,Marina Navarro');
$xcrud->change_type('evaluacion_final','select','',' ,Seleccionado,No Seleccionado, En Evaluación');

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
$xcrud->unset_add();
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
$xcrud->limit(20);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Evaluación Territorio de Saberes</title>
    <?php echo Xcrud::load_css(); ?>

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