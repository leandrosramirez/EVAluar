<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('offices');
    $xcrud->buttons_position('left'); // can be left, right or none
    echo $xcrud->render();
?>