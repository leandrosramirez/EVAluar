<button onclick="Xcrud.reload()">Reload button</button>
<button onclick="Xcrud.show_message('.xcrud-ajax','This is error!','error')">Show error</button>
<button onclick="Xcrud.show_message('.xcrud-ajax','Got it!','success')">Show success</button>
<button onclick="Xcrud.show_message('.xcrud-ajax','Mmm... Maybe you right...','note')">Show note</button>
<button onclick="Xcrud.show_message('.xcrud-ajax','Some information','info')">Show info</button>
<button onclick="Xcrud.request('.xcrud-ajax',Xcrud.list_data('.xcrud-ajax',{task:'edit',primary:128}))">Edit entry #128</button>
<button onclick="Xcrud.modal('My modal','<h1>Hello World!</h1>')">Show modal</button>
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    echo $xcrud->render();
?>
<script type="text/javascript">
jQuery(document).on("xcrudafterrequest",function(event,container){
    if(Xcrud.current_task == 'save')
    {
        Xcrud.show_message(container,'WOW!','success');
    }
});
</script>