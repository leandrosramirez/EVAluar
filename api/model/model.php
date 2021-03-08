<?php
class Model{

    private $_db;

    function __construct($db){
    	//parent::__construct();
    	$this->_db = $db;
    }
	
	public function test(){
		return "success!";
	}

	public function loadMenu($role) {

		// /echo "Test";		
		$menu_name = "";
		
		$url = "";
		$icon = "";
		$parentid = 2;
		
		if($parentid>0){

			$roles_id = $parentid;
		
		}
		$a = array();	
		$stmt = $this->_db->prepare( "SELECT * from sys_menu where roles_id = $role and parent_id is null and isactive = 1 order by sequence asc" );
		//echo "SELECT * from sys_menu where roles_id = $role and parent_id is null and isactive = 1 order by sequence asc";
		
	    $stmt->execute();
        $rows_level1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($rows_level1);
		$menuLevel1 = array ();
		$menuHTML = "";
		
		$level1Menu = array();
		
		// level 1
		$cntParent = 0;
		foreach ( $rows_level1 as $rows_level1_content ) {//1st
		    
            $cntParent++;
		    
		    $sys_menu_id = $rows_level1_content ['sys_menu_id'];
			$menu_name = $rows_level1_content ['menu_name'];
		    if($cntParent==1){
		    	$_SESSION['default_level1_name']= $menu_name;
		    }
            //echo "BBBBB" . $sys_menu_id;
            
			$menuHTML .= "<li class='nav-heading '>
			<span>$menu_name</span>
			</li>";		
			//echo "SELECT * from sys_menu where parent_id = '$sys_menu_id' and roles_id = $roles_id";			
			//$rows_level2 = q ( "SELECT * from sys_menu where parent_id = '$sys_menu_id' and roles_id = $roles_id" );			
			//echo "SELECT * from sys_menu where parent_id = '$sys_menu_id' and isactive = 1 order by sequence asc";
			$stmt2 = $this->_db->prepare( "SELECT * from sys_menu where parent_id = '$sys_menu_id' and isactive = 1 order by sequence asc" );
			//echo "SELECT * from sys_menu where parent_id = '$sys_menu_id' and isactive = 1 order by sequence asc";
		    $stmt2->execute();
	        $rows_level2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
			
			// level 2
			$cntLevel = 0;
			
			$level3Menu = array();
			$level2Menu = array();
			
			foreach ( $rows_level2 as $rows_level2_content ) {

                $cntLevel++;			
				$menuLine = array ();
				$menu_name_2 = $rows_level2_content ['menu_name'];
	
			    if($cntLevel==1 && $cntParent==1){
			    	
			    	$_SESSION['default_level2_name']= $menu_name_2;
			    }
								
				$sys_menu_id_2 = $rows_level2_content ['sys_menu_id'];
				$icon = $rows_level2_content ['icon'];
				$parent_id_2 = $rows_level2_content ['parent_id'];
				$url = $rows_level2_content ['url'];

				$menuHTML .= "<li class=' '><a href='#dashboard$sys_menu_id' title='$menu_name_2' data-toggle='collapse'>
				<em class='$icon'></em>		
				<span data-localize='sidebar.nav.DASHBOARD$sys_menu_id'>$menu_name_2</span>
				<em class='fa fa-chevron-down expand'></em>
				</a>
				<ul id='dashboard$sys_menu_id' class='nav sidebar-subnav collapse level3-menu'>
				<li class='sidebar-subnav-header'><span>$menu_name_2</span></li>
				";

				//$rows_level3 = q ( "SELECT * from sys_menu where parent_id = '$sys_menu_id'" );
				$stmt3 = $this->_db->prepare( "SELECT * from sys_menu where parent_id = '$sys_menu_id_2'" );
			    $stmt3->execute($a);
		        $rows_level3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

				// level 2
				foreach ( $rows_level3 as $rows_level3_content ) {

					$menuLine = array ();
					$sys_menu_id = $rows_level3_content ['sys_menu_id'];
					$menu_name_3 = $rows_level3_content ['menu_name'];
					$url = $rows_level3_content ['url'];

					$window_name = "";				
					//echo $sys_menu_id . " - ";
					//echo $menu_name . "-";

					$icon = $rows_level3_content ['icon'];
					$menuHTML .= "<li class=' '>
					<a id='$url' href='javascript:void(0)' title='$menu_name_3' class='mylinks' title='$menu_name_3'>
					<em class='$icon'></em>
					<span>$menu_name_3</span>
					</a>
					</li>";					
					
				}
							
				$tmpArr = array();
			    $level3Menu['title_1'] = $menu_name_2;
				$level3Menu['description'] = $menu_name_2;
				$level3Menu['filename'] = $url;	
				$level2Menu[$menu_name_2] = $level3Menu;
				$menuHTML .= "</ul></li>";
			}

            //echo $menu_name;
            $level1Menu[$menu_name] = $level2Menu;//User management
			//array_push($level1Menu,$level2Menu);
			// $menuHTML .= "</ul></li>";
		}

        return $level1Menu;
		//echo $menuHTML;

	}


}


?>
