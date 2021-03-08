
<?php

    $xcrud = Xcrud::get_instance();	
	$xcrud->table('payments');
    $xcrud ->is_edit_side(true);
	echo $xcrud->render();
		
?>
