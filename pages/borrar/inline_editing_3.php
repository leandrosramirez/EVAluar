<?php
   
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
	$xcrud->table_name('Employees - Single click cell to edit!');
    $xcrud->set_attr('lastName',array('id'=>'user','data-role'=>'admin'));	
	//Activate parslet validation
	$xcrud->parsley_active(true);
	//Make extension mandatory
	$xcrud->set_attr('extension',array('required'=>'required'));
	//Ensure First Name is alpha numeric	
	$xcrud->set_attr('firstName',array('data-parsley-trigger'=>'change','required'=>'required','id'=>'user','data-parsley-type'=>'alphanum'));
	$xcrud->set_attr('lastName',array('data-parsley-trigger'=>'change','required'=>'required','id'=>'user','data-parsley-type'=>'alphanum'));
	//ensure valid email and display "Email not valid"
	$xcrud->set_attr('email',array('data-parsley-trigger'=>'change','id'=>'user','data-parsley-type'=>'email',
	'data-parsley-error-message'=>"Email not valid"));	
	//ensure office Code is between 3 and 5 number characters
	$xcrud->set_attr('reportsTo',array('id'=>'user','data-parsley-type'=>'digits','data-parsley-length'=>"[3,5]"));
	$xcrud->relation('officeCode','offices','officeCode','city');
	$xcrud->fields_inline('lastName,firstName,extension,email,officeCode,reportsTo,jobTitle');//set the fields to allow inline editing	    
    echo $xcrud->render();
	
?>