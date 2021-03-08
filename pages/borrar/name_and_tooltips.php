<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('payments');
    $xcrud->table_name('This is table name!','And this is table tooltip... And tested chars: ö,ü,ß');
    $xcrud->field_tooltip('checkNumber', 'Wow, check number? Really?');
    $xcrud->column_tooltip('customerNumber', 'Yeah! Column tooltip!');
    echo $xcrud->render();
?>