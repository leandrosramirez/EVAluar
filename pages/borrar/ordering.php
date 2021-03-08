<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('offices');
    
    $xcrud->button('#', "Top", 'glyphicon glyphicon-arrow-up icon-arrow-up', 'btn xcrud-action', array(
        'data-action' => 'movetop',
        'data-task' => 'action',
        'data-primary' => '{officeCode}'));
    $xcrud->button('#', "Bottom", 'glyphicon glyphicon-arrow-down icon-arrow-down', 'btn xcrud-action', array(
        'data-action' => 'movebottom',
        'data-task' => 'action',
        'data-primary' => '{officeCode}'));
        
    $xcrud->create_action('movetop', 'movetop');
    $xcrud->create_action('movebottom', 'movebottom');
    
    $xcrud->unset_sortable();
    $xcrud->order_by('ordering');
    $xcrud->columns('city,phone,addressLine1,country');
    
    echo $xcrud->render();
?>