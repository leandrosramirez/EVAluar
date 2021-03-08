<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->validation_required('lastName',2)->validation_required('firstName',2)->validation_required('jobTitle');
    $xcrud->validation_required('email');
    $xcrud->validation_pattern('email','email')->validation_pattern('extension','alpha_numeric')->validation_pattern('officeCode','natural');
    $xcrud->limit(10);
    echo $xcrud->render();
?>