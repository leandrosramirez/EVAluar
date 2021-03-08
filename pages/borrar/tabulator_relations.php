
<?php

    $xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->table_name('Tabulator relation');
    $xcrud->relation('officeCode','offices','officeCode','city');
    
    $xcrud->label('officeCode','Office in');
	$xcrud->label('firstName','First Name');
	$xcrud->label('lastName','Last Name');
	
    $xcrud->columns('firstName,lastName,officeCode');
    $xcrud->fields('firstName,lastName,officeCode');

	$xcrud->column_width('firstName','35%');
	$xcrud->column_width('lastName','25%');
	$xcrud->column_width('officeCode','30%');
	
	$xcrud->tabulator_active(true);
	$xcrud->tabulator_main_properties('
		                              movableColumns: true,
		                              headerVisible:true,
		                              width: "100%",
		                              height: "400px",
		                              groupStartOpen:true,
		                              placeholder:"No Data Available",
		                              tooltipsHeader:true,
									  tooltips:true'); //'layout: "fitColumns",
    $xcrud->limit(10);
    echo $xcrud->render();



?>
