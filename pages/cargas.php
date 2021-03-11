<?php
error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);
$xcrud = Xcrud::get_instance();
$xcrud->table('uploads');
$xcrud->table_name('Cargas');

// Archivo
$xcrud->change_type('simple_upload', 'file', '', array('not_rename'=>true));




$xcrud->fields('simple_upload,programa,descripcion');



$xcrud->columns('simple_upload,programa,descripcion');

//echo $xcrud->render('edit', 14);
echo $xcrud->render();
?>