<?php
    $xcrud = Xcrud::get_instance();	
	$xcrud->table("payments");
	echo $xcrud->render();		
?>
