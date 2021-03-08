<?php 



//$xcrud = Xcrud::get_instance();
//$xcrud->query('SELECT * FROM users WHERE age > 25');


$xcrud = Xcrud::get_instance();
$xcrud->query('INSERT INTO gcp2021 (id, db1, db2) VALUES (26, Juan, Perez);');


    //echo $xcrud->render();
?>