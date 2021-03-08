<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->columns('customerName,phone,city,country'); // columns in grid
    $xcrud->fields('customerName,creditLimit,salesRepEmployeeNumber'); // fields in details
    echo $xcrud->render();
?>