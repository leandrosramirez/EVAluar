<?php 
echo $this->render_table_name($mode); 
?>
<div class="xcrud-top-actions btn-group">
   <?php 
 if($this->is_next_previous){
 	 echo "<div class='btn-group' role='group'>";
	 echo $this->render_previous('Previous','edit','','xcrud-button xcrud-green btn btn-light','','edit');
	 echo $this->details_counter();    
	 echo $this->render_next('Next','edit','','xcrud-button xcrud-green btn btn-light','','edit');
     echo "</div><br><br>";  
 }
 ?>
</div>
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
	
	//include("xcrud_parsley.php");
	
}
?>