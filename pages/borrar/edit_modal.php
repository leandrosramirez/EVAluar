
<?php

    $xcrud = Xcrud::get_instance();	
	$xcrud->table('payments');
    $xcrud->is_edit_modal(true);	
	echo $xcrud->render();
		
?>
