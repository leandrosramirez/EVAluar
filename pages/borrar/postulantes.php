<?php
    $xcrud = Xcrud::get_instance();	
	$xcrud->table("gcp2021");
	
	//CAMPOS BASE DE LA TABLA DE PREINSCRIPTOS
	$xcrud->label('id','ID de respuesta');
$xcrud->label('submitdate','Fecha de envío');
$xcrud->label('lastpage','Última página');
$xcrud->label('startlanguage','Lenguaje inicial');
$xcrud->label('db1','Escribe tu nombre:');
$xcrud->label('db2','Escribe tu apellido:');
$xcrud->label('db3','Tu nacionalidad es:');
$xcrud->label('db3a1','Selecciona tu continente de residencia');
$xcrud->label('db312','Selecciona tu país de residencia en América');
$xcrud->label('db313','Selecciona tu país de residencia en Europa');
$xcrud->label('db314','Selecciona tu país de residencia en Asia');
$xcrud->label('db315','Selecciona tu país de residencia en África');
$xcrud->label('db316','Selecciona tu país de residencia en Oceanía');
$xcrud->label('db7','Escribe tu barrio de residencia');
$xcrud->label('db9','¿cuál es tu identidad de género?');
$xcrud->label('db9[other]','¿cuál es tu identidad de género? [Otro]');
$xcrud->label('db10','¿Cuál es tu fecha de nacimiento?');
$xcrud->label('db11','Escribe tu DNI');
$xcrud->label('db12','Escribe tu correo electrónico');
$xcrud->label('db13','Escribe tu teléfono fijo');
$xcrud->label('db14','Escribe tu teléfono celular');
$xcrud->label('db15','¿Usás whatsapp?');
$xcrud->label('db16','Si lo tienes, escribe tu sitio web');
$xcrud->label('db22','¿Sos persona afrodescendiente o con familiares de origen africano?');
$xcrud->label('db23','¿Perteneces a una comunidad de pueblos indígenas o descendiente de pueblos indígenas u originarios?');
$xcrud->label('db23a1','¿Cuál?');
$xcrud->label('C24','¿En cuál de las siguientes áreas desarrollas principalmente tu trabajo o actividad cultural? Seleccione el área, sector o disciplina principal');
$xcrud->label('C25','Lugar o ámbito cultural en el que participas o trabajas actualmente. Selecciona el lugar principal.');
$xcrud->label('C25[other]','Lugar o ámbito cultural en el que participas o trabajas actualmente. Selecciona el lugar principal. [Otro]');
$xcrud->label('C251','Selecciona el nivel en la Administración Pública en el cual te desempeñas:');
$xcrud->label('C26','Indica tu relación contractual de tu actividad cultural principal es');
$xcrud->label('C27','Indica el año de inicio de tu actividad cultural principal:');
$xcrud->label('C28','Selecciona tu nivel máximo de estudios alcanzados');
$xcrud->label('C29','¿Participaste de instancias de formación vinculadas con la cultura? Cursos, talleres, charlas, seminarios, etc.');
$xcrud->label('C291','¿En cuáles?');
$xcrud->label('c30','¿Cuál es tu área de estudios?');
$xcrud->label('c30[other]','¿Cuál es tu área de estudios? [Otro]');
$xcrud->label('c31','¿Estás cursando algún programa de formación en la actualidad? (ya sea en modalidad virtual, presencial o semi-presencial; ya sea en el campo de la formación cultural o de otra área)');
$xcrud->label('c32','Si estás cursando por favor comentá la actividad, nivel e institución.');
$xcrud->label('c33','¿Participaste en alguna de las ediciones previas del programa de Formación en Gestión Cultural Pública?');
$xcrud->label('c34','¿En qué año?');
$xcrud->label('C35','¿Cómo fue tu experiencia con esa postulación?');
$xcrud->label('C36','Describe tu experiencia:');
$xcrud->label('C37','¿En qué aspectos o temas, asociados a tu desarrollo profesional, te interesaría formarte a futuro?');
$xcrud->label('PA1','¿Te postulaste y/o participaste en ediciones anteriores de algún curso virtual del Ministerio de Cultura que no sea Gestión Cultural Pública ?');
$xcrud->label('PA2','¿Cómo fue tu experiencia con esa postulación?');
$xcrud->label('PA3','¿En qué curso participaste? ¿En qué año?');
$xcrud->label('PA4','¿Tienes algún comentario que quieras compartir? Compártelo aquí');
$xcrud->label('conexion30','¿Disponés de dispositivos tecnológicos y conexión para la participación en los encuentros sincrónicos que propone el curso?');
$xcrud->label('conexion31','¿Disponés del tiempo para llevar adelante este curso?');
$xcrud->label('conexion32[SQ001]','¿Qué tipo de conexión usás para accerder a internet? Elegí todas las que apliquen. [WiFi]');
$xcrud->label('conexion32[SQ002]','¿Qué tipo de conexión usás para accerder a internet? Elegí todas las que apliquen. [Red Móvil / Red celular]');
$xcrud->label('conexion32[SQ003]','¿Qué tipo de conexión usás para accerder a internet? Elegí todas las que apliquen. [Cableado / Fibra óptica]');
$xcrud->label('conexion33[SQ001]','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. [Computadora de escritorio]');
$xcrud->label('conexion33[SQ002]','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. [Computadora Portátil (notebook, netbook)]');
$xcrud->label('conexion33[SQ003]','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. [Tablet]');
$xcrud->label('conexion33[SQ004]','Por favor elegí a continuación los dispositivos que usarías para acceder a los contenidos del curso. Elegí todas las que apliquen. [Celular]');
$xcrud->label('conexion34','¿Tenés un lugar donde trabajar con concentración durante la semana en contenidos del ciclo?');
$xcrud->label('conexion35','¿Tu dispositivo tiene cámara web? (no excluyente)');
$xcrud->label('conexion36','¿Tu dispositivo tiene micrófono? (no excluyente)');
$xcrud->label('DI1','Escribe el nombre de la institución en la que trabajas (nombre completo)');
$xcrud->label('DI2','Escribe el área de la institución en la que te desempeñas actualmente');
$xcrud->label('DI3','Escribe el cargo o rol que desempeñas en la actualidad');
$xcrud->label('DI4','Escribe el sitio web de la institución');
$xcrud->label('DI5','Escribe el correo electrónico de la institucional:');
$xcrud->label('DI6','¿Qué antigüedad tienes en esta institución?');
$xcrud->label('DI7','¿Qué antigüedad tienes en el cargo?');
$xcrud->label('P1','¿Cómo te enteraste de esta convocatoria?');
$xcrud->label('P1[other]','¿Cómo te enteraste de esta convocatoria? [Otro]');
$xcrud->label('P2','¿Por qué te interesa participar del curso? (Agradecemos desarrollar tus expectativas, intereses, necesidades de aprendizaje y/o desafíos de desarrollo profesional vinculados al programa formativo)');
$xcrud->label('P3','¿En qué medida y aspectos los contenidos del curso pueden ser relevantes para la institución en la que trabajás?');
$xcrud->label('P4','¿Por qué creés que los contenidos del curso pueden ser de interés o contribuir a tu desarrollo profesional individual y/o a tu desempeño como parte del sector cultural local?');
$xcrud->label('P5','Comentarios o consideraciones adicionales (Aquí podés compartir otras reflexiones, aportes o experiencias destacadas vinculadas a tu desempeño laboral y/o desarrollo profesional)');
$xcrud->label('CO2','En esta sección tenés que adjuntar tu Curriculum Vitae actualizado (extensión no mayor a 5 carillas).');
$xcrud->label('CO2[filecount]','filecount - En esta sección tenés que adjuntar tu Curriculum Vitae actualizado (extensión no mayor a 5 carillas).');
$xcrud->label('co3','En esta sección tenés que adjuntar una nota del referente o autoridad de tu institución de pertenencia (por lo menos, de un cargo superior al tuyo). Esta carta deberá avalarte como postulante al curso, corroborar que actualmente te desempeñás en la institución (explicitar tu cargo, rol o funciones actuales) y dar certeza de que vas a poder cumplir con las actividades y/o compromisos del curso que coincidan con tu horario laboral. Existe un modelo de nota aval en caso de que la necesites, podés encontrarla en la web de la convocatoria o solicitándola por email a gcp@cultura.gob.ar.');
$xcrud->label('co3[filecount]','filecount - En esta sección tenés que adjuntar una nota del referente o autoridad de tu institución de pertenencia (por lo menos, de un cargo superior al tuyo). Esta carta deberá avalarte como postulante al curso, corroborar que actualmente te desempeñás en la institución (explicitar tu cargo, rol o funciones actuales) y dar certeza de que vas a poder cumplir con las actividades y/o compromisos del curso que coincidan con tu horario laboral. Existe un modelo de nota aval en caso de que la necesites, podés encontrarla en la web de la convocatoria o solicitándola por email a gcp@cultura.gob.ar.');
$xcrud->label('CO1','Confirmo que leí el programa del curso y acepto los requisitos de participación y aprobación. Podés consultar el marco de la convocatoria y las condiciones de participación del curso de Formación en Gestión Cultural Pública en modalidad a distancia en la página web: www.cultura.gob.ar .');
$xcrud->label('PROVINCIA','PROVINCIA');
$xcrud->label('DEPARTAMENTO','DEPARTAMENTO');
$xcrud->label('LOCALIDAD','LOCALIDAD');


//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('db1,db2,db9,db11,PROVINCIA');



//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
$xcrud->fields('db1,db2,db9,db11,PROVINCIA');


//final del script
	echo $xcrud->render();		
?>
