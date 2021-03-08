
<?php
    $xcrud = Xcrud::get_instance();	
	$xcrud->table('payments');
	$xcrud->unset_remove();
	//$xcrud->unset_edit(true,'customerNumber','=','112');
	//$xcrud->unset_edit();
	//$xcrud->unset_edit();
	$xcrud->buttons_position('left');
    echo $xcrud->render();
?>
