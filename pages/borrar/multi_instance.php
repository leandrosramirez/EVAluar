<?php
	$xcrud1 = Xcrud::get_instance();
    $xcrud1->table('orders');
    echo $xcrud1->render();
    
    $xcrud2 = Xcrud::get_instance();
    $xcrud2->table('payments');
    echo $xcrud2->render();
?>