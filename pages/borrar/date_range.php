<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('orders');
    $xcrud->fields('orderDate,requiredDate');
    $xcrud->change_type('orderDate', 'date', '', array('range_end' => 'requiredDate', 'placeholder' => 'Date from...'));
    $xcrud->change_type('requiredDate', 'date', '', array('range_start' => 'orderDate', 'placeholder' => 'Date to...'));
    echo $xcrud->render('create');
?>