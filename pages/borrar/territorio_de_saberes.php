<?php 
//clases autenticación 
require_once '../users/init.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}


include('./xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('TDS');
$xcrud->language('es');
$xcrud->table_name('Evaluacion Territorio de Saberes');

$xcrud->label('G01Q01','Nombre');
$xcrud->label('G01Q02','Apellido');
$xcrud->label('G01Q03','DNI');
$xcrud->label('G01Q04','Fecha de Nacimiento');
$xcrud->label('G01Q05','Correo electrónico');
$xcrud->label('G01Q06','Teléfono personal fijo');
$xcrud->label('G01Q07','Teléfono personal celular');
$xcrud->label('G01Q08','¿Usas whatsapp?');
$xcrud->label('G01Q09','Provincia');
$xcrud->label('G01Q10','Género');
$xcrud->label('G01Q54','Escribe el género que mejor te represente');
$xcrud->label('G01Q11','¿afrodescendiente?');
$xcrud->label('G01Q12','¿pueblos originarios?');
$xcrud->label('G01Q13','¿A qué comunidad perteneces o de cuál sos descendiente?');
$xcrud->label('G01Q57','Nombre de la organización de la que formas parte');
$xcrud->label('G01Q14','Cargo o rol en el que se desempeña en la organización o colectivo');
$xcrud->label('G01Q15','Antigüedad en el cargo');
$xcrud->label('G02Q16','Experiencia previa como persona educadora o a cargo de instancias de formación en ámbitos culturales comunitarios');
$xcrud->label('G02Q17','Experiencia previa en instancias de educación formal  (elegir una de las siguientes opciones)');
$xcrud->label('G02Q18','¿Cuál es su desempeño actual en el colectivo cultural u organización culturales comunitarias por la que postula? (elegir una de las siguientes opciones)');
$xcrud->label('G02Q19','Detallar las tareas que desempeña o proyecta desempeñar en el área de formación de su colectivo u organización (campo para texto máximo 1000 caracteres)');
$xcrud->label('G03Q20','Nombre de la organización');
$xcrud->label('G03Q21','Área de trabajo o campo de desempeño');
$xcrud->label('G03Q22','Año de fundación o de inicio de actividades (en números y sin puntos)');
$xcrud->label('G03Q022','Provincia');
$xcrud->label('G03Q24','Localidad');
$xcrud->label('G03Q25','Dirección');
$xcrud->label('G03Q26','Código postal');
$xcrud->label('G03Q27','Correo electrónico del colectivo u organización');
$xcrud->label('G03Q28','Sitio Web (no obligatorio)');
$xcrud->label('G03Q29','Redes sociales (no obligatorio)');
$xcrud->label('G03Q35',' Breve descripción de la historia del colectivo u organización');
$xcrud->label('G03Q36',' Objetivos centrales del colectivo cultural o la organización cultural comunitaria');
$xcrud->label('G03Q37','Trayectoria de trabajo en territorio del colectivo u organización');
$xcrud->label('G03Q38','Alcance territorial de acuerdo a articulaciones y acciones del colectivo u organización');
$xcrud->label('G03Q39','Descripción de las propuestas de formación que se llevan adelante en el colectivo u organización');
$xcrud->label('G03Q40[SQ001]','Realizar una actividad  informativa hacia adentro del colectivo u organización]');
$xcrud->label('G03Q40[SQ002]','Realizar una actividad de formación hacia adentro del colectivo u organización]');
$xcrud->label('G03Q40[SQ003]','Realizar un ciclo de formación hacia adentro del colectivo u organización con otros colectivos y organizaciones');
$xcrud->label('G03Q40[SQ004]','Realizar un ciclo de formación con otros colectivos y organizaciones abierto a la comunidad]');
$xcrud->label('G03Q40[other]','Plan de socialización y/o trabajo posterior [Otro]');
$xcrud->label('G03Q41','Impacto esperado al finalizar el ciclo');
$xcrud->label('G04Q30','Nombre ');
$xcrud->label('G04Q31','Apellido');
$xcrud->label('G04Q32','DNI');
$xcrud->label('G04Q33','Teléfono');
$xcrud->label('G04Q34','Correo electrónico');
$xcrud->label('G05Q42[SQ001]','[Grupo 1: Martes 9 a 11]');
$xcrud->label('G05Q42[SQ002]','[Grupo 2: Martes 11 a 13]');
$xcrud->label('G05Q42[SQ003]','[Grupo 3: Jueves 16 a 18]');
$xcrud->label('G05Q42[SQ004]','[Grupo 4: Jueves de 18 a 20]');
$xcrud->label('G05Q43','¿Disponés de dispositivos tecnológicos y conexión?');
$xcrud->label('G05Q44','¿Generalmente podrás cumplir con 5 horas por semana? ');
$xcrud->label('G05Q46[SQ001]','[Computadora de escritorio]');
$xcrud->label('G05Q46[SQ002]','[Computadora Portátil (netebook)]');
$xcrud->label('G05Q46[SQ003]','[Tablet]');
$xcrud->label('G05Q46[SQ004]','[Celular]');
$xcrud->label('G05Q47','¿Tenés un lugar donde trabajar con concentración durante la semana en contenidos del ciclo?');
$xcrud->label('G05Q48','¿Tu dispositivo tiene cámara web? (no excluyente) ');
$xcrud->label('G05Q49','¿Tu dispositivo tiene micrófono? (no excluyente)');
$xcrud->label('G05Q50','¿Te postulaste y/o participaste en ediciones anteriores de algún curso virtual del Ministerio de Cultura?');
$xcrud->label('G05Q51','Selecciona una de las siguientes');
$xcrud->label('G05Q52','Contanos en cuál/les');
$xcrud->label('G06Q56','Carta Aaval');
//$xcrud->label('G06Q56[filecount]','filecount - Cargar carta avalPuedes descargar un modelo de la carta aval  aquí');
$xcrud->label('G06Q53','Confirmación');
/////campos de evaluación
$xcrud->label('G02Q19bis','PONDERACIÓN');
$xcrud->label('G03Q35bis','PONDERACIÓN');
$xcrud->label('G03Q36bis','PONDERACIÓN');
$xcrud->label('G03Q39bis','PONDERACIÓN');
$xcrud->label('G03Q40otherbis','PONDERACIÓN');
$xcrud->label('G03Q41bis','PONDERACIÓN');
$xcrud->label('nombre_jurado','Nombre del/la judrado');
$xcrud->label('puntaje_jurado','Puntaje del/la judrado');
$xcrud->label('observaciones','Observaciones');
$xcrud->label('evaluacion_final','Evaluación final');

//relación con la tabla provincia
$xcrud->relation('G01Q09','_provincias','id_provincia','nombre');

//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('G01Q01,G01Q02,G01Q10,G03Q20,G03Q022,G03Q24,G01Q11,G01Q12,Punt_Total,evaluacion_final');

//$xcrud->subselect('puntajefinal','SELECT SUM(amount) FROM TDS WHERE G02Q16 = {customerNumber}'); // other table

//Suma de puntaje automático
$xcrud->subselect('Punt_Total','{G02Q16}+{G02Q17}+{G02Q18}+{G03Q37}+{G03Q38}+{G03Q40[SQ001]}+{G03Q40[SQ002]}+{G03Q40[SQ003]}+{G03Q40[SQ004]}+{G03Q40otherbis}+{G02Q19bis}+{G03Q35bis}+{G03Q36bis}+{G03Q39bis}+{G03Q41bis}');

//desplegar lista de selección (valores) para el campo evaluación_final
//$xcrud->change_type('evaluacion_final_evaluador2','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('postulacion_final','select','',',SI,NO,A REVISAR,SUPLENTE');

//$xcrud->order_by('Puntaje','desc');

//resaltador de campo // 
$xcrud->highlight_row('evaluacion_final', '=', "Seleccionado", '#D3FF91');
$xcrud->highlight_row('evaluacion_final', '=', "No Seleccionado", '#FF9191');
$xcrud->highlight_row('evaluacion_final', '=', "En Evaluación", '#feffc4');

//Deshabilitar edición de evaluacion_final_evaluador2
//$xcrud->disabled('evaluacion_final_evaluador1');
//$xcrud->disabled('comentarios_evaluador1');


//$xcrud->condition(array('evaluacion_final_evaluador1','evaluacion_final_evaluador2'),'=','SI','disabled','postulacion_final');

//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G3Q00005,G5Q00002,t1,t2,t3,t4,t5,t6,comentarios,evaluacion_tecnica,c1,c2,c3,c4,c5,c6,c7,c8,c8,c10,evaluacion_cuantitativa,evaluacion_cualitativa');
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G1Q00008,G1Q00009,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G2Q00005,G2Q00007,G2Q00008,G3Q00001,G3Q00002,G3Q00002[other],G3Q00003,G3Q00004,G3Q00005,G3Q00006,G4Q00001,G4Q00002,G4Q00003,G4Q00004[SQ001],G4Q00004[SQ002],G4Q00004[SQ003],G4Q00004[SQ004],G4Q00004[other],G4Q00005,G4Q00006,G4Q00007,G4Q00008,G5Q00001,G5Q00001[other],G5Q00002,G5Q00003,G5Q00004,G5Q00005,G5Q00006,G5Q00007,t1,t2,t3,t4,t5,t6,c1,c2,c3,c4,c5,c6,c7,c8,c9,comentarios,c10,evaluacion_tecnica,evaluacion_cuantitativa,evaluacion_cualitativa');

//SOLAPAS en el formulario
$xcrud->fields('G01Q01,G01Q02,G01Q03,G01Q04,G01Q05,G01Q06,G01Q07,G01Q08,G01Q09,G01Q10,G01Q54,G01Q11,G01Q12,G01Q13,G01Q57,G01Q14,G01Q15,G03Q20,G03Q21,G03Q22,G03Q022,G03Q24,G03Q25,G03Q26,G03Q27,G03Q28,G03Q29,G04Q30,G04Q31,G04Q32,G04Q33,G04Q34,G05Q42[SQ001],G05Q42[SQ002],G05Q42[SQ003],G05Q42[SQ004],G05Q43,G05Q44,G05Q46[SQ001],G05Q46[SQ002],G05Q46[SQ003],G05Q46[SQ004],G05Q47,G05Q48,G05Q49,G05Q50,G05Q51,G05Q52,G06Q56,G06Q53', false, 'Datos presentados');


//Solapas del legajo 
$xcrud->fields('G02Q16,G02Q17,G02Q18,G03Q37,G03Q38,G03Q40[SQ001],G03Q40[SQ002],G03Q40[SQ003],G03Q40[SQ004]', false, 'Evaluación cuantitativa');
$xcrud->fields('G02Q19,G02Q19bis,G03Q35,G03Q35bis,G03Q36,G03Q36bis,G03Q39,G03Q39bis,G03Q40[other],G03Q40otherbis,G03Q41,G03Q41bis', false, 'Evaluación Cualitativa');
$xcrud->fields('nombre_jurado,puntaje_jurado,observaciones,Punt_Total,evaluacion_final', false, 'Evaluación final');


////VALORES DE CAMPO PARA EVALUACIÓN CUANLITATIVA
$xcrud->change_type('G02Q19bis','select','','0,2,5');
$xcrud->change_type('G03Q35bis','select','','0,2,5');
$xcrud->change_type('G03Q36bis','select','','0,2,5');
$xcrud->change_type('G03Q39bis','select','','0,2,5');
$xcrud->change_type('G03Q40otherbis','select','','0,3,5,7');
$xcrud->change_type('G03Q41bis','select','','0,5,10,15');
$xcrud->change_type('puntaje_jurado','select','','0,1,2,3');
$xcrud->change_type('nombre_jurado','select','',' ,Diego Amorin,Lautaro Aguirre,Paula Bruno,Natalia Filacanavo,Rosario Lucesole,Marina Navarro');
$xcrud->change_type('evaluacion_final','select','',' ,En Evaluación,Seleccionado,No Seleccionado');

$xcrud->button('{G06Q56}', 'Descargar Carta Aval','glyphicon glyphicon-paperclip','',array('target'=>'_blank'));
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
$xcrud->change_type('G01Q01','none');
$xcrud->change_type('G01Q02','none');
$xcrud->change_type('G01Q03','none');
$xcrud->change_type('G01Q04','none');
$xcrud->change_type('G01Q05','none');
$xcrud->change_type('G01Q06','none');
$xcrud->change_type('G01Q07','none');
$xcrud->change_type('G01Q08','none');
$xcrud->disabled('G01Q09');
$xcrud->change_type('G01Q10','none');
$xcrud->change_type('G01Q54','none');
$xcrud->change_type('G01Q11','none');
$xcrud->change_type('G01Q12','none');
$xcrud->change_type('G01Q13','none');
$xcrud->change_type('G01Q57','none');
$xcrud->change_type('G01Q14','none');
$xcrud->change_type('G01Q15','none');
$xcrud->change_type('G02Q16','none');
$xcrud->change_type('G02Q17','none');
$xcrud->change_type('G02Q18','none');
$xcrud->change_type('G02Q19','none');
$xcrud->change_type('G03Q20','none');
$xcrud->change_type('G03Q21','none');
$xcrud->change_type('G03Q22','none');
$xcrud->change_type('G03Q022','none');
$xcrud->change_type('G03Q24','none');
$xcrud->change_type('G03Q25','none');
$xcrud->change_type('G03Q26','none');
$xcrud->change_type('G03Q27','none');
$xcrud->change_type('G03Q28','none');
$xcrud->change_type('G03Q29','none');
$xcrud->change_type('G03Q35','none');
$xcrud->change_type('G03Q36','none');
$xcrud->change_type('G03Q37','none');
$xcrud->change_type('G03Q38','none');
$xcrud->change_type('G03Q39','none');
$xcrud->change_type('G03Q40[SQ001]','none');
$xcrud->change_type('G03Q40[SQ002]','none');
$xcrud->change_type('G03Q40[SQ003]','none');
$xcrud->change_type('G03Q40[SQ004]','none');
$xcrud->change_type('G03Q40[other]','none');
$xcrud->change_type('G03Q41','none');
$xcrud->change_type('G04Q30','none');
$xcrud->change_type('G04Q31','none');
$xcrud->change_type('G04Q32','none');
$xcrud->change_type('G04Q33','none');
$xcrud->change_type('G04Q34','none');
$xcrud->change_type('G05Q42[SQ001]','none');
$xcrud->change_type('G05Q42[SQ002]','none');
$xcrud->change_type('G05Q42[SQ003]','none');
$xcrud->change_type('G05Q42[SQ004]','none');
$xcrud->change_type('G05Q43','none');
$xcrud->change_type('G05Q44','none');
$xcrud->change_type('G05Q46[SQ001]','none');
$xcrud->change_type('G05Q46[SQ002]','none');
$xcrud->change_type('G05Q46[SQ003]','none');
$xcrud->change_type('G05Q46[SQ004]','none');
$xcrud->change_type('G05Q47','none');
$xcrud->change_type('G05Q48','none');
$xcrud->change_type('G05Q49','none');
$xcrud->change_type('G05Q50','none');
$xcrud->change_type('G05Q51','none');
$xcrud->change_type('G05Q52','none');
$xcrud->change_type('G06Q56','none');
$xcrud->change_type('G06Q56[filecount]','none');
$xcrud->change_type('G06Q53','none');
$xcrud->change_type('Puntaje_total','none');




//seteo de botones
$xcrud->unset_add();
//$xcrud->unset_edit();
$xcrud->unset_remove();
$xcrud->unset_view();
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