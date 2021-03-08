<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('consultation');
    $xcrud->relation('office','offices','officeCode','city');
    $xcrud->relation('manager','employees','employeeNumber',array('firstName','lastName'),'','','',' ','','officeCode','office');
    
    $xcrud->relation('country','meta_location','id','local_name','type = \'CO\'');
    $xcrud->relation('region','meta_location','id','local_name','type = \'RE\'','','','','','in_location','country');
    $xcrud->relation('city','meta_location','id','local_name','type = \'CI\'','','','','','in_location','region');
    
    echo $xcrud->render('create');
?>