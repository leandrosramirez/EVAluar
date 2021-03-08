<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
	$xcrud->table_name('Employees - Single click cell to edit! Save by Enter only');
    $xcrud->validation_required('lastName',2)->validation_required('firstName',2)->validation_required('jobTitle');
    $xcrud->validation_required('email');
    $xcrud->validation_pattern('email','email')->validation_pattern('extension','alpha_numeric')->validation_pattern('officeCode','natural');
    $xcrud->relation('officeCode','offices','officeCode','city');
    $xcrud->limit(10);
	
    $xcrud->fields_inline('lastName,firstName,extension,email,officeCode,reportsTo,jobTitle');//set the fields to allow inline editing
    $xcrud->inline_edit_save('enter_only');// Can be 'enter_only' or 'button_only'  or 'enter_button_only'
    
    echo $xcrud->render();
?>