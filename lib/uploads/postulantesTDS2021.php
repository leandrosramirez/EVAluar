<?php 
//clases autenticación 

$xcrud = Xcrud::get_instance();
$xcrud->table('tds2021');
$xcrud->language('es');
$xcrud->table_name('Evaluación cuantitativa y cualitativa de Postulantes <a class="btn btn-primary" href="https://datossociales.com/evaluar/lib/uploads/Guia_para_equipo_evaluador_de_postulaciones_para_TDS_2021.pdf" target="_blank" ><i class="fa fa-file"></i>  Guia de Evaluación</a>');

$xcrud->label('id','ID de respuesta');
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
$xcrud->label('db9','¿Cuál es tu identidad de género?');
$xcrud->label('db9other','¿Cuál es tu identidad de género? Otro');
$xcrud->label('db10','¿Cuál es tu fecha de nacimiento?');
$xcrud->label('db11','DNI');
$xcrud->label('db12','Correo electrónico');
$xcrud->label('db13','Teléfono fijo');
$xcrud->label('db14','Teléfono celular');
$xcrud->label('db15','¿Usa whatsapp?');
$xcrud->label('db22','¿Es persona afrodescendiente o con familiares de origen africano?');
$xcrud->label('db23','¿Pertenecé a una comunidad de pueblos indígenas o descendiente de pueblos indígenas u originarios?');
$xcrud->label('db23a1','¿A cuál comunidad originaria o pueblo indígena pertenecés o de cuál sos descendiente?');
$xcrud->label('p01','Seleccioná tu provincia de residencia en Argentina');
$xcrud->label('db7','Escribe tu barrio de residencia');
$xcrud->label('col1','¿De qué tipo de organización o colectivo formas parte?');
$xcrud->label('col1other','¿De qué tipo de organización o colectivo formas parte? Otro');
$xcrud->label('col2','Nombre de la organización cultural comunitaria');
$xcrud->label('col5','Dirección');
$xcrud->label('col7','Redes sociales');
$xcrud->label('cod8','Año de inicio de actividades');
$xcrud->label('col9','Trayectoria de trabajo del colectivo u organización (elegir una opción)');
$xcrud->label('col10','1- Breve descripción de la trayectoria de trabajo y los objetivos centrales de la organización o colectivo cutural');
$xcrud->label('col11','2- Descripción de las propuestas de formación que se llevan adelante en el colectivo u organización');
$xcrud->label('col12','Alcance territorial de acuerdo a articulaciones y acciones del colectivo u organización. (elegir una opción)');
$xcrud->label('col13','Área de trabajo o campo donde se desempeña dentro del colectivo u organización. Describa su área de trabajo y las tareas que realiza, si son varias, inclúyalas.');
$xcrud->label('col14','3- Cargo o rol que se desempeña en la organización');
$xcrud->label('col15','Antigüedad en el cargo o rol');
$xcrud->label('pc1','Experiencia previa como persona educadora o a cargo de instancias de formación en ámbitos culturales comunitarios');
$xcrud->label('pc2','Experiencia previa como educador/a en instancias de educación formal');
$xcrud->label('pls1SQ001','Objetivo: Realizar una actividad informativa hacia adentro del colectivo u organización');
$xcrud->label('pls1SQ002','Objetivo: Realizar una actividad de formación hacia adentro del colectivo u organización');
$xcrud->label('pls1SQ003','Qué objetivo/s en relación a la socialización y/o acciones proyecta desempeñar el colectivo u organización una vez realizado este ciclo. Marque la o las opciones que considere Realizar un ciclo de formación hacia adentro del colectivo u organización con otros colectivos y organizaciones. (se entiende por ciclo a una serie de actividades planificadas en función de la temáticas y/o tiempo)');
$xcrud->label('pls1SQ004','Objetivo: Realizar un ciclo de formación con otros colectivos y organizaciones abierto a la comunidad.');
$xcrud->label('pls1other','4- Qué objetivo/s en relación a la socialización y/o acciones proyecta desempeñar el colectivo u organización una vez realizado este ciclo. Opción otros elegida');
$xcrud->label('pls2SQ001','Impacto de los objetivos hacia adentro del colectivo u organización');
$xcrud->label('pls2SQ002','Impacto de los objetivos en la comunidad');
$xcrud->label('pls2SQ003','Impacto de los objetivos en el trabajo con otros colectivos u organizaciones');
$xcrud->label('pls2SQ004','Impacto de los objetivos otro: especificar');
$xcrud->label('pls2other','5- En dónde considera que se generará el mayor impacto en relación a los objetivos que se propusieron. Opción otros elegida');
$xcrud->label('pls3','6- Describir brevemente cómo el ciclo puede ser un aporte relevante para la organización donde trabajás y los objetivos de impacto');
$xcrud->label('PA1','¿Te postulaste y/o participaste en ediciones anteriores de algún curso virtual del Ministerio de Cultura?');
$xcrud->label('PA2','¿Cómo fue tu experiencia con esa postulación?');
$xcrud->label('PA3','¿En qué curso participaste? ¿En qué año?');
$xcrud->label('PA4','¿Tenés algún comentario que quieras compartir? Compartilo aquí');
$xcrud->label('co4SQ001','Grupo 1: Miércoles de 9 a 11 hs');
$xcrud->label('co4SQ002','Grupo 2: Miércoles de 16 a 18 hs');
$xcrud->label('co4SQ003','Grupo 3: Miércoles de 18 a 20 hs');
$xcrud->label('co4SQ004','Grupo 4: jueves de 11 a 13 hs');
$xcrud->label('co4SQ005','Grupo 5: Jueves 18 a 20 hs');
$xcrud->label('co5','La dedicación de este ciclo es de cinco horas por semana: dos horas para participar en el aula taller (opciones elegidas anteriormente) y tres horas que administras en tu semana cuando podés para ver videos, leer materiales y/o participar en foros virtuales. ¿Generalmente podrás cumplir con este requisito?');
$xcrud->label('CO1','Confirmo que leí el programa del curso y acepto los requisitos de participación y aprobación. Podés consultar el marco de la convocatoria y las condiciones de participación del curso de Territorio de Saberes en modalidad a distancia en la página web: www.cultura.gob.ar .');
$xcrud->label('co6SQ001','Nombre del Responsable');
$xcrud->label('co6SQ002','DNI Responsable');
$xcrud->label('co6SQ003','Teléfono Responsable');
$xcrud->label('co6SQ004','Email Responsable');
$xcrud->label('co3','Carta Aval url');
$xcrud->label('puntaje', 'Puntaje');
$xcrud->label('evaluadoF', 'Ev. Final');
$xcrud->label('col9_e','Puntos por trayectoria');
$xcrud->label('col10_e','Puntos por trayectoria y objetivos de organización');
$xcrud->label('col11_e','Puntos por Descripción de las propuestas de formación ');
$xcrud->label('col12_e','Puntos por alcance territorial');
$xcrud->label('col14_e','Puntos por cargo o rol en la organización');
$xcrud->label('pc1_e','Puntos por experiencia como educador/a en ámbitos culturales comunitarios');
$xcrud->label('pc2_e','Puntos por experiencia previa como educador/a en instancias de educación formal');
$xcrud->label('pls1SQ001_e','Puntos por realizar una actividad informativa hacia adentro del colectivo u organización');
$xcrud->label('pls1SQ002_e','Puntos por realizar una actividad de formación hacia adentro del colectivo u organización');
$xcrud->label('pls1SQ003_e','Puntos por realizar un ciclo de formación hacia adentro del colectivo u organización con otros colectivos y organizaciones.');
$xcrud->label('pls1SQ004_e','Puntos por realizar un ciclo de formación con otros colectivos y organizaciones abierto a la comunidad.');
$xcrud->label('pls1other_e','Puntaje manual sobre objetivos de formación');
$xcrud->label('pls2SQ001_e','Puntos por impacto de los objetivos hacia adentro del colectivo u organización');
$xcrud->label('pls2SQ002_e','Puntos por impacto de los objetivos en la comunidad');
$xcrud->label('pls2SQ003_e','Puntos por impacto de los objetivos en el trabajo con otros colectivos u organizaciones');
$xcrud->label('pls2other_e','Puntos por impacto de los objetivos Otro');
$xcrud->label('co3filecount','Presento Carta Aval');
$xcrud->label('pls3_e','Puntos por impacto esperado al finalizar el curso');
$xcrud->label('id_region','Región');
$xcrud->label('evaluador','Evaluador/a');
$xcrud->label('conclusion','Conclusión');
$xcrud->label('observacion','Observaciones');



//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('db1,db2,PROVINCIA,LOCALIDAD,col2,id_region,conclusion,Puntaje Final,evaluadoF');


//Ponderación preguntas evaluación cualitativa
//$xcrud->change_type('preg08','select','',',1,2,3,4,5');

//Solapas del legajo 

$xcrud->fields('db22,db23,db1,db2,db3,db3a1,db312,db315,db314,db313,db316,db9,db9other,db10,db11,db12,db13,db14,db15,db23a1,p01,db7,col1,col1other,
col2,col5,col7,cod8,col9,col12,col13,col15,pc1,pc2,pls1SQ001,pls1SQ002,pls1SQ003,pls1SQ004, pls2SQ001,pls2SQ002,pls2SQ003,pls2SQ004,PA1,PA2,PA3,PA4,co4SQ001,co4SQ002,co4SQ003,co4SQ004,co4SQ005,co5,CO1,co6SQ001,co6SQ002,co6SQ003,co6SQ004,co3,co3filecount,PROVINCIA,DEPARTAMENTO,LOCALIDAD,id_provincia,id_region', false, 'Perfil del postulante');

$xcrud->fields('col9_e,col12_e,pls1SQ001_e,pls1SQ002_e,pls1SQ003_e,pls1SQ004_e,pls2SQ001_e,pls2SQ002_e,pls2SQ003_e,pc1_e,pc2_e', false, 'Evaluación Cuantitativa');

$xcrud->fields('col10, col10_e, col11, col11_e, col14,col14_e, pls1other,pls1other_e, pls2other, pls2other_e, pls3, pls3_e , evaluador, conclusion, observacion, Puntaje Final', false, 'Evaluación Cualitativa');

//Puntaje ponderado seleccion de valores


$xcrud->change_type('col10_e','select','',',0,2,5');
$xcrud->change_type('col11_e','select','',',0,2,5');
$xcrud->change_type('col14_e','select','',',0,2,5');
$xcrud->change_type('pls1other_e','select','',',0,3,5,7');
$xcrud->change_type('pls2other_e','select','',',0,3,5,7');
$xcrud->change_type('pls3_e','select','',',0,5,10,15');
$xcrud->change_type('conclusion','select','',',No recomendado,Recomendado,Muy recomendado');
$xcrud->change_type('evaluador','select','',',Pablo di Salvatore,Rosario Lucesole, Lautaro Aguirre, Paula Bruno, Facundo Silvente, Marina Navarro, Diego Amorin, Natalia Filacanavo');




// tooltips cualitativa //
//$xcrud->field_tooltip('preg08','Ver Guía de Evaluación');
//$xcrud->field_tooltip('preg12','Destacar información crítica para evaluar la postulación');
//$xcrud->field_tooltip('id_region','1-NOA / 2-NEA / 3-Centro / 4-Buenos Aires / 5-Patagonia / 6-Cuyo');
//$xcrud->order_by('id_region','desc');
//

///////////////////////// REQUISITOS CUANTITATIVOS //////////////////////////////////

$xcrud->subselect('Puntaje Final','{col12_e}+{pls1SQ001_e}+{pls1SQ002_e}+{pls1SQ003_e}+{pls1SQ004_e}+{pls2SQ001_e}+{pls2SQ002_e}+{pls2SQ003_e}+{pc1_e}+{pc2_e}+{col9_e}+{col10_e}+{col11_e}+{col14_e}+{pls1other_e}+{pls2other_e}+{pls3_e}');
/// col9 =trayectoria // col9_e

/// col12 = alcance territorial // col12_e

/// pls1SQ001	pls1SQ002	pls1SQ003	pls1SQ004 = Objetivos //pls1SQ001_e	pls1SQ002_e	pls1SQ003_e	pls1SQ004_e
/// pls1other = PUNTAJE MANUAL

/// pls2SQ001	pls2SQ002	pls2SQ003	pls2SQ004 = Impacto //pls2SQ001_e	pls2SQ002_e	pls2SQ003_e	pls2SQ004_e
/// pls2other_e = PUNTAJE MANUAL

/// pc1 = Experiencia previa como persona educadora o a cargo de instancias de formación en ámbitos culturales comunitarios

/// pc2 = Experiencia previa como educador/a en instancias de educación formal

///////////////////////// REQUISITOS CUALITATIVOS //////////////////////////////////

/// col10 = Breve descripción de la trayectoria de trabajo y los objetivos centrales de la organización o colectivo cutural

/// col11 = Descripción de las propuestas de formación que se llevan adelante en el colectivo u organización

/// col14 = cargo o rol en la organizacion
/// pls1SQ001	pls1SQ002	pls1SQ003	pls1SQ004 = Objetivos
/// pls1other = PUNTAJE MANUAL Qué objetivo/s en relación a la socialización y/o

/// pls2SQ001	pls2SQ002	pls2SQ003	pls2SQ004 = Impacto
/// pls2other = PUNTAJE MANUAL En dónde considera que se generará el mayor impacto en relación a los objetivos que se 

/// 







//boton carta aval
$xcrud->button('{co3}', 'Carta Aval','icon-file','',array('target'=>'_blank'));



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
$xcrud->disabled('db22');
$xcrud->disabled('db23');
$xcrud->disabled('db23a1');
$xcrud->disabled('p01');
$xcrud->disabled('db7');
$xcrud->disabled('col1');
$xcrud->disabled('col1other');
$xcrud->disabled('col2');
$xcrud->disabled('col5');
$xcrud->disabled('col7');
$xcrud->disabled('cod8');
$xcrud->disabled('col9');
$xcrud->disabled('col10');
$xcrud->disabled('col11');
$xcrud->disabled('col12');
$xcrud->disabled('col13');
$xcrud->disabled('col14');
$xcrud->disabled('col15');
$xcrud->disabled('pc1');
$xcrud->disabled('pc2');
$xcrud->disabled('pls1SQ001');
$xcrud->disabled('pls1SQ002');
$xcrud->disabled('pls1SQ003');
$xcrud->disabled('pls1SQ004');
$xcrud->disabled('pls1other');
$xcrud->disabled('pls2SQ001');
$xcrud->disabled('pls2SQ002');
$xcrud->disabled('pls2SQ003');
$xcrud->disabled('pls2SQ004');
$xcrud->disabled('pls2other');
$xcrud->disabled('pls3');
$xcrud->disabled('PA1');
$xcrud->disabled('PA2');
$xcrud->disabled('PA3');
$xcrud->disabled('PA4');
$xcrud->disabled('co4SQ001');
$xcrud->disabled('co4SQ002');
$xcrud->disabled('co4SQ003');
$xcrud->disabled('co4SQ004');
$xcrud->disabled('co4SQ005');
$xcrud->disabled('co5');
$xcrud->disabled('CO1');
$xcrud->disabled('co6SQ001');
$xcrud->disabled('co6SQ002');
$xcrud->disabled('co6SQ003');
$xcrud->disabled('co6SQ004');
$xcrud->disabled('co3');
$xcrud->disabled('col9_e');
$xcrud->disabled('col12_e');
$xcrud->disabled('pls1SQ001_e');
$xcrud->disabled('pls1SQ002_e');
$xcrud->disabled('pls1SQ003_e');
$xcrud->disabled('pls1SQ004_e');
$xcrud->disabled('pls2SQ001_e');
$xcrud->disabled('pls2SQ002_e');
$xcrud->disabled('pls2SQ003_e');
$xcrud->disabled('pc1_e');
$xcrud->disabled('pc2_e');
$xcrud->disabled('PROVINCIA');
$xcrud->disabled('DEPARTAMENTO');
$xcrud->disabled('LOCALIDAD');
$xcrud->disabled('id_provincia');
$xcrud->disabled('id_region');
$xcrud->disabled('co3filecount');




//$xcrud->fields('preg07,preg08,preg09,preg10,preg11,preg12', false, 'Evaluación Cualitativa');


// Suma de puntajes de Conexión //

//$xcrud->subselect('Puntaje','{conexion30}+{conexion31}+{conexion32SQ001}+{conexion32SQ002}+{conexion32SQ003}+{conexion33SQ001}+{conexion33SQ002}+{conexion33SQ003}+{conexion33SQ004}');

//regiones
//$xcrud->relation('id_region','_regiones','id_region','nombre');
//$xcrud->relation('G1Q00008','_provincias','id_provincia','nombre');


//campos coloreados
//$xcrud->highlight_row('evaluadoT', '=', "1", '#EEFFB6'); // highlight_row resalta con color la fila en la cuadricula
//$xcrud->highlight_row('evaluadoF', '=', "1", '#CBFF22'); // highlight_row resalta con color la fila en la cuadricula
//$xcrud->highlight_row('co3filecount', '=', 0, '#d1403e'); // 

//$xcrud->disabled('evaluacion_final_evaluador1');

//$xcrud->subselect('Postulación Final','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 

//desplegar lista de selección (valores) para el campo evaluación_final
$xcrud->change_type('col10','none');
$xcrud->change_type('col11','none');
$xcrud->change_type('col13','none');
$xcrud->change_type('col14','none');
$xcrud->change_type('pls3','none');
$xcrud->change_type('PA4','none');
$xcrud->change_type('pls1other','none');
$xcrud->change_type('pls2other','none');

//campos coloreados
//$xcrud->highlight_row('evaluadoF', '=', "1", '#CBFF22'); // highlight_row resalta con color la fila en la cuadricula
$xcrud->highlight_row('conclusion', '=', "Muy recomendado", '#78d13e'); // highlight_row resalta con color la fila en la cuadricula
$xcrud->highlight_row('conclusion', '=', "Recomendado", '#c6f530'); // highlight_row resalta con color la fila en la cuadricula
$xcrud->highlight_row('conclusion', '=', "No recomendado", '#e04428'); // highlight_row resalta con color la fila en la cuadricula
//#e04428
//regiones
$xcrud->relation('id_region','_regiones','id_region','nombre');
//$xcrud->relation('G1Q00008','_provincias','id_provincia','nombre');
//$xcrud->order_by('id_region','desc');
$xcrud->order_by('conclusion','desc');




//$xcrud->change_type('evaluacion_final_evaluador1','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('evaluacion_final_evaluador2','select','',',SI,NO,A REVISAR');
//$xcrud->change_type('postulacion_final','select','',',SI,NO,A REVISAR,SUPLENTE');

//listados de seleccion de puntajes
//$xcrud->change_type('c1','select','',',1,2,3,4,5');
//$xcrud->change_type('c2','select','',',1,2,3,4,5');
//$xcrud->change_type('c3','select','',',1,2,3,4,5');
//$xcrud->change_type('c4','select','',',1,2,3,4,5');
//$xcrud->change_type('c5','select','',',1,2,3,4,5');
//$xcrud->change_type('c6','select','',',1,2,3,4,5');
//$xcrud->change_type('c7','select','',',1,2,3,4,5');
//$xcrud->change_type('c8','select','',',1,2,3,4,5');
//$xcrud->change_type('c9','select','',',1,2,3,4,5');
//$xcrud->change_type('c10','select','',',1,2,3,4,5');


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



//$xcrud->where("( c35 = 'Me postulé pero no obtuve una vacante' AND co3filecount = 1 ) OR ( co3filecount = 1 AND c33 = 'No' ) "); // Me postulé pero no obtuve una vacante = Ya participo de GCP pero no curso / ( 1 = Subio carta aval Y  c33=No - No curso GCP)
//$xcrud->where('grupo =', '1'); // Filtra por grupo 1


//$xcrud->where("content.catid = 5 AND content.created > '{$last_visit}'");

//$xcrud->where("gcp2021.c33 = 'No' AND gcp2021.c35 = 'Me postulé pero no obtuve una vacante' ");


//$xcrud->where('c33 =', "No"); // Sí = Ya participó de GCP
//$xcrud->where('c35 =', "Me postulé pero no obtuve una vacante");
//$xcrud->where('co3filecount =', 1); // 0 = No cargo carta AVAL. (para marcar clausula OR , se utiliza or_where , si fuera AND es solo where.)

//$xcrud->where('region =', "4"); //filtra por regiones de la 1  LA 6 NO PUEDEN HABER DOS REGIONES JUNTAS
//$xcrud->query('SELECT * FROM gcp2021 LIMIT 0, (COUNT(`id`)/6)');
//$xcrud->where('grupo =', "1");


//xcrud->button('{G6Q00001}', 'Descargar CV','icon-file','',array('target'=>'_blank'));
//$xcrud->button('{G6Q00002}', 'Carta Aval','icon-file','',array('target'=>'_blank'));

///////////////// EJEMPLO ///$xcrud->subselect('Products count','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 
//$xcrud->subselect('Puntaje','{c2}+{c3}+{c4}+{c5}+{c6}+{c7}+{c8}+{c9}');
//$xcrud->subselect('Grupo 1','SELECT count(id)/6 FROM gcp2021'); // insert as last column
//$xcrud->query('SELECT db1,db2,PROVINCIA,LOCALIDAD FROM gcp2021 WHERE id < 100');
//“>” y “<”. 


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
//$xcrud->change_type('CO2','none');


//$xcrud->change_type('t1','none');
//$xcrud->change_type('t2','none');
//$xcrud->change_type('t3','none');
//$xcrud->change_type('t4','none');
//$xcrud->change_type('t5','none');
//$xcrud->change_type('t6','none');
//$xcrud->change_type('evaluacion_tecnica','none');
//$xcrud->change_type('comentarios','none');

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