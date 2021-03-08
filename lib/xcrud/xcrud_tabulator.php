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
         
        <script>
   
            var table = "";
            var tableData = <?php echo json_encode($objBody); ?>; 
            
            <?php
				   echo $this->tabulator_general_function_js;
			?>
            
			    table = new Tabulator(".xcrud-list", {
					    columns:<?php echo $oH; ?>,	
					    formatterm: function(cell, formatterParams) {
					      console.log("called");	
				          var cellValue = cell.getValue();
				          if (cellValue !== "") {
				            cell.getRow().getElement().css({
				              "background-color": "red"
				            });
				            return cellValue;
				          } else {
				            cell.getRow().getElement().css({
				              "background-color": "transparent"
				            });
				            return cellValue;
				          }
				        },
					    dataLoaded:function(data){ //freeze first row on data load	
					    	
					    						
							<?php 
							  if($this->tabulator_freeze_row != false){
							?>							    
								var rowPos = this.getRows()[<?php echo $this->tabulator_freeze_row; ?>];					
								if(rowPos){
									rowPos.freeze();
								}
						
							<?php 
							 }
							?>
														
							//var e = Xcrud.stringToHTML(data["action"]);
							//table.addColumn({title:"Age", field:"age"}, false, "name");							
						},
					    <?php echo $this->tabulator_main_properties; ?>,
				        rowFormatter: function(row) {
				            var element = row.getElement(),
				                data = row.getData(),
				                width = '10px', //element.element.offsetWidth,
				                rowTable, cellContents;
				                var cells = row.getCells();
				                 	  var elemT = row.getElement(); 
				                 	<?php echo $this->tabulator_row_formatter_js;  ?>
				                 	
				                 	try{
				                 		var e = Xcrud.stringToHTML(data["action"],false);
								      
								      //tabulator-frozen-right
				                      elemT.append(e);				                      
				                      //cells = table.getElementsByTagName('td');	
				                 	}catch(e){
				                 		
				                 	}
								      							
				        }				            
				});
				
				
				try{
					document.getElementById("print-table").addEventListener("click", function(){
				      table.print(false, true);
				   });
				}catch(e){
					
			    }
				
				try{
					///trigger download of data.csv file
					document.getElementById("download-csv").addEventListener("click", function(){
					    table.download("csv", "data.csv");
					});
				}catch(e){
					
				
			    }	
			    
			    try{
					///trigger download of data.csv file
					//trigger download of data.json file
				document.getElementById("download-json").addEventListener("click", function(){
				    table.download("json", "data.json");
				});
				
				}catch(e){
					
				
			    }			   
				
				
				try{
					///trigger download of data.csv file
					//trigger download of data.json file
				    document.getElementById("download-xlsx").addEventListener("click", function(){
				    table.download("xlsx", "data.xlsx", {sheetName:"My Data"});
				});
				
				}catch(e){
					
				
			    }
			    
			    
			    
			    try{
					///trigger download of data.csv file
					//trigger download of data.json file
					document.getElementById("download-json").addEventListener("click", function(){
					    table.download("json", "data.json");
					});
					
				}catch(e){
					//trigger download of data.xlsx file
				
				
				}			
				
				try{
					///tr
				//trigger download of data.pdf file
				document.getElementById("download-pdf").addEventListener("click", function(){
				    table.download("pdf", "data.pdf", {
				        orientation:"portrait", //set page orientation to portrait
				        title:"Example Report", //add title to report
				    });
				})
				
				}catch(e){
				
				
				}
				
                function renderTabulator(){                   	
                    <?php $arrRes = $this->render_tabulator_js();
			        	$arrRes1 = json_decode($arrRes); 
			        	$objBody = $arrRes1[1];
			        	$objHeader = $arrRes1[0];  
						$oH = json_encode($objHeader);  						 	
		        	?>
		        	
		        	tableData = <?php echo json_encode($objBody); ?>;  
		        	console.log(tableData);
			        table.setData(tableData);
				
                }
                
                 $(function() {
		        	try{
		        		table.setData(tableData)
						.then(function(){
						    //run code after table has been successfuly updated
						})
						.catch(function(error){
						    //handle error loading data
						});
		        	}catch(e){
		        		
		        	}        	
				});
        	
        </script>