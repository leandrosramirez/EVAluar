<?php 

Xcrud_config::$editor_url = dirname($_SERVER["SCRIPT_NAME"]).'/../editors/ckeditor/ckeditor.js';
$xcrud = Xcrud::get_instance();
$xcrud->table('mesadeayuda');
$xcrud->language('es');
$xcrud->table_name('Mesa de Ayuda - Tickets Abiertos');

$xcrud->label('id','Ticket');
$xcrud->label('id_user_moodle','Participante');
$xcrud->label('id_limesurvey','ID Limesurvey');
$xcrud->label('id_aula','Aula');
$xcrud->label('fecha_incidencia','Fecha inicio');
$xcrud->label('fecha_cierre','Fecha cierre');
$xcrud->label('Comentario','Comentario');
$xcrud->label('estado','Estado');
$xcrud->label('asignacion','Asignado');
$xcrud->label('tipo_incidencia','Tipo de incidencia');
$xcrud->label('user_creadore','creado por');
$xcrud->label('simple_image','impresión de pantalla');




//*************************************DATOS QUE SE MUESTRAN EN LA LISTA*********************************
$xcrud->columns('id,fecha_incidencia,estado,asignacion,user_creadore,id_aula,tipo_incidencia,user_creadore');
$xcrud->fields('id,fecha_incidencia,fecha_cierre,estado,asignacion,id_user_moodle,id_aula,comentario,tipo_incidencia,id_limesurvey,simple_image,user_creadore');

$xcrud->relation('id_aula','aulas','id','nombre');
$xcrud->relation('id_user_moodle','usuarios','id','username');
$xcrud->relation('asignacion','user','user_id','username');
$xcrud->relation('user_creadore','user','user_id','username');
$xcrud->change_type('estado','select','','Abierto,Cerrado');
$xcrud->change_type('tipo_incidencia','select','','Contraseña,Entrega de tareas,Otra');

//*************************************FILTRA POR TICKET ABIERTOS*********************************
$xcrud->where("estado='Abierto'"); // Estado del ticket abierto


// Cargar archivo adjunto
$xcrud->change_type('simple_image', 'image', '', array('not_rename'=>true));

//remover botón de eliminar
$xcrud->unset_remove();

//ordenar por nro de ticket de forma descendente, los más nuevos primero
$xcrud->order_by('id','desc');

//limitar a 20 registro por pagina
$xcrud->limit(20);

    echo $xcrud->render();
?>

