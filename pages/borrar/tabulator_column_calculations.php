
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
	
    $xcrud->tabulator_column_properties('customerNumber','topCalc:avg');
	$xcrud->tabulator_column_properties('amount','bottomCalc:sum');
	$xcrud->tabulator_column_properties('paymentDate','topCalcFormatter:star');
	
	//$xcrud->tabulator_column_properties('amount','topCalcParams:{precision:1}');
    
	
	$xcrud->tabulator_active(true);
	$xcrud->tabulator_main_properties('responsiveLayout:"collapse",
		                              movableColumns: true,
		                              headerVisible:true,
		                              width: "100%",
		                              columnCalcs:"both",
		                              height: "400px",
		                              groupStartOpen:true,
		                              placeholder:"No Data Available",
		                              tooltipsHeader:true,
									  tooltips:true'); //'layout: "fitColumns",
									  
//function paramLookup(values, data){
    //values - array of column values
    //data - all table data

    //do some processing and return the param object
 //   return {param1:"green"};
//}
									  
    echo $xcrud->render();



?>
