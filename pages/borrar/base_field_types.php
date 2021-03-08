<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('base_fields');
    $xcrud->no_editor('text_area');
    echo $xcrud->render('create');
?>