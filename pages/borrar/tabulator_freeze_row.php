
<?php

    $xcrud = Xcrud::get_instance();	
    $xcrud->table('payments');
	$xcrud->label('checkNumber','Check No');
	$xcrud->label('paymentDate','Payment Date');
	$xcrud->label('customerNumber','Customer Number');
	$xcrud->label('amount','Amount');
	$xcrud->columns('paymentDate,customerNumber,checkNumber,amount');
	$xcrud->column_width('checkNumber','35%');
	$xcrud->column_width('paymentDate','25%');
	$xcrud->column_width('action','30%');
	
	$xcrud->tabulator_active(true);
	$xcrud->tabulator_main_properties('responsiveLayout:"collapse",
		                              movableColumns: true,
		                              headerVisible:true,
		                              width: "100%",
		                              height: "400px",
		                              groupStartOpen:true,
		                              placeholder:"No Data Available",
		                              tooltipsHeader:true,
									  tooltips:true'); //'layout: "fitColumns",
	$xcrud->tabulator_freeze_row(2); //Index starts at 0
									  
    echo $xcrud->render();



?>
