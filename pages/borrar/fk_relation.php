<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->columns('customerNumber,Customer orders,city');
    $xcrud->fk_relation('Customer orders','customerNumber','customers_orders_fk','customer_id','order_id','orders','orderNumber',array('orderNumber','orderDate'));
    echo $xcrud->render();
?>