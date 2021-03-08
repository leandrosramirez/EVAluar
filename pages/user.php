<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php //$claims->insertHeader(); ?>

</head>
<body>

<?php
    $user = Xcrud::get_instance();
    $user->table('user');
    $user->fields('username,email,password');	
	$user->fields('email,username,password,active', false, 'Login Credentials');
    $user->fields('firstname,lastname,othername,national_id,date_of_birth,mobile', false, 'Personal Details');

	$user->label ("email","Email" );
	$user->label ("firstname","FIrst name" );
	$user->label ("lastname","Last name" );
	$user->label ("othername","Other name" );
	$user->label ("national_id","National ID" );
	$user->label ("date_of_birth","Date of Birth" );
	$user->label ("mobile","Mobile No" );
	
	$user->columns('email,firstname,lastname,username');
	
	//$xcrud->readonly('username,password');
	
	$user->change_type('password', 'password', '', 32);
	$user->change_type('active', 'select', '', array('Yes'=>'Yes','No'=>'No'));
	
	$user->before_update('hash_password'); // automatic call of functions.php
	$user->before_insert('hash_password'); // automatic call of functions.php
	$user->change_type('password', 'password', '', 32);	
		
	$user_roles = $user->nested_table('User Roles','user_id','sys_user_roles','user_id'); // nested table
    $user_roles->table_name('User Roles');
    $user_roles->fields('user_id,sys_roles_id');   
    //Labels
    $user_roles->label('user_id','User');
	$user_roles->label('sys_roles_id','Role');
	$user_roles->relation('sys_roles_id','sys_roles','sys_roles_id','roles_name'); 
	$user_roles->relation('user_id','user','user_id','email'); 

	$user_roles->limit(20);
	
	//$user->unset_edit(true,'username','=','admin');       

	//$user->unset_edit();
	//$user->unset_add();
	//$user->unset_remove();
	
    echo $user->render();
?>
<script type="text/javascript">
/*jQuery(document).on("xcrudafterrequest",function(event,container){
    if(Xcrud.current_task == 'save')
    {
        Xcrud.show_message(container,'updated successfully','success');
    }
});*/
</script>

</body>
</html>