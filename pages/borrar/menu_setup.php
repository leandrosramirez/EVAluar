<li class=" "><a href="#setup" title="Setup" data-toggle="collapse"> <em
		class="icon-cup"></em> <span data-localize="sidebar.nav.extra.EXTRA">Setup Data >></span>
</a>
	<ul id="setup" class="nav sidebar-subnav collapse">
		<li class="sidebar-subnav-header"></li>
		<?php
		foreach($pagedata_setup as $pk=>$pd){
			?>
		<li class="<?php echo $page == $pk ? 'active' : '' ?>"><a
			href="index.php?page=<?php echo $pk ?>"
			title="<?php echo $pd['title_1'] ?>"> <em class="icon-note"></em> <?php echo $pd['title_1'] ?>
		</a></li>
		<?php
		}
		?>
	</ul></li>


