<?php 
	
	$role = Xcrud::get_instance();
    $role->table_name('Roles');
    $role->table('sys_roles');
    $role->fields('roles_name', false, 'Detalles del rol');   
    //Labels
    $role->label('roles_name','Nombre del Rol');
	$role->label('ports_id','Port'); 
	
    $role->columns('roles_name'); 

	//$role->relation('ports_id','ports','ports_id','port_name');  
    $role->unset_print();
    //$xcrud->unset_search();
    		
	$menu_tree = $role->nested_table('Menu','sys_roles_id','sys_menu','roles_id'); // nested table
    $menu_tree->fields('roles_id,menu_name,parent_id,sequence,icon,url,description,isactive'); 
	$menu_tree->change_type('isactive', 'select', '', array('1'=>'Yes','0'=>'No'));
    
    //Labels
    $menu_tree->label('menu_name','Mombre del menú');
	$menu_tree->label('parent_id','Menú Padre');
	$menu_tree->label('roles_id','Rol');
	$menu_tree->label('sequence','Orden de secuencia i.e 1 or 2');
	//$menu_tree->label('ports_id','Port');
	$menu_tree->label('icon_id','Icono');
	$menu_tree->label('description','Descripciónn');	
	$menu_tree->label('url','URL de la página');	
	$menu_tree->relation('parent_id','sys_menu','sys_menu_id','menu_name');
	$menu_tree->relation('icon','icons','icon','icon');        
    $menu_tree->columns('roles_id,menu_name,parent_id,sequence,icon,url,description');  
	/*$menu_tree->button('#', "Top", 'glyphicon glyphicon-arrow-up icon-arrow-up', 'btn xcrud-action', array(
        'data-action' => 'movetop',
        'data-task' => 'action',
        'data-primary' => '{menu_name}'));
    $menu_tree->button('#', "Bottom", 'glyphicon glyphicon-arrow-down icon-arrow-down', 'btn xcrud-action', array(
        'data-action' => 'movebottom',
        'data-task' => 'action',
        'data-primary' => '{menu_name}'));  
		
	$menu_tree->create_action('movetop', 'movetop');
    $menu_tree->create_action('movebottom', 'movebottom');	*/
    $menu_tree->columns('menu_name,parent_id,roles_id,sequence,icon,url');
	$menu_tree->column_width('menu_name','200');
    $menu_tree->column_width('Parent Name','250');
    $menu_tree->column_width('roles_id','50');	
	$menu_tree->column_width('sequence','150');	
	$menu_tree->column_width('icon','100');	
	$menu_tree->column_width('url','200');	
	$menu_tree->tabulator_active(false);
    //groupBy:["customerNumber","paymentDate"]
    $menu_tree->tabulator_main_properties('responsiveLayout:"collapse",
                                      movableColumns: true,
                                      headerVisible:true,
                                      width: "800px",
                                      height: "900px",
                                      groupStartOpen:true,
                                      placeholder:"No Data Available",
                                      tooltipsHeader:true,
                                      tooltips:true,
                                      groupBy:["parent_id"]'); //'layout: "fitColumns",	
	$menu_tree->tabulator_active(true);	
    $menu_tree->unset_print();
	//$menu_tree->unset_edit();
	//$menu_tree->unset_add();
	//$role->unset_add();
	//$role->unset_remove();
	//$role->unset_edit();
	//$menu_tree->unset_remove();
	
    //$xcrud->unset_search();
    echo $role->render();			
?>