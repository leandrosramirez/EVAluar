<?php

	$xcrud = Xcrud::get_instance();
    $xcrud->table('million');
    $xcrud->limit_list('20,50,100,1000'); // do not use 'all' for large tables
    $xcrud->bulk_select_position('right'); //It can be 'left' or 'right'
    //$xcrud->set_bulk_select(false);
    $xcrud->set_bulk_select(false,'cd_key','=','EBGC57SXM-VW47I6AF-401X7DYM');//Dont be able to select records with ID 287846
	$xcrud->unset_remove(true,'cd_key','=','EBGC57SXM-VW47I6AF-401X7DYM');
	$xcrud->create_action('bulk_delete', 'bulk_delete'); // action callback, function publish_action() in functions.php
    echo $xcrud->render();
?>

<button class="btn btn-primary" onclick="deleteItems();">Delete Selected</button>

<script>
	function deleteItems(){
		var r = confirm("Confirm deletion of " + items.length + " items.");
		if (r == true) {
		  Xcrud.request('.xcrud-ajax',Xcrud.list_data('.xcrud-ajax',{action: 'bulk_delete', task:'action',selected:items,table:'million',identifier:'id'}))
	      items = [];
		} 		
	}
</script>
