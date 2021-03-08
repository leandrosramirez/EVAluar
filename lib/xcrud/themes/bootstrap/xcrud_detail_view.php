<?php echo $this->render_table_name($mode); ?>
<div class="xcrud-top-actions btn-group">
    <?php 
    echo $this->render_button('save_return','save','list','btn btn-primary','','create,edit');
    echo $this->render_button('save_new','save','create','btn btn btn-light','','create,edit');
    echo $this->render_button('save_edit','save','edit','btn btn-light','','create,edit');
    echo $this->render_button('return','list','','btn btn-warning'); ?>
</div>
<form data-parsley-validate='' class="parsley-form">
<div class="xcrud-view">
<?php echo $mode == 'view' ? $this->render_fields_list($mode,array('tag'=>'table','class'=>'table')) : $this->render_fields_list($mode,'div','div','label','div'); ?>
</div>
</form>
<div class="xcrud-nav form-inline">
    <?php echo $this->render_benchmark(); ?>
</div>
<?php
if($this->parsley_active){
	include("xcrud_parsley.php");
}
?>
