<?php 
//clases autenticación 

$xcrud = Xcrud::get_instance();
$xcrud->table('lyc2021');
$xcrud->language('es');
$xcrud->table_name('Libros y Casas - Memoria y Promoción de la Lectura | Evaluación cuantitativa y cualitativa de Postulantes <a class="btn btn-primary" href="https://datossociales.com/evaluar/lib/uploads/Guia_para_equipo_evaluador_de_postulaciones_para_LYC_2021.pdf" target="_blank" ><i class="fa fa-file"></i>  Guia de Evaluación</a>');

$xcrud->label('id','Id');
$xcrud->label('submitdate','Fecha de envío');
$xcrud->label('lastpage','Última página');
$xcrud->label('startlanguage','Lenguaje inicial');
$xcrud->label('token','Contraseña');
$xcrud->label('startdate','Fecha de inicio');
$xcrud->label('datestamp','Fecha de la última acción');
$xcrud->label('ipaddr','Dirección IP');
$xcrud->label('refurl','URL de referencia');
$xcrud->label('db1','Nombre');
$xcrud->label('db2','Apellido');
$xcrud->label('db3','Nacionalidad');
$xcrud->label('db3a1','Seleccioná tu continente de residencia');
$xcrud->label('db312','Seleccioná tu país de residencia en América');
$xcrud->label('db315','Seleccioná tu país de residencia en África');
$xcrud->label('db314','Seleccioná tu país de residencia en Asia');
$xcrud->label('db313','Seleccioná tu país de residencia en Europa');
$xcrud->label('db316','Seleccioná tu país de residencia en Oceanía');
$xcrud->label('db9','Género');
$xcrud->label('db9other','¿Cuál es tu identidad de género? Otro');
$xcrud->label('db10','Fecha de nacimiento?');
$xcrud->label('db11','DNI');
$xcrud->label('db12','Correo electrónico');
$xcrud->label('db13','Teléfono fijo');
$xcrud->label('db14','Teléfono celular');
$xcrud->label('db15','¿Usás whatsapp?');
$xcrud->label('db16','Si tenés, escribí tu sitio web.');
$xcrud->label('db22','¿Sos persona afrodescendiente o con familiares de origen africano?');
$xcrud->label('db23','¿Pertenecés a una comunidad de pueblos indígenas o descendiente de pueblos indígenas u originarios?');
$xcrud->label('db23a1','¿Cuál?');
$xcrud->label('db7','Escribe tu barrio de residencia');

$xcrud->label('mot1','¿Por qué te interesa hacer este taller?');
$xcrud->label('mot1other','¿Por qué te interesa hacer este taller? Selecciono la opción Otro');
$xcrud->label('mot2','Ampliar si lo creés necesario');
$xcrud->label('mot3','Interés en desarrollar un proyecto concreto de memoria y promoción de la lectura Elegir la opción que corresponda');
$xcrud->label('mot4','Si pensás realizar tu proyecto de memoria y promoción de la lectura en un lugar concreto, por favor, detallá las características del lugar y dónde está ubicado.');
$xcrud->label('mot5','¿Tenés experiencia previa en actividades enfocadas en memoria y derechos humanos?');
$xcrud->label('mot6','Sí tenés experiencia previa en actividades enfocadas en memoria y derechos humanos, contanos brevemente tu experiencia');
$xcrud->label('mot7SQ002','Grupo etario elegido para difundir lo aprendido: Niñxs');
$xcrud->label('mot7SQ003','Grupo etario elegido para difundir lo aprendido: Adolescentes');
$xcrud->label('mot7SQ004','Grupo etario elegido para difundir lo aprendido: Jovenes');
$xcrud->label('mot7SQ005','Grupo etario elegido para difundir lo aprendido: Adultxs');
$xcrud->label('mot7SQ006','Grupo etario elegido para difundir lo aprendido: Adultxs mayores');
$xcrud->label('mot8SQ002','Grupo elegido para desarrollar el taller: Vecinxs de un barrio');
$xcrud->label('mot8SQ003','Grupo elegido para desarrollar el taller: Comunidades específicas');
$xcrud->label('mot8SQ004','Grupo elegido para desarrollar el taller: Asistentes de una biblioteca');
$xcrud->label('mot8SQ005','Grupo elegido para desarrollar el taller: Alumnxs');
$xcrud->label('mot8SQ006','Grupo elegido para desarrollar el taller: Participantes de centro de jubiladxs');
$xcrud->label('mot8SQ007','Grupo elegido para desarrollar el taller: Asistentes de comedores comunitarios');
$xcrud->label('mot8other','Grupo elegido para desarrollar el taller: Otro grupo');
$xcrud->label('mot9','¿Formás parte de alguna organización, grupo o colectivo?');
$xcrud->label('mot10','Si forma parte de una organización, ¿cuál/es?, ¿qué actividades realiza/n?');
$xcrud->label('mot11','Agregar un link a la web o redes sociales de la organización, si lo hay');
$xcrud->label('mot12','¿Qué esperás llevarte a nivel personal de este Taller?');

$xcrud->label('conexion30','Participación en el aula taller: La persona que se inscriba al Taller deberá asistir una vez por semana al espacio sincrónico virtual de aula taller a través de la plataforma zoom (o similar). Horario clase sincrónica: Jueves 18 a 20 hs. ¿Disponés de dispositivos tecnológicos y conexión para la participación en los encuentros sincrónicos que propone el curso?');
$xcrud->label('conexion31','La dedicación de este ciclo es de cuatro horas por semana: una hora y media sincrónica para participar en el aula taller, y dos horas y media -que administrás en tu semana de acuerdo a tu disponibilidad- para ver videos, leer materiales y/o participar en foros virtuales. ¿En general, podrás cumplir con este requisito?');
$xcrud->label('conexion33SQ001','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso: Computadora de escritorio');
$xcrud->label('conexion33SQ002','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso: Computadora Portátil (notebook, netbook)');
$xcrud->label('conexion33SQ003','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso: Tablet');
$xcrud->label('conexion33SQ004','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso: Celular');
$xcrud->label('conexion34','¿Tenés un lugar donde trabajar con concentración durante la semana en contenidos del ciclo?');
$xcrud->label('conexion35','¿Tu dispositivo tiene cámara web? (no excluyente)');
$xcrud->label('conexion36','¿Tu dispositivo tiene micrófono? (no excluyente)');
$xcrud->label('conexion32','¿Tenés acceso a un dispositivo con internet?');

$xcrud->label('PAIS','País');
$xcrud->label('PROVINCIA','Provincia');
$xcrud->label('DEPARTAMENTO','Departamento');
$xcrud->label('LOCALIDAD','Localidad');
$xcrud->label('puntaje','Puntaje Total');
$xcrud->label('evaluadoT','Ev. Técnica');
$xcrud->label('id_provincia','Id Provincia');
$xcrud->label('id_region','Id Región');

$xcrud->label('mot1_e','Puntuación automática: Interés');
$xcrud->label('mot1other_e','Puntuación por Interés');
$xcrud->label('mot3_e','Puntuación automática');
$xcrud->label('mot4_e','Puntuación por Lugar de difusión');
$xcrud->label('mot5_e','Puntuación automática: Experiencia previa');
$xcrud->label('mot6_e','Puntuación por Experiencia Previa');
$xcrud->label('mot7SQ002_e','Puntuación automática: Niños');
$xcrud->label('mot7SQ003_e','Puntuación automática: Adolescentes');
$xcrud->label('mot7SQ004_e','Puntuación automática: Jóvenes');
$xcrud->label('mot7SQ005_e','Puntuación automática: Adultxs');
$xcrud->label('mot7SQ006_e','Puntuación automática: Adultxs mayores');
$xcrud->label('mot8SQ002_e','Puntuación automática: Vecinxs de un barrio');
$xcrud->label('mot8SQ003_e','Puntuación automática: Comunidades específicas');
$xcrud->label('mot8SQ004_e','Puntuación automática: Asistentes a una biblioteca');
$xcrud->label('mot8SQ005_e','Puntuación automática: Alumnxs');
$xcrud->label('mot8SQ006_e','Puntuación automática: Participantes de centro de jubiladxs');
$xcrud->label('mot8SQ007_e','Puntuación automática: Asistentes a comedor comunitario');
$xcrud->label('mot8other_e','Puntuación por Otro grupo elegido');
$xcrud->label('mot9_e','Puntuación automática: Minorías');
$xcrud->label('mot10_e','Puntaje por Organización');
$xcrud->label('mot12_e','Puntaje por Expectativas');
$xcrud->label('comentario','Comentarios');

//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('db1,db2,db9,PAIS,PROVINCIA,LOCALIDAD, puntaje, evaluadoT');


$xcrud->fields('db1,db2,db3,PAIS,db9,db9other,db10,db11,db12,db13,db14,db15,db16,db22,db23,db23a1,db7,mot2,mot11,conexion30,conexion31,conexion33SQ001,conexion33SQ002,conexion33SQ003,conexion33SQ004,conexion34,conexion35,conexion36,conexion32,PAIS,PROVINCIA,DEPARTAMENTO,LOCALIDAD,id_provincia,id_region', false, 'Perfil del postulante');
$xcrud->fields('mot1, mot1_e, mot3, mot3_e, mot5,mot5_e,mot7SQ002,mot7SQ002_e, mot7SQ003, mot7SQ003_e,mot7SQ004, mot7SQ004_e,mot7SQ005, mot7SQ005_e, mot7SQ006, mot7SQ006_e,mot8SQ002, mot8SQ002_e,mot8SQ003,mot8SQ003_e, mot8SQ004, mot8SQ004_e,mot8SQ005,mot8SQ005_e,mot8SQ006, mot8SQ006_e,mot8SQ007, mot8SQ007_e, mot9, mot9_e', false, 'Evaluación Cuantitativa'); // el orden se da cuando ninguna de estas variables figura en el primer field

$xcrud->fields('mot1other, mot1other_e, mot4, mot4_e, mot6, mot6_e, mot8other , mot8other_e, mot10, mot10_e, mot12, mot12_e, comentario, evaluadoT,puntaje', false, 'Evaluación Cualitativa');


$xcrud->subselect('puntaje','{mot1_e}+{mot1other_e}+{mot3_e}+{mot4_e}+{mot5_e}+{mot6_e}+{mot7SQ002_e}+{mot7SQ003_e}+{mot7SQ004_e}+{mot7SQ005_e}+{mot7SQ006_e}+{mot8SQ002_e}+{mot8SQ003_e}+{mot8SQ004_e}+{mot8SQ005_e}+{mot8SQ006_e}+{mot8SQ007_e}+{mot9_e}+{mot8other_e}+{mot10_e}+{mot12_e}');

//$xcrud->subselect('Postulación Final','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 

//desplegar lista de selección (valores) para el campo evaluación_final
//$xcrud->change_type('evaluacion_final_evaluador1','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('evaluacion_final_evaluador2','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('postulacion_final','select','',',SI,NO,A REVISAR,SUPLENTE');

//listados de seleccion de puntajes
$xcrud->change_type('mot1other_e','select','',',0,1,2,3');
$xcrud->change_type('mot4_e','select','',',0,1,2');
$xcrud->change_type('mot6_e','select','',',0,1,2');
$xcrud->change_type('mot8other_e','select','',',0,1,2,3,4,5,6');
$xcrud->change_type('mot10_e','select','',',0,1,2');
$xcrud->change_type('mot12_e','select','',',0,1,2');
$xcrud->change_type('evaluadoT','select','',',SI, NO, SUPLENTE, A REVISAR');

$xcrud->field_tooltip('mot1other_e','1 a 3 (1 punto poco; 3 puntos mucho)');
$xcrud->field_tooltip('mot4_e',' 0 a 2 (0 poco específica; 2 coherente)');
$xcrud->field_tooltip('mot6_e','0 a 2 (0 poco específica; 2 coherente)');
$xcrud->field_tooltip('mot8other_e','1 a 6 (1 punto poco; 6 puntos mucho)');
$xcrud->field_tooltip('mot10_e','0 a 2 (0 poco específica; 2 coherente)');
$xcrud->field_tooltip('mot12_e','0 a 2 (0 poco específica; 2 coherente)');

$xcrud->change_type('mot1','none');
$xcrud->change_type('mot1other','none');
$xcrud->change_type('mot2','none');
$xcrud->change_type('mot3','none');
$xcrud->change_type('mot4','none');
$xcrud->change_type('mot6','none');
$xcrud->change_type('mot12','none');

//listados de seleccion de puntajes
$xcrud->relation('id_region','_regiones','id_region','nombre');

$xcrud->highlight_row('evaluadoT', '=', 'SI', '#CBFF22');
$xcrud->highlight_row('evaluadoT', '=', 'NO', '#FF9191');
$xcrud->highlight_row('evaluadoT', '=', 'SUPLENTE', '#FFFF91');
$xcrud->highlight_row('evaluadoT', '=', 'A REVISAR', '#FFD3B5');



//$xcrud->order_by('Puntaje','desc');

//resaltador de campo // 
//$xcrud->highlight_row('postulacion_final', '=', "SI", '#D3FF91');
//$xcrud->highlight_row('postulacion_final', '=', "NO", '#FF9191');
//$xcrud->highlight_row('postulacion_final', '=', "SUPLENTE", '#FFFF91');
//$xcrud->highlight_row('postulacion_final', '=', "A REVISAR", '#FFD3B5');

//Deshabilitar edición de evaluacion_final_evaluador2
//$xcrud->disabled('evaluacion_final_evaluador1');
//$xcrud->disabled('comentarios_evaluador1');


//$xcrud->condition(array('evaluacion_final_evaluador1','evaluacion_final_evaluador2'),'=','SI','disabled','postulacion_final');

//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G2Q00001,G2Q00002,G2Q00002other,G2Q00003,G2Q00004,G3Q00005,G5Q00002,t1,t2,t3,t4,t5,t6,comentarios,evaluacion_tecnica,c1,c2,c3,c4,c5,c6,c7,c8,c8,c10,evaluacion_cuantitativa,evaluacion_cualitativa');
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G1Q00008,G1Q00009,G2Q00001,G2Q00002,G2Q00002other,G2Q00003,G2Q00004,G2Q00005,G2Q00007,G2Q00008,G3Q00001,G3Q00002,G3Q00002other,G3Q00003,G3Q00004,G3Q00005,G3Q00006,G4Q00001,G4Q00002,G4Q00003,G4Q00004SQ001,G4Q00004SQ002,G4Q00004SQ003,G4Q00004SQ004,G4Q00004other,G4Q00005,G4Q00006,G4Q00007,G4Q00008,G5Q00001,G5Q00001other,G5Q00002,G5Q00003,G5Q00004,G5Q00005,G5Q00006,G5Q00007,t1,t2,t3,t4,t5,t6,c1,c2,c3,c4,c5,c6,c7,c8,c9,comentarios,c10,evaluacion_tecnica,evaluacion_cuantitativa,evaluacion_cualitativa');

//SOLAPAS en el formulario
//$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G1Q00004,G1Q00004other,G1Q00008,G1Q00009,G2Q00001,G2Q00002,G2Q00002other,G2Q00003,G2Q00004,G2Q00005,G2Q00007,G2Q00008,G3Q00001,G3Q00002,G3Q00002other,G3Q00003,G3Q00004,G3Q00005,G3Q00006,G4Q00001,G4Q00002,G4Q00003,G4Q00004SQ001,G4Q00004SQ002,G4Q00004SQ003,G4Q00004SQ004,G4Q00004other,G4Q00005,G4Q00006,G4Q00007,G4Q00008,G5Q00001,G5Q00001other,G5Q00002,G5Q00003,G5Q00004,G5Q00005,G5Q00006,G5Q00007', false, 'Datos presentados');



//tooltips

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


//xcrud->button('{G6Q00001}', 'Descargar CV','icon-file','',array('target'=>'_blank'));
//$xcrud->button('{G6Q00002}', 'Carta Aval','icon-file','',array('target'=>'_blank'));

////$xcrud->subselect('Products count','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 
//$xcrud->subselect('Puntaje','{c2}+{c3}+{c4}+{c5}+{c6}+{c7}+{c8}+{c9}');


//selector de regiones
//$xcrud->relation('region','_regiones','id_region','nombre');
//$xcrud->relation('G1Q00008','_provincias','id_provincia','nombre');
//resaltador de fila // $xcrud->highlight_row('evaluacion_tecnica', '=', 0, '#8DED79');


//$xcrud->highlight('db3', '!=' , "Argentina", '#e04428'); // Cambia de color a les participantes que no pertenecen a la Republica Argentina (Requisito excluyente)
$xcrud->highlight('PAIS', '!=' , "Argentina", '#ff8c79'); // Cambia de color a les participantes que no pertenecen a la Republica Argentina (Requisito excluyente)


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


//$xcrud->change_type('t1','none');
//$xcrud->change_type('t2','none');
//$xcrud->change_type('t3','none');
//$xcrud->change_type('t4','none');
//$xcrud->change_type('t5','none');
//$xcrud->change_type('t6','none');
//$xcrud->change_type('evaluacion_tecnica','none');
//$xcrud->change_type('comentarios','none');

//campos desabilitados
//$xcrud->disabled('db1');

$xcrud->disabled('id');
$xcrud->disabled('submitdate');
$xcrud->disabled('lastpage');
$xcrud->disabled('startlanguage');
$xcrud->disabled('token');
$xcrud->disabled('startdate');
$xcrud->disabled('datestamp');
$xcrud->disabled('ipaddr');
$xcrud->disabled('refurl');
$xcrud->disabled('db1');
$xcrud->disabled('db2');
$xcrud->disabled('db3');
$xcrud->disabled('db3a1');
$xcrud->disabled('db312');
$xcrud->disabled('db315');
$xcrud->disabled('db314');
$xcrud->disabled('db313');
$xcrud->disabled('db316');
$xcrud->disabled('db9');
$xcrud->disabled('db9other');
$xcrud->disabled('db10');
$xcrud->disabled('db11');
$xcrud->disabled('db12');
$xcrud->disabled('db13');
$xcrud->disabled('db14');
$xcrud->disabled('db15');
$xcrud->disabled('db16');
$xcrud->disabled('db22');
$xcrud->disabled('db23');
$xcrud->disabled('db23a1');

$xcrud->disabled('db7');
$xcrud->disabled('mot1');
$xcrud->disabled('mot1other');
$xcrud->disabled('mot2');
$xcrud->disabled('mot3');
$xcrud->disabled('mot4');
$xcrud->disabled('mot5');
$xcrud->disabled('mot6');
$xcrud->disabled('mot7SQ002');
$xcrud->disabled('mot7SQ003');
$xcrud->disabled('mot7SQ004');
$xcrud->disabled('mot7SQ005');
$xcrud->disabled('mot7SQ006');
$xcrud->disabled('mot8SQ002');
$xcrud->disabled('mot8SQ003');
$xcrud->disabled('mot8SQ004');
$xcrud->disabled('mot8SQ005');
$xcrud->disabled('mot8SQ006');
$xcrud->disabled('mot8SQ007');
$xcrud->disabled('mot8other');
$xcrud->disabled('mot9');
$xcrud->disabled('mot10');
$xcrud->disabled('mot11');
$xcrud->disabled('mot12');
$xcrud->disabled('conexion30');
$xcrud->disabled('conexion31');
$xcrud->disabled('conexion33SQ001');
$xcrud->disabled('conexion33SQ002');
$xcrud->disabled('conexion33SQ003');
$xcrud->disabled('conexion33SQ004');
$xcrud->disabled('conexion34');
$xcrud->disabled('conexion35');
$xcrud->disabled('conexion36');
$xcrud->disabled('conexion32');
$xcrud->disabled('PAIS');
$xcrud->disabled('PROVINCIA');
$xcrud->disabled('DEPARTAMENTO');
$xcrud->disabled('LOCALIDAD');
$xcrud->disabled('id_provincia');
$xcrud->disabled('id_region');
$xcrud->disabled('puntaje');

$xcrud->disabled('mot1_e');
$xcrud->disabled('mot3_e');
$xcrud->disabled('mot5_e');
$xcrud->disabled('mot7SQ002_e');
$xcrud->disabled('mot7SQ003_e');
$xcrud->disabled('mot7SQ004_e');
$xcrud->disabled('mot7SQ005_e');
$xcrud->disabled('mot7SQ006_e');
$xcrud->disabled('mot8SQ002_e');
$xcrud->disabled('mot8SQ003_e');
$xcrud->disabled('mot8SQ004_e');
$xcrud->disabled('mot8SQ005_e');
$xcrud->disabled('mot8SQ006_e');
$xcrud->disabled('mot8SQ007_e');
$xcrud->disabled('mot9_e');



//seteo de botones
$xcrud->unset_add();
//$xcrud->unset_edit();
$xcrud->unset_remove();
$xcrud->unset_view();
//$xcrud->unset_csv();
//$xcrud->unset_limitlist();
//$xcrud->unset_numbers();
//$xcrud->unset_pagination();
//$xcrud->unset_print();
//$xcrud->unset_search();
//$xcrud->unset_title();
//$xcrud->unset_sortable();
$xcrud->limit(10);

    echo $xcrud->render();
?>