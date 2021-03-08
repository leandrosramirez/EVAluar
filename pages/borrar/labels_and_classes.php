<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->label('lastName','Surname');
    $xcrud->label('firstName','Name');
    $xcrud->label('officeCode','Office code')->label('reportsTo','Reports to')->label('jobTitle','Job title');
    $xcrud->column_name('firstName', 'NaMe!'); // only column renaming
    $xcrud->column_class('extension','align-center font-bold'); // any classname
    // predefined classnames: align-left, align-right, align-center, font-bold, font-italic, text-underline
    echo $xcrud->render();
?>