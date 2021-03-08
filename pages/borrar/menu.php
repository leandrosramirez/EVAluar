
<?php

    $counter = 0;
	foreach($pagedata as $val=>$x){
	$counter++;
?>		
	<li class="">	
		
	<a href="#dashboard<?php echo $counter; ?>" title="Reports" data-toggle="collapse" class="<?php echo $level1 != $val ? 'collapsed' : '' ?>" aria-expanded="<?php echo $level1 != $val ? 'false' : 'true' ?>">
				<em class="icon-folder"></em>		
				<span data-localize="sidebar.nav.DASHBOARD106"><?php  echo $val; ?></span>
				<em class="fa fa-chevron-down expand"></em>
   </a>	
		
	<?php	
	//echo $level1 . "<br>";
	//echo $val . "<br>";
	//echo $level1 != $val ? 'collapse' : 'collapse in';
	
	?>
	<ul style="margin-left: 7px;" id="dashboard<?php echo $counter; ?>" class="nav sidebar-subnav level3-menu <?php echo $level1 != $val ? 'collapse' : 'collapse in' ?>" aria-expanded="<?php echo $level1 != $val ? 'false' : 'true' ?>" style="">

<?php
		foreach($x as $pk=>$pd){
			
			$title_1 = $pd['title_1']; 
			$filename = $pd['filename'];   
?> 
    <li class="<?php echo $level2 == $title_1 ? 'active' : '' ?>"><a style="padding-left: 10px;" href="index.php?level1=<?php echo $val ?>&level2=<?php echo $title_1; ?>" title="<?php echo $title_1; ?>"> 
      <em class="icon-note"></em> <?php echo $title_1; ?> </a>
	</li>
<?php

		}
?>		
	</ul>
	</li>
		
<?php		
			   
	}
?>