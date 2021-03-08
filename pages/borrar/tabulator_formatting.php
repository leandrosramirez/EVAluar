
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
									  tooltips:true');
	
	$xcrud->tabulator_column_properties('customerNumber','topCalc:avg');
	$xcrud->tabulator_column_properties('amount','bottomCalc:sum');
	$xcrud->tabulator_column_properties('paymentDate','topCalcFormatter:star');								  
									  
  							  								  
   //JS gives flexibility to format table									  
   $xcrud->tabulator_row_formatter_js('if(row.getData().customerNumber == 103){
								            row.getElement().style.backgroundColor = "#A6A6DF";
								        }')	;								  
									   
   	
   //Column Formatting	
   //$xcrud->tabulator_column_properties('amount','editor:input');	//edit column
   $xcrud->tabulator_column_properties('amount','formatter:decorateColumn');//apply stlying for amount less than 10000	
   $xcrud->tabulator_general_function_js('var decorateColumn = function(cell, formatterParams){
       var value = cell.getValue();
	   console.log(value);
        if(value < 10000){
            return "<span>" + value + "</span>";
        }else{
            return value;
        }
    };');
	
    echo $xcrud->render();


?>
