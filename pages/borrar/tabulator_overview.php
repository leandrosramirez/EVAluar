<?php

    $xcrud = Xcrud::get_instance();	
    $xcrud->table('tabulator');
	$xcrud->table_name('XCrud 1.7 Tabulator Support');
	$xcrud->label('main_feature','Main Feature');
	$xcrud->label('feature','Feature');
	$xcrud->label('version','Version');
	$xcrud->label('available','Available');
	$xcrud->label('description','Notes');
	$xcrud->column_width('main_feature','20%');
	$xcrud->column_width('feature','20%');
	$xcrud->column_width('version','20%');
	$xcrud->column_width('available','20%');
	$xcrud->column_width('action','20%');
	
	$xcrud->columns('main_feature,feature,version,available');
	$xcrud->change_type('main_feature', 'select', '', array('Tabulator Layout'=>'Tabulator Layout','Data Manipulation'=>'Data Manipulation','Interaction'=>'Interaction'));
	$xcrud->tabulator_active(true);
	$xcrud ->is_edit_modal(true);
	$xcrud->tabulator_main_properties('responsiveLayout:"collapse",
		                              movableColumns: true,
		                              headerVisible:true,
		                              width: "100%",
		                              columnCalcs:"both",
		                              height: "400px",
		                              groupStartOpen:true,
		                              placeholder:"No Data Available",
		                              tooltipsHeader:true,
									  tooltips:true,
									  groupBy:["main_feature"]
									  '); //'layout: "fitColumns",
									  
	//$xcrud->search_columns('version,main_feature','description');								  
								
									  
    echo $xcrud->render();



?>
