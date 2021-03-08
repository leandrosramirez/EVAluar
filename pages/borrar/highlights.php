<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('orderdetails');
    $xcrud->highlight('quantityOrdered', '<', 25, 'red');
    $xcrud->highlight('quantityOrdered', '>=', 25, 'yellow');
    $xcrud->highlight('quantityOrdered', '>', 40, '#8DED79');
    $xcrud->highlight_row('quantityOrdered', '>=', 50, '#8DED79');
    $xcrud->highlight('priceEach', '>', 100, '#9ADAFF');
	
	//$xcrud->modal('quantityOrdered');
	//$xcrud->modal('quantityOrdered', 'fa fa-user');
	
	$xcrud->modal(array('quantityOrdered'=>'glyphicon glyphicon-search'));
	//$xcrud->modal(array('quantityOrdered'=>'fa fa-user'));
    echo $xcrud->render();
?>