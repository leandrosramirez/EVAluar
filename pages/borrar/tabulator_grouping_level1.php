
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
	
	//$xcrud->column_width('action','25%');	
	//$xcrud->column_tabulator_properties('amount','responsiveLayout:"collapse",align:"right",sorter:"date",editable:true,formatter:"star", formatterParams:{color:["#00dd00", "orange", "rgb(255,0,0)"]}');
	//$xcrud->tabulator_column_properties('checkNumber','editor:input');
	//$xcrud->tabulator_column_properties('amount','bottomCalc:avg');
	$xcrud->tabulator_column_properties('amount','topCalc:"count"');
	
	
	//$xcrud->tabulator_column_properties('amount','responsiveLayout:"collapse",align:"right",frozen:true,editor:"input", editor:true');
	//$xcrud->tabulator_freeze_row(2); //Index starts at 0
	$xcrud->tabulator_active(true);
	//groupBy:["customerNumber","paymentDate"]
	$xcrud->tabulator_main_properties('responsiveLayout:"collapse",
		                              movableColumns: true,
		                              headerVisible:true,
		                              width: "100%",
		                              height: "400px",
		                              groupStartOpen:true,
		                              groupClosedShowCalcs:true,
		                              placeholder:"No Data Available",
		                              tooltipsHeader:true,
									  tooltips:true,
									  groupBy:["customerNumber"]'); //'layout: "fitColumns",
	//$xcrud->columns('paymentDate', true);
	//groupBy:["customerNumber","paymentDate"],
    echo $xcrud->render();



?>
