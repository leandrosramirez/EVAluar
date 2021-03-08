<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->fields('customerName,contactLastName,contactFirstName,phone', false, 'Contact');
    $xcrud->fields('addressLine1,addressLine2,city,state,postalCode,country', false, 'Address');
    $xcrud->fields('customerNumber,salesRepEmployeeNumber,creditLimit', false, 'Finance');
    echo $xcrud->render('edit', 148); // edit screen with primary id = 148
?>