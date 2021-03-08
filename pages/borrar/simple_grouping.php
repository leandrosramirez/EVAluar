
<?php
    $xcrud = Xcrud::get_instance();	
	$xcrud->table('payments');
	$xcrud->unset_remove();
	$xcrud->group_by_columns('customerNumber');
	$xcrud->columns('customerNumber,checkNumber,amount');
	//$xcrud->unset_edit(true,'customerNumber','=','112');
	//$xcrud->unset_edit();
	//$xcrud->unset_edit();
    echo $xcrud->render();
?>
