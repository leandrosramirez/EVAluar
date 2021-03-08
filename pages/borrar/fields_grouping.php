<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
	$xcrud->table_name('Employees Form fields grouped ');
    $xcrud->validation_required('lastName',2)->validation_required('firstName',2)->validation_required('jobTitle');
    $xcrud->validation_required('email');
    $xcrud->validation_pattern('email','email')->validation_pattern('extension','alpha_numeric')->validation_pattern('officeCode','natural');
    $xcrud->relation('officeCode','offices','officeCode','city');
    $xcrud->limit(10);
	
	//Fields arrangement
	$xcrud->fields_arrange('firstName,lastName,extension','Group 1-Names',true); //First row - {fields,group name,show/hide group name}
	$xcrud->fields_arrange('email','Group 2 - Contacts',true); //Second row
	$xcrud->fields_arrange('officeCode,reportsTo','Group 3 - Location',true); //Third row
	$xcrud->fields_arrange('jobTitle','Group 4 - Position',true); //Fourth row
	
    $xcrud->fields_inline('lastName,firstName,extension,email,jobTitle,officeCode,reportsTo');//set the fields to allow inline editing
    $xcrud->inline_edit_save('enter_only');// Can be 'enter_only' or 'button_only'  or 'enter_button_only'
    
    echo $xcrud->render();
?>