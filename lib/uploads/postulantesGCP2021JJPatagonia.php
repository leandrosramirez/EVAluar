<?php 
//clases autenticación 

$xcrud = Xcrud::get_instance();
$xcrud->table('gcp2021');
$xcrud->language('es');
$xcrud->table_name('Evaluación cuantitativa y cualitativa de Postulantes <a class="btn btn-primary btn-sm" href="https://datossociales.com/evaluar/lib/uploads/Guia_para_equipo_evaluador_de_postulaciones_para_GCP_2021.pdf" target="_blank" ><i class="fa fa-file"></i>  Guia de Evaluación</a>');

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
$xcrud->label('db3','Tu nacionalidad es:');
$xcrud->label('db3a1','Seleccioná tu continente de residencia');
$xcrud->label('db312','Seleccioná tu país de residencia en América');
$xcrud->label('db315','Seleccioná tu país de residencia en África');
$xcrud->label('db314','Seleccioná tu país de residencia en Asia');
$xcrud->label('db313','Seleccioná tu país de residencia en Europa');
$xcrud->label('db316','Seleccioná tu país de residencia en Oceanía');
$xcrud->label('db9','Género');
$xcrud->label('db9other','¿Cuál es tu identidad de género? Otro');
$xcrud->label('db10','¿Cuál es tu fecha de nacimiento?');
$xcrud->label('db11','Escribí tu DNI');
$xcrud->label('db12','Escribí tu correo electrónico');
$xcrud->label('db13','Escribí tu teléfono fijo');
$xcrud->label('db14','Escribí tu teléfono celular');
$xcrud->label('db15','¿Usás whatsapp?');
$xcrud->label('db16','Si tenés, escribí tu sitio web.');
$xcrud->label('db22','¿Sos persona afrodescendiente o con familiares de origen africano?');
$xcrud->label('db23','¿Pertenecés a una comunidad de pueblos indígenas o descendiente de pueblos indígenas u originarios?');
$xcrud->label('db23a1','¿Cuál?');
$xcrud->label('db7','Escribe tu barrio de residencia');
$xcrud->label('C24','¿En cuál de las siguientes áreas desarrollás principalmente tu trabajo o actividad cultural? Seleccioná el área, sector o disciplina principal');
$xcrud->label('C25','Lugar o ámbito cultural en el que participás o trabajás actualmente. Seleccioná el lugar principal. (Si dispones de más de un empleo, priorizá el lugar de labor en el ámbito público).');
$xcrud->label('C25other','Lugar o ámbito cultural en el que participás o trabajás actualmente. Seleccioná el lugar principal. (Si dispones de más de un empleo, priorizá el lugar de labor en el ámbito público). Otro');
$xcrud->label('C251','Seleccioná el nivel en la Administración Pública en el cual te desempeñás:');
$xcrud->label('C26','Indicá la relación contractual de tu actividad cultural principal.');
$xcrud->label('C27','Indicá el año de inicio de tu actividad cultural principal:');
$xcrud->label('C28','Seleccioná tu nivel máximo de estudios alcanzados');
$xcrud->label('C29','¿Participaste de instancias de formación vinculadas con la cultura? Cursos, talleres, charlas, seminarios, etc.');
$xcrud->label('C291','¿En cuáles?');
$xcrud->label('c30','¿Cuál es tu área de estudios?');
$xcrud->label('c30other','¿Cuál es tu área de estudios? Otro');
$xcrud->label('c31','¿Estás cursando algún programa de formación en la actualidad? (ya sea en modalidad virtual, presencial o semi-presencial; ya sea en el campo de la formación cultural o de otra área)');
$xcrud->label('c32','Si estás cursando por favor comentá la actividad, nivel e institución.');
$xcrud->label('c33','¿participó de GCP?');
$xcrud->label('c34','¿En qué año?');
$xcrud->label('C35','¿Cómo fue tu experiencia con esa postulación?');
$xcrud->label('C36','Describí tu experiencia:');
$xcrud->label('C37','¿En qué aspectos o temas, asociados a tu desarrollo profesional, te interesaría formarte a futuro?');
$xcrud->label('PA1','¿Te postulaste y/o participaste en ediciones anteriores de algún curso virtual del Ministerio de Cultura que no sea Gestión Cultural Pública ?');
$xcrud->label('PA2','¿Cómo fue tu experiencia con esa postulación?');
$xcrud->label('PA3','¿En qué curso participaste? ¿En qué año?');
$xcrud->label('PA4','¿Tenés algún comentario que quieras compartir? Compartilo aquí');
$xcrud->label('conexion30','¿Disponés de dispositivos tecnológicos y conexión para la participación en los encuentros sincrónicos que propone el curso?');
$xcrud->label('conexion31','¿Disponés del tiempo para llevar adelante este curso?');
$xcrud->label('conexion32SQ001','¿Qué tipo de conexión usás para accerder a internet? Elegí todas las que apliquen. WiFi');
$xcrud->label('conexion32SQ002','¿Qué tipo de conexión usás para accerder a internet? Elegí todas las que apliquen. Red Móvil / Red celular');
$xcrud->label('conexion32SQ003','¿Qué tipo de conexión usás para accerder a internet? Elegí todas las que apliquen. Cableado / Fibra óptica');
$xcrud->label('conexion33SQ001','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. Computadora de escritorio');
$xcrud->label('conexion33SQ002','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. Computadora Portátil (notebook, netbook)');
$xcrud->label('conexion33SQ003','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. Tablet');
$xcrud->label('conexion33SQ004','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. Celular');
$xcrud->label('conexion34','¿Tenés un lugar donde trabajar con concentración durante la semana en contenidos del ciclo?');
$xcrud->label('conexion35','¿Tu dispositivo tiene cámara web? (no excluyente)');
$xcrud->label('conexion36','¿Tu dispositivo tiene micrófono? (no excluyente)');
$xcrud->label('DI1','Institución');
$xcrud->label('DI2','Escribí el área de la institución en la que te desempeñas actualmente');
$xcrud->label('DI3','Cargo actual');
$xcrud->label('DI4','Escribí el sitio web de la institución');
$xcrud->label('DI5','Escribí el correo electrónico de la institución:');
$xcrud->label('DI6','¿Qué antigüedad tenés en esta institución?');
$xcrud->label('DI7','¿Qué antigüedad tenés en el cargo?');
$xcrud->label('P1','¿Cómo te enteraste de esta convocatoria?');
$xcrud->label('P1other','¿Cómo te enteraste de esta convocatoria? Otro');
$xcrud->label('P2','¿Por qué te interesa participar del curso? (Agradecemos desarrollar tus expectativas, intereses, necesidades de aprendizaje y/o desafíos de desarrollo profesional vinculados al programa formativo)');
$xcrud->label('P3','¿En qué medida y aspectos los contenidos del curso pueden ser relevantes para la institución en la que trabajás?');
$xcrud->label('P4','¿Por qué creés que los contenidos del curso pueden ser de interés o contribuir a tu desarrollo profesional individual y/o a tu desempeño como parte del sector cultural local?');
$xcrud->label('P5','Comentarios o consideraciones adicionales (Aquí podés compartir otras reflexiones, aportes o experiencias destacadas vinculadas a tu desempeño laboral y/o desarrollo profesional)');
$xcrud->label('CO2','Curriculum Vitae');
//$xcrud->label('co3','En esta sección tenés que adjuntar una nota del referente o autoridad de tu institución de pertenencia (por lo menos, de un cargo superior al tuyo). Esta carta deberá avalarte como postulante al curso, corroborar que actualmente te desempeñás en la institución (explicitar tu cargo, rol o funciones actuales) y dar certeza de que vas a poder cumplir con las actividades y/o compromisos del curso que coincidan con tu horario laboral. Existe un modelo de nota aval en caso de que la necesites, podés encontrarla en la web de la convocatoria o solicitándola por email a gcp@cultura.gob.ar. Si no adjunta este documento específico quedará fuera de la postulación automaticamente.');
$xcrud->label('co3filecount','¿Carta Aval?');
$xcrud->label('CO1','Confirmo que leí el programa del curso y acepto los requisitos de participación y aprobación. Podés consultar el marco de la convocatoria y las condiciones de participación del curso de Formación en Gestión Cultural Pública en modalidad a distancia en la página web: www.cultura.gob.ar .');
$xcrud->label('PROVINCIA','Provincia');
$xcrud->label('DEPARTAMENTO','Departamento');
$xcrud->label('LOCALIDAD','Localidad');

//preguntas de evaluación excluyentes
$xcrud->label('preg01','¿Presentó aval institucional válido y vigente?');
$xcrud->label('preg02','¿Completó el anexo de motivaciones personales e institucionales que forma parte del aval?');
$xcrud->label('preg03','¿Quién promueve la postulación del candidato/a al curso? (Nombre y Cargo) ');
$xcrud->label('preg04','¿Presentó CV completo y actualizado? ');
$xcrud->label('preg05','¿Trabaja actualmente en una institución cultural pública identificable? ');
$xcrud->label('preg06','¿Participó en ed. previas de GCP? ');
//preguntas de evaluación cualitativas
$xcrud->label('evaluadoT','Ev. Téc.');
$xcrud->label('evaluadoF', 'Ev. Final');
$xcrud->label('puntaje','Puntaje');
//$xcrud->label('institucion','Institución');
$xcrud->label('preg07','¿Con cuánta antigüedad en la institución cuenta el/la postulante?');
$xcrud->label('preg08','¿Con cuánta experiencia profesional cuenta el/la postulante?');
$xcrud->label('preg09','¿Qué nivel de estudios completos ha alcanzado el/la postulante?');
$xcrud->label('preg10','¿Con qué nivel de conectividad cuenta el/la participante para cumplir con las actividades y demandas del curso?');
$xcrud->label('preg11','¿Está participando de otros programas o propuestas formativas actualmente?');
$xcrud->label('preg12','Comentarios');
$xcrud->label('Grupo', 'Grupo');
$xcrud->label('id_region','Región');

//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('db1,db2,PROVINCIA,LOCALIDAD,db9, DI1, DI3, preg12, evaluadoT, evaluadoF, id_region, puntaje');

//Ponderación preguntas evaluación cualitativa
$xcrud->change_type('preg08','select','',',1,2,3,4,5');
$xcrud->change_type('evaluadoF','select','',',SI,NO,A REVISAR,SUPLENTE');

//Solapas del legajo 

$xcrud->fields('db1,db2,db3,db9,db10,db11,db12,db13,db14,db15,db16,db23a1,db7,C24,C25,C25other,C251,C26,C27,C29,C291,c30,c30other,c32,c33,c34,C36,C37,PA1,PA2,PA3,PA4,DI2,DI3,DI4,DI5,DI7,P1,P1other,CO2,co3filecount,CO1,PROVINCIA,DEPARTAMENTO,LOCALIDAD, Grupo', false, 'Perfil del postulante');
$xcrud->fields('preg01,preg02,preg03,preg05', false, 'Requisitos excluyentes');
$xcrud->fields('evaluadoF, CO2,  preg12, P2, P3, P4, preg08, puntaje, DI1, preg04, evaluadoT', false, 'Evaluación Cualitativa');

// tooltips cualitativa //
$xcrud->field_tooltip('preg08','Ver Guía de Evaluación');
$xcrud->field_tooltip('preg12','Destacar información crítica para evaluar la postulación');

//regiones
$xcrud->relation('id_region','_regiones','id_region','nombre');
//$xcrud->relation('G1Q00008','_provincias','id_provincia','nombre');
$xcrud->order_by('id_region','desc');
$xcrud->order_by('puntaje','desc');
//$xcrud->order_by('PROVINCIA','desc');




//campos desabilitados
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
$xcrud->disabled('C24');
$xcrud->disabled('C25');
$xcrud->disabled('C25other');
$xcrud->disabled('C251');
$xcrud->disabled('C26');
$xcrud->disabled('C27');
$xcrud->disabled('C28');
$xcrud->disabled('C29');
$xcrud->disabled('C291');
$xcrud->disabled('c30');
$xcrud->disabled('c30other');
$xcrud->disabled('c31');
$xcrud->disabled('c32');
$xcrud->disabled('c33');
$xcrud->disabled('c34');
$xcrud->disabled('C35');
$xcrud->disabled('C36');
$xcrud->disabled('C37');
$xcrud->disabled('PA1');
$xcrud->disabled('PA2');
$xcrud->disabled('PA3');
$xcrud->disabled('PA4');
$xcrud->disabled('conexion30');
$xcrud->disabled('conexion31');
$xcrud->disabled('conexion32SQ001');
$xcrud->disabled('conexion32SQ002');
$xcrud->disabled('conexion32SQ003');
$xcrud->disabled('conexion33SQ001');
$xcrud->disabled('conexion33SQ002');
$xcrud->disabled('conexion33SQ003');
$xcrud->disabled('conexion33SQ004');
$xcrud->disabled('conexion34');
$xcrud->disabled('conexion35');
$xcrud->disabled('conexion36');
$xcrud->disabled('DI1');
$xcrud->disabled('DI2');
$xcrud->disabled('DI3');
$xcrud->disabled('DI4');
$xcrud->disabled('DI5');
$xcrud->disabled('DI6');
$xcrud->disabled('DI7');
$xcrud->disabled('P1');
$xcrud->disabled('P1other');
$xcrud->disabled('P2');
$xcrud->disabled('P3');
$xcrud->disabled('P4');
$xcrud->disabled('P5');
$xcrud->disabled('CO2');
$xcrud->disabled('co3');
$xcrud->disabled('co3filecount');
$xcrud->disabled('CO1');
$xcrud->disabled('PROVINCIA');
$xcrud->disabled('DEPARTAMENTO');
$xcrud->disabled('LOCALIDAD');
$xcrud->disabled('Grupo');
$xcrud->disabled('evaluadoT');
$xcrud->disabled('preg01');
$xcrud->disabled('preg02');
$xcrud->disabled('preg03');
$xcrud->disabled('preg05');
$xcrud->disabled('preg08');
$xcrud->disabled('preg04');
$xcrud->disabled('preg12');
//$xcrud->disabled('institucion');


// Suma de puntajes de Conexión //

//preg07+preg08+preg09+preg11+preg12+db22+db23
$xcrud->subselect('puntaje','{conexion30}+{conexion31}+{conexion32SQ001}+{conexion32SQ002}+{conexion32SQ003}+{conexion33SQ001}+{conexion33SQ002}+{conexion33SQ003}+{conexion33SQ004}+{preg07}+{preg08}+{preg09}+{preg11}+{db22}+{db23}');
//preg07+preg08+preg09+preg11+preg12+db22+db23
//$xcrud->subselect('institucionPunto','{institucion}');

//$xcrud->subselect('contarInstitucion','{}');



//campos coloreados
$xcrud->highlight_row('evaluadoT', '=', "1", '#EEFFB6'); // highlight_row resalta con color la fila en la cuadricula
//$xcrud->highlight_row('evaluadoF', '=', "1", '#CBFF22'); // highlight_row resalta con color la fila en la cuadricula
//$xcrud->highlight_row('co3filecount', '=', 0, '#d1403e'); // 
$xcrud->highlight_row('evaluadoF', '=', 'SI', '#CBFF22');
$xcrud->highlight_row('evaluadoF', '=', 'NO', '#FF9191');
$xcrud->highlight_row('evaluadoF', '=', 'SUPLENTE', '#FFFF91');
$xcrud->highlight_row('evaluadoF', '=', 'A REVISAR', '#FFD3B5');

//$xcrud->disabled('evaluacion_final_evaluador1');
//$xcrud->subselect('','SELECT COUNT(*) FROM gcp2021 WHERE institucion = {institucion}','status'); 

//$xcrud->subselect('Personas/Institucion','SELECT COUNT(*) FROM gcp2021 g WHERE g.institucion = {institucion} ');


//desplegar lista de selección (valores) para el campo evaluación_final
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



$xcrud->where("( c35 = 'Me postulé pero no obtuve una vacante' AND co3filecount = 1 ) OR ( co3filecount = 1 AND c33 = 'No' ) "); // Me postulé pero no obtuve una vacante = Ya participo de GCP pero no curso / ( 1 = Subio carta aval Y  c33=No - No curso GCP)
$xcrud->where("( id_region=5)");
//boton carta aval
$xcrud->button('{co3}', 'Carta Aval','icon-file','',array('target'=>'_blank'));

//$xcrud->where("content.catid = 5 AND content.created > '{$last_visit}'");

//$xcrud->where("gcp2021.c33 = 'No' AND gcp2021.c35 = 'Me postulé pero no obtuve una vacante' ");


//$xcrud->where('c33 =', "No"); // Sí = Ya participó de GCP
//$xcrud->where('c35 =', "Me postulé pero no obtuve una vacante");
//$xcrud->where('co3filecount =', 1); // 0 = No cargo carta AVAL. (para marcar clausula OR , se utiliza or_where , si fuera AND es solo where.)

//$xcrud->where('region =', "4"); //filtra por regiones de la 1  LA 6 NO PUEDEN HABER DOS REGIONES JUNTAS
//$xcrud->query('SELECT * FROM _preinscriptos WHERE G7Q00001 = "Sí"');


//xcrud->button('{G6Q00001}', 'Descargar CV','icon-file','',array('target'=>'_blank'));
//$xcrud->button('{G6Q00002}', 'Carta Aval','icon-file','',array('target'=>'_blank'));

///////////////// EJEMPLO ///$xcrud->subselect('Products count','SELECT COUNT(*) FROM orderdetails WHERE orderNumber = {orderNumber}','status'); 
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
$xcrud->change_type('CO2','none');
$xcrud->change_type('PA4','none');
$xcrud->change_type('C37','none');
$xcrud->change_type('C291','none');
$xcrud->change_type('c32','none');
$xcrud->change_type('DI1','none');
$xcrud->change_type('DI2','none');
$xcrud->change_type('DI3','none');
$xcrud->change_type('DI4','none');
$xcrud->change_type('PA2','none');
$xcrud->change_type('PA3','none');
$xcrud->change_type('P2','none');
$xcrud->change_type('P3','none');
$xcrud->change_type('P4','none');
$xcrud->change_type('P5','none');


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