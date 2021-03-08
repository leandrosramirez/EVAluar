<?php
	$xcrud1 = Xcrud::get_instance();
    $xcrud1->table('productlines');
    $xcrud1->columns('productLine,htmlDescription');
    $xcrud1->unset_edit()->unset_view();
    $xcrud1->hide_button('add');
    echo $xcrud1->render();
    
    $xcrud2 = Xcrud::get_instance();
    $xcrud2->table('productlines');
    $xcrud2->fields('productLine,htmlDescription');
    $xcrud2->hide_button('save_return,return,save_edit');
    $xcrud2->set_lang('save_new','Publish');
    echo $xcrud2->render('create');
?>
<script type="text/javascript">
window.onload = function(){
    jQuery(document).on("xcrudafterrequest",function(event,container){
        if(jQuery(container).closest(".xcrud").prevAll(".xcrud").size()){
            Xcrud.reload(".xcrud:first");
        }
    });
}
</script>