<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->table_name('Simple relation');
    $xcrud->relation('officeCode','offices','officeCode','city');
    $xcrud->label('officeCode','Office in');
    $xcrud->columns('firstName,lastName,officeCode');
    $xcrud->fields('firstName,lastName,officeCode');
    $xcrud->limit(10);
    echo $xcrud->render();
?>