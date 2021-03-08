<form data-parsley-validate='' class="parsley-form">
<div class="xcrud-view" >	
<?php echo $this->render_inline_edit_fields_list($mode); ?>
<?php 
if($this->inline_edit_save == "enter_button_only" || $this->inline_edit_save == "button_only") {
	echo $this->render_button('save_return','save','list','xcrud-button xcrud-purple','','create,edit');
}else{
	echo '<p class="xcrud-action" data-task="save"></p>';
}
?>
</div>
</form>
<div class="xcrud-nav">
    <?php echo $this->render_benchmark(); ?>
</div>
<?php
if($this->parsley_active){
	include("xcrud_parsley.php");
}
?>