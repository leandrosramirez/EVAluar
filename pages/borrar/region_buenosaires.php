<?php 
//clases autenticación 
//require_once '../users/init.php';
//if (!securePage($_SERVER['PHP_SELF'])){die();}


//include('./xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('_preinscriptos');
$xcrud->language('es');

$xcrud->label('G1Q00001','Nombre');
$xcrud->label('G1Q00002','Apellido');
$xcrud->label('G1Q00003','DNI');
$xcrud->label('G1Q00004','Género');
$xcrud->label('G1Q00004[other]','Género [Otro]');
$xcrud->label('G1Q00005','Fecha de nacimiento');
$xcrud->label('G1Q00006','Correo electrónico personal no institucional');
$xcrud->label('G1Q00007','Teléfono personal de contacto');
$xcrud->label('G1Q00008','Provincia de residencia');
$xcrud->label('G1Q00009','Localidad de residencia');
$xcrud->label('G2Q00001','Institución en la que trabaja (nombre completo)');
$xcrud->label('G2Q00002','Rango de la institución');
$xcrud->label('G2Q00002[other]','Rango de la institución [Otro]');
$xcrud->label('G2Q00003','Área de la institución en la que se desempeña actualmente');
$xcrud->label('G2Q00004','Cargo o rol que desempeña en la actualidad');
$xcrud->label('G2Q00005','Sitio web de la institución');
$xcrud->label('G2Q00006','Email institucional');
$xcrud->label('G2Q00007','Antigüedad en la institución');
$xcrud->label('G2Q00008','Antigüedad en el cargo');
$xcrud->label('G3Q00001','Nivel de estudios alcanzado');
$xcrud->label('G3Q00002','Área de estudios');
$xcrud->label('G3Q00002[other]','Área de estudios [Otro]');
$xcrud->label('G3Q00003','¿Estás cursando algún programa de formación en la actualidad?');
$xcrud->label('G3Q00004','Si estás cursando por favor comentá la actividad, nivel e institución.');
$xcrud->label('G3Q00005','¿Participaste en alguna de las ediciones previas del programa de Formación en Gestión Cultural Pública? ¿En qué año?');
$xcrud->label('G3Q00006','¿En qué aspectos o temas, asociados a tu desarrollo profesional, te interesaría formarte a futuro?');
$xcrud->label('G4Q00001','¿Tenés algún tipo de experiencia previa en cursos virtuales de formación?');
$xcrud->label('G4Q00002','¿Tenés acceso a un dispositivo con internet en tu lugar de trabajo?');
$xcrud->label('G4Q00003','¿Tenés acceso a un dispositivo con internet en tu hogar?');
$xcrud->label('G4Q00004[SQ001]','Computadora de escritorio');
$xcrud->label('G4Q00004[SQ002]','Computadora portátil (notebook)');
$xcrud->label('G4Q00004[SQ003]','Tablet');
$xcrud->label('G4Q00004[SQ004]','Celular');
$xcrud->label('G4Q00004[other]','Otro');
$xcrud->label('G4Q00005','¿Contás con espacio y tiempo durante la semana para poder dedicarte a los contenidos y actividades del curso?');
$xcrud->label('G4Q00006','¿Tu dispositivo tiene cámara web?');
$xcrud->label('G4Q00007','¿Tu dispositivo tiene micrófono?');
$xcrud->label('G4Q00008','¿Utilizás o necesitás algún tipo de software o extensión que facilite el acceso a contenidos digitales?');
$xcrud->label('G5Q00001','¿Cómo te enteraste de esta convocatoria?');
$xcrud->label('G5Q00001[other]','¿Cómo te enteraste de esta convocatoria?');
$xcrud->label('G5Q00002','¿Por qué te interesa participar del curso?');
$xcrud->label('G5Q00003','¿En qué medida y aspectos los contenidos del curso pueden ser relevantes para la institución en la que trabajás?');
$xcrud->label('G5Q00004','¿Por qué creés que los contenidos del curso pueden ser de interés o contribuir a tu desarrollo profesional individual y/o a tu desempeño como parte del sector cultural local?');
$xcrud->label('G5Q00005','¿Te postulaste y/o participaste en ediciones anteriores de algún curso virtual del Ministerio de Cultura?');
$xcrud->label('G5Q00006','¿Cuál/es?');
$xcrud->label('G5Q00007','Comentarios o consideraciones adicionales');
$xcrud->label('G6Q00001','Adjuntar CV del postulante');
$xcrud->label('G6Q00001[filecount]','Adjuntar CV del postulante');
$xcrud->label('G6Q00002','Adjuntar aval de la autoridad');
$xcrud->label('G6Q00002[filecount]','Adjuntar aval de la autoridad');
$xcrud->label('G7Q00001','Confirmo que leí el programa del curso y acepto los requisitos de participación y aprobación y el marco de la convocatoria.');
$xcrud->label('region','Región');


//cierre de las respuestas del formulario de inscripción
$xcrud->label('evaluacion_tecnica','¿Está completa la evaluación Técnica?');
$xcrud->label('evaluacion_cuantitativa','¿Evaluación Cuantitativa?');
$xcrud->label('evaluacion_cualitativa','¿Evaluación Cualitativa?');
$xcrud->label('t1','¿Presentó aval institucional válido y vigente?');
$xcrud->label('t2','¿Completó el anexo de motivaciones personales e institucionales que forma parte del aval?');
$xcrud->label('t3','¿Quién promueve la postulación del candidato/a al curso?');
$xcrud->label('t4','¿Presentó CV completo y actualizado?');
$xcrud->label('t5','¿Trabaja actualmente en una institución cultural pública identificable?');
$xcrud->label('t6','¿Participó en ediciones previas del curso de Gestión Cultural Pública?');


//DATOS QUE SE MUESTRAN EN LA LISTA 
$xcrud->columns('G1Q00001,G1Q00002,G1Q00003,G1Q00008,evaluacion_tecnica');

//DATOS QUE SE MUESTRAN DENTRO DEL FORMULARIO
$xcrud->fields('G1Q00001,G1Q00002,G1Q00003,G2Q00001,G2Q00002,G2Q00002[other],G2Q00003,G2Q00004,G3Q00005,G5Q00002,t1,t2,t3,t4,t5,t6,comentarios,evaluacion_tecnica');

//filtrar
$xcrud->where('G7Q00001 =', "1");
$xcrud->where('region =', "4");//Filtra la región NEA

//$xcrud->where('region =', "4"); //filtra por regiones de la 1  LA 6 NO PUEDEN HABER DOS REGIONES JUNTAS
//$xcrud->query('SELECT * FROM _preinscriptos WHERE G7Q00001 = "Sí"');


$xcrud->button('{G6Q00001}', 'Descargar CV','icon-file','',array('target'=>'_blank'));
$xcrud->button('{G6Q00002}', 'Carta Aval','icon-file','',array('target'=>'_blank'));


//selector de regiones
$xcrud->relation('region','_regiones','id_region','nombre');
//resaltador de fila // $xcrud->highlight_row('evaluacion_tecnica', '=', 0, '#8DED79');
//resaltador de campo // 
$xcrud->highlight_row('evaluacion_tecnica', '=', 1, '#91D8F7');
//$xcrud->highlight('evaluacion_cuantitativa', '=', 0, '#F7ADAF');
//$xcrud->highlight('evaluacion_cualitativa', '=', 0, '#A8CF45');
//tamaño de la la columna
$xcrud->column_width('evaluacion_tecnica','5%');
//$xcrud->column_width('evaluacion_cuantitativa','5%');
//$xcrud->column_width('evaluacion_cualitativa','5%');
$xcrud->column_width('G1Q00003','5%');
$xcrud->column_width('G1Q00001','15%');
$xcrud->column_width('G1Q00002','15%');
//$xcrud->limit(10);
//inhabilitar edición de campos
$xcrud->change_type('G1Q00001','none');
$xcrud->change_type('G1Q00002','none');
$xcrud->change_type('G1Q00003','none');
$xcrud->change_type('G1Q00004','none');
$xcrud->change_type('G1Q00004[other]','none');
$xcrud->change_type('G1Q00005','none');
$xcrud->change_type('G1Q00006','none');
$xcrud->change_type('G1Q00007','none');
$xcrud->change_type('G1Q00008','none');
$xcrud->change_type('G1Q00009','none');
$xcrud->change_type('G2Q00001','none');
$xcrud->change_type('G2Q00002','none');
$xcrud->change_type('G2Q00002[other]','none');
$xcrud->change_type('G2Q00003','none');
$xcrud->change_type('G2Q00004','none');
$xcrud->change_type('G2Q00005','none');
$xcrud->change_type('G2Q00006','none');
$xcrud->change_type('G2Q00007','none');
$xcrud->change_type('G2Q00008','none');
$xcrud->change_type('G3Q00001','none');
$xcrud->change_type('G3Q00002','none');
$xcrud->change_type('G3Q00002[other]','none');
$xcrud->change_type('G3Q00003','none');
$xcrud->change_type('G3Q00004','none');
$xcrud->change_type('G3Q00005','none');
$xcrud->change_type('G3Q00006','none');
$xcrud->change_type('G4Q00001','none');
$xcrud->change_type('G4Q00002','none');
$xcrud->change_type('G4Q00003','none');
$xcrud->change_type('G4Q00004[SQ001]','none');
$xcrud->change_type('G4Q00004[SQ002]','none');
$xcrud->change_type('G4Q00004[SQ003]','none');
$xcrud->change_type('G4Q00004[SQ004]','none');
$xcrud->change_type('G4Q00004[other]','none');
$xcrud->change_type('G4Q00005','none');
$xcrud->change_type('G4Q00006','none');
$xcrud->change_type('G4Q00007','none');
$xcrud->change_type('G4Q00008','none');
$xcrud->change_type('G5Q00001','none');
$xcrud->change_type('G5Q00001[other]','none');
$xcrud->change_type('G5Q00002','none');
$xcrud->change_type('G5Q00003','none');
$xcrud->change_type('G5Q00004','none');
$xcrud->change_type('G5Q00005','none');
$xcrud->change_type('G5Q00006','none');
$xcrud->change_type('G5Q00007','none');
$xcrud->change_type('G6Q00001','none');
$xcrud->change_type('G6Q00001[filecount]','none');
$xcrud->change_type('G6Q00002','none');
$xcrud->change_type('G6Q00002[filecount]','none');
$xcrud->change_type('G7Q00001','none');
$xcrud->change_type('region','none');

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
$xcrud->limit(20);

    echo $xcrud->render();
?>

