<?php echo $this->render_table_name(); ?>
<?php if ($this->is_create or $this->is_csv or $this->is_print){?>
        <div class="xcrud-top-actions">
            
        <?php      
        if($this->tabulator_active){
        ?>      
            <div class="btn-group pull-right">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Print/Download <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a href="javascript:void(0);" id="print-table">Print Table</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="javascript:void(0);" id="download-csv">Download CSV</a></li>
			    <li><a href="javascript:void(0);" id="download-json">Download JSON</a></li>
			    <li><a href="javascript:void(0);" id="download-xlsx">Download XLSX</a></li>
			    <li><a href="javascript:void(0);" id="download-pdf">Download PDF</a></li>
			    <li><a href="javascript:void(0);" id="download-html">Download HTML</a></li>
			  </ul>
			</div>     
        <?php      
        }else{
        ?>          
            <div class="btn-group pull-right">
                <?php echo $this->print_button('btn btn-default','glyphicon glyphicon-print');
                echo $this->csv_button('btn btn-default','glyphicon glyphicon-file'); ?>
            </div>
        <?php      
        }
        ?>
            
         <?php echo $this->add_button('btn btn-success','glyphicon glyphicon-plus-sign'); ?>       
        <div class="clearfix"></div>
        </div>
        <?php } ?>
        
        <div class="row" style="margin:0!important">
        <div class="xcrud-list-container <?php if($this ->is_edit_side){ echo 'col-sm-7'; } ?>">
        	
        <?php      
        if(!$this->tabulator_active){
        ?>
        	    	
        <table class="xcrud-list table table-striped table-hover table-bordered">
            <thead>
                <?php echo $this->render_grid_head('tr', 'th'); ?>
            </thead>
            <tbody>
                <?php echo $this->render_grid_body('tr', 'td'); ?>
            </tbody>
            <tfoot>
                <?php echo $this->render_grid_footer('tr', 'td'); ?>
            </tfoot>
        </table>
        <?php      
        }else{
        ?>
        
         <table class="xcrud-list-2 table table-striped table-hover table-bordered">
            <thead>
                <?php 
                //echo $this->render_grid_head('tr', 'th'); 
                ?>
            </thead>
         </table>   
         <table class="xcrud-list table table-striped table-hover table-bordered" style="width:100%;">
         
        </table>
        
        <?php $arrRes = $this->render_tabulator_js();
	    
        	$arrRes1 = json_decode($arrRes);        	
        	if(count($arrRes1)>0){
        		$objBody = $arrRes1[1];
	        	$objHeader = $arrRes1[0];
				$oH = json_encode($objHeader); 
        	}else{
        		$objBody = "";
				$objHeader = "";
        	}

			$groupByFields = json_encode($this->tabulator_group_fields);
			$tabulatorProperties = $this->tabulator_main_properties;  

        ?>
         
        <?php  
        
        if($this->tabulator_active){
        	include("xcrud_tabulator.php");
        }

        }
        ?>
        
         </div>
        <?php
        if($this ->is_edit_side){
        	?>
        <div class="col-sm-5 edit_side_panel">
        	
        </div>
        <?php
        }
        ?>	

        </div>
        <div class="xcrud-nav form-inline">
            <?php echo $this->render_limitlist(true); ?>
            <?php echo $this->render_pagination(); ?>
            <?php 
               
		        if(!$this->tabulator_active){
                     echo $this->render_search(); 
				}else{
					 echo $this->render_search_tabulator(); 
				}
            
            ?>
            <?php echo $this->render_benchmark(); ?>
        </div>             
        