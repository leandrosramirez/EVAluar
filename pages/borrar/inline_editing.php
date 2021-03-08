<?php
    $xcrud = Xcrud::get_instance();	
	$xcrud->table_name('Employees - Single click cell to edit!');
	$xcrud->table('payments');
	$xcrud->unset_remove();
	$xcrud->fields_inline('customerNumber,checkNumber,paymentDate,amount');//set the fields to allow inline editing
    echo $xcrud->render();
?>
