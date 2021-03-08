<?php
//define("BASE_URL", "D:/dev/xampp/htdocs/cieni/courtesycar/"); //always include trailing /
//define("SITE_URL", "http://localhost/cieni/courtesycar/"); //always include trailing /
/*
require BASE_URL . 'pages/preheader.php';
require BASE_URL . 'pages/ajaxCRUD.class.php'; 
include BASE_URL . 'vendor/xcrud/xcrud.valuations.php';
// $claims = new ajaxCRUD("claims", "claims", "claims_id", "../");*/
?>
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
	$user->table_name('Registration Details/Profile');
    
    $user->fields('username,email');
	
	$user->fields('firstname,lastname,othername,national_id', false, 'Personal Details');
	
	//$xcrud->validation_pattern(array('name' => 'alpha', 'email' => 'email'));
	//$user->validation_pattern('ui','[a-zA-Z]{3,14}');
	//$user->validation_pattern('ui','7(?:\.0)?');
	//$user->validation_pattern('ui','[1-9](?:\.[0-9])?');
	//$user->validation_pattern('ui','^(?:7(?:\.0)?|[1-6](?:\.[0-9])?|0?\.[1-9])$');
	
	$user->fields('kraPIN,buildingName,companyEmail,companyName,companyRegistrationNo,registrationDate,companyTypeID', false, 'Company Details Details');
	$user->fields('streetName,countyid,subcountyID,ward,telephone', false, 'Company Details Details');
	$user->fields('email,username,active', false, 'Login Credentials');
    $user->readonly('email,username,password,active,firstname,lastname,othername,national_id,date_of_birth,mobile,kraPIN,buildingName,companyEmail,companyName,companyRegistrationNo,registrationDate,companyTypeID,streetName,countyid,subcountyID,ward,telephone');
	//$roles = $user->nested_table('Roles','user_id','role','user_id');
	
	$user->label ("kraPIN","KRA PIN" );
	$user->label ("buildingName","Building Name" );
	$user->label ("companyEmail","Company Email" );
	$user->label ("companyName","Company Name" );
	$user->label ("companyRegistrationNo","Company Registration No" );
	$user->label ("registrationDate","Registration Date" );
	$user->label ("companyTypeID","Company Type" );
	
	$user->search_columns('firstname,lastname,othername','streetName');
	$user->change_type('companyTypeID', 'select', '', array('1000001'=>'Private Firm','1000002'=>'Partnerships','1000003'=>'Co-operative society','1000004'=>'Public Company','1000005'=>'Parastatal'));
	
	$user->label ("streetName","Street Name" );
	$user->label ("countyid","County" );
	$user->label ("subcountyID","Subcounty" );
	$user->label ("telephone","Telephone" );
	$user->label ("ward","Ward" );
	
	$user->label ("email","Email" );
	$user->label ("firstname","FIrst name" );
	$user->label ("lastname","Last name" );
	$user->label ("othername","Other name" );
	$user->label ("national_id","National ID" );
	$user->label ("date_of_birth","Date of Birth" );
	$user->label ("isDriver","Is Driver" );
	$user->label ("mobile","Mobile No" );
	
	$user->columns('email,firstname,lastname,username');
	$user->change_type('password', 'password', '', 32);
	$user->change_type('active', 'select', '', array('Yes'=>'Yes','No'=>'No'));
	
	$user->before_update('hash_password'); // automatic call of functions.php
	$user->before_insert('hash_password'); // automatic call of functions.php
	$user->unset_remove(); 
	$user->unset_view(); 
	$user->relation('countyid','county','county_id','county_name'); 
	$user->relation('subcountyID','subcounty','subcounty_id','subcounty_name'); 
		
	$user_roles = $user->nested_table('User Roles','user_id','sys_user_roles','user_id'); // nested table
    $user_roles->table_name('User Roles');
    $user_roles->fields('user_id,sys_roles_id');   
    //Labels
    $user_roles->label('user_id','User');
	$user_roles->label('sys_roles_id','Role');
	$user_roles->relation('sys_roles_id','sys_roles','sys_roles_id','roles_name'); 
	$user_roles->relation('user_id','user','user_id','email');  
	  
	$user_roles->unset_edit();   
	$user_roles->unset_add(); 
	$user_roles->unset_remove(); 
	$user_roles->unset_view(); 
	///$user_roles->unset_list();   
    //$user->label("firstname", "First Name");
    
	//$user->label("isvaluation_assessment_manager", "Valuation Manager");
	$user_id = $_SESSION['user_id'];
	//echo ">>>" . $user_id;
	
	if(isset($_SESSION['user_id'])){
		//echo $user->render('edit', $_SESSION['user_id']); 
		$user->where('user_id =', $user_id);
	}else{
		echo "session lost. Logout and Login again";
	}
    
    
    //
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