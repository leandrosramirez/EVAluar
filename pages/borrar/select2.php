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

<link href="../xcrud/plugins/select2-develop/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../xcrud/plugins/select2-develop/dist/js/select2.full.js"></script>
<script type="text/javascript">
$(document).on("xcrudbeforerequest", function(event, container) {
    if (container) {
        $(container).find("select").select2('destroy');
    } else {
        $(".xcrud").find("select").select2('destroy');
    }
});
$(document).on("ready xcrudafterrequest", function(event, container)
 {
    if (container) {
        $(container).find("select").select2();
    } else {
        $(".xcrud").find("select").select2();
    }
});
$(document).on("xcrudbeforedepend", function(event, container, data) {
	console.log(data.name);
	//if (container) {
		console.log(!$.isEmptyObject($(container).find('select[name="' + data.name + '"]')));
		console.log(data.name);
		//if(!$.isEmptyObject($(container).find('select[name="' + data.name + '"]'))){
			 if ($(container).find('select[name="' + data.name + '"]').data('select2')) {
			 	  console.log("select2 item");
			      $(container).find('select[name="' + data.name + '"]').select2('destroy');
			 }	else {
			 	  console.log("Not a select2 ");
			 }				
		//}
   // }
   
});
$(document).on("xcrudafterdepend", function(event, container, data) {
    jQuery(container).find('select[name="' + data.name + '"]').select2();
});
</script>