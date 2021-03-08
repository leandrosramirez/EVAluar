<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->join('officeCode','offices','officeCode'); // ... INNER JOIN offices ON employees.officeCode = offices.officeCode ...
    echo $xcrud->render();
?>