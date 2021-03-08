<?php


function publish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'1\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}

function hash_password($postdata, $xcrud){
    	
    if (!defined('PASSWORD_BCRYPT')) {
        define('PASSWORD_BCRYPT', 1);
        define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
    }

	if($postdata->get('password')!=""){
		$hashedpassword = password_hash_x($postdata->get('password'), 1);
		//$hashedpassword = "xxxxxxxxxxxxxxxxxxxxx";
		//echo $hashedpassword;
		$postdata->set('password', $hashedpassword);
		//$postdata->set('new_password', $hashedpassword);
	}

}

function password_hash_x($password, $algo, array $options = array()) {
        if (!function_exists('crypt')) {
            trigger_error("Crypt must be loaded for password_hash to function", E_USER_WARNING);
            return null;
        }
        if (!is_string($password)) {
            trigger_error("password_hash(): Password must be a string", E_USER_WARNING);
            return null;
        }
        if (!is_int($algo)) {
            trigger_error("password_hash() expects parameter 2 to be long, " . gettype($algo) . " given", E_USER_WARNING);
            return null;
        }
        switch ($algo) {
            case 1 :
                // Note that this is a C constant, but not exposed to PHP, so we don't define it here.
                $cost = 10;
                if (isset($options['cost'])) {
                    $cost = $options['cost'];
                    if ($cost < 4 || $cost > 31) {
                        trigger_error(sprintf("password_hash(): Invalid bcrypt cost parameter specified: %d", $cost), E_USER_WARNING);
                        return null;
                    }
                }
                // The length of salt to generate
                $raw_salt_len = 16;
                // The length required in the final serialization
                $required_salt_len = 22;
                $hash_format = sprintf("$2y$%02d$", $cost);
                break;
            default :
                trigger_error(sprintf("password_hash(): Unknown password hashing algorithm: %s", $algo), E_USER_WARNING);
                return null;
        }
        if (isset($options['salt'])) {
            switch (gettype($options['salt'])) {
                case 'NULL' :
                case 'boolean' :
                case 'integer' :
                case 'double' :
                case 'string' :
                    $salt = (string)$options['salt'];
                    break;
                case 'object' :
                    if (method_exists($options['salt'], '__tostring')) {
                        $salt = (string)$options['salt'];
                        break;
                    }
                case 'array' :
                case 'resource' :
                default :
                    trigger_error('password_hash(): Non-string salt parameter supplied', E_USER_WARNING);
                    return null;
            }
            if (strlen($salt) < $required_salt_len) {
                trigger_error(sprintf("password_hash(): Provided salt is too short: %d expecting %d", strlen($salt), $required_salt_len), E_USER_WARNING);
                return null;
            } elseif (0 == preg_match('#^[a-zA-Z0-9./]+$#D', $salt)) {
                $salt = str_replace('+', '.', base64_encode($salt));
            }
        } else {
            $salt = str_replace('+', '.', base64_encode(generate_entropy($required_salt_len)));
        }
        $salt = substr($salt, 0, $required_salt_len);

        $hash = $hash_format . $salt;

        $ret = crypt($password, $hash);

        if (!is_string($ret) || strlen($ret) <= 13) {
            return false;
        }

        return $ret;
    }
	
	
	function generate_entropy($bytes){
        $buffer = '';
        $buffer_valid = false;
        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($bytes, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }
        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($bytes);
            if ($buffer) {
                $buffer_valid = true;
            }
        }
        if (!$buffer_valid && is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $bytes) {
                $buffer .= fread($f, $bytes - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $bytes) {
                $buffer_valid = true;
            }
        }
        if (!$buffer_valid || strlen($buffer) < $bytes) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $bytes; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }
        return $buffer;
}

function print_bulk($xcrud){
	
	$db = Xcrud_db::get_instance();
	$selected = $xcrud->get('selected');
	//print_r($selected);
	
	$identifier = $xcrud->get('identifier');
	$cnt = count($selected); 
    $html = "";
   
    $xcrud->set_exception('Phyto Application(s) have been printed', 'You have Printed ' . $cnt . ' Phyto Certificate(s)', 'success');
	
}
function approve_inspection_function_2($xcrud){
	
	if ($xcrud->get('primary'))
	    {
	        $db = Xcrud_db::get_instance();
			$user_id = (int)$xcrud->get('primary');
			
			$query = "insert into sys_user_roles (user_id,sys_roles_id) values ($user_id,48)";
			$db->query($query);
			
			$query = "delete from sys_user_roles where user_id = $user_id and sys_roles_id = 62";
			$db->query($query);
			
			$query = "UPDATE user set status = 6 where user_id = '$user_id'";
			$db->query($query);
			echo "<br><div class='alert alert-success' role='alert'>Application Approved. Owner Notificed</div>";		   
	    }  	
}

function approve_inspection_phyto($xcrud){
	    
	    //echo "<br><div class='alert alert-success' role='alert'>Application Approved</div>";
	    if ($xcrud->get('primary'))
	    {
	        $db = Xcrud_db::get_instance();
			$phyto_id = (int)$xcrud->get('primary');
	    
			$date = new DateTime();
	        //$date->add(new DateInterval($interval));
			$currentDate = $date->format('Y-m-d H:i:s');
	
	        $interval = 'P365D';
			$date->add(new DateInterval($interval));
			$expiryDate = $date->format('Y-m-d H:i:s');
	
			$query = "update consignment_inspections set valid_to = '$expiryDate', valid_from = '$currentDate',inspection_date = '$currentDate',status = 2 where phyto_id = $phyto_id";
			$db->query($query);
			
			$query = "UPDATE phyto set status = 5 where phyto_id = $phyto_id";
			$db->query($query);
			echo "<br><div class='alert alert-success' role='alert'>Application Approved</div>";	
			   
	    }  
}

function reject_inspection_phyto($xcrud){
	    
	    //echo "<br><div class='alert alert-success' role='alert'>Application Approved</div>";
	    if ($xcrud->get('primary'))
	    {
	        $db = Xcrud_db::get_instance();
			$phyto_id = (int)$xcrud->get('primary');
	    
			$date = new DateTime();
	        //$date->add(new DateInterval($interval));
			$currentDate = $date->format('Y-m-d H:i:s');
	
	        $interval = 'P365D';
			$date->add(new DateInterval($interval));
			$expiryDate = $date->format('Y-m-d H:i:s');
				
			$query = "UPDATE phyto set status = 10 where phyto_id = '$phyto_id'";
			$db->query($query);
			echo "<br><div class='alert alert-warning' role='alert'>Application Rejected</div>";	
				   
	    }  
}

function approve_inspection_function($xcrud){
	    
	    //echo "<br><div class='alert alert-success' role='alert'>Application Approved</div>";
	    if ($xcrud->get('primary'))
	    {
	        $db = Xcrud_db::get_instance();
			$user_id = (int)$xcrud->get('primary');
	    
			$date = new DateTime();
	        //$date->add(new DateInterval($interval));
			$currentDate = $date->format('Y-m-d H:i:s');
	
	        $interval = 'P365D';
			$date->add(new DateInterval($interval));
			$expiryDate = $date->format('Y-m-d H:i:s');
				
			$query = "update farm set status = 2 where user_id = $user_id";
			$db->query($query);
			$query = "update farm_inspections set valid_to = '$expiryDate', valid_from = '$currentDate',inspection_date = '$currentDate',status = 2 where farm_id IN (select farm_id from farm where user_id = $user_id)";
			$db->query($query);
			
			$query = "update own_firm_exporters set status = 2 where user_id = $user_id";
			$db->query($query);
			$query = "update own_firm_exporters_inspections set valid_to = '$expiryDate',valid_from = '$currentDate',inspection_date = '$currentDate',status = 2 where own_firm_exporters_id IN (select own_firm_exporters_id from own_firm_exporters where user_id = $user_id)";
			$db->query($query);
			
			$query = "update low_risk_commodities set status = 2 where user_id = $user_id";
			$db->query($query);
			$query = "update low_risk_commodities_inspections set valid_to = '$expiryDate',valid_from = '$currentDate',inspection_date = '$currentDate',status = 2 where low_risk_commodities_inspections_id IN (select low_risk_commodities_id from low_risk_commodities where user_id = $user_id)";
			$db->query($query);
			
			$query = "UPDATE user set status = 5 where user_id = '$user_id'";
			$db->query($query);
			echo "<br><div class='alert alert-success' role='alert'>Application Forwarded to regional manager</div>";		   
	    }  
}

function reject_inspection_function($xcrud){
	    
	    //echo "<br><div class='alert alert-success' role='alert'>Application Approved</div>";
	    if ($xcrud->get('primary'))
	    {
	        $db = Xcrud_db::get_instance();
			$user_id = (int)$xcrud->get('primary');
	    
			$date = new DateTime();
	        //$date->add(new DateInterval($interval));
			$currentDate = $date->format('Y-m-d H:i:s');
	
	        $interval = 'P365D';
			$date->add(new DateInterval($interval));
			$expiryDate = $date->format('Y-m-d H:i:s');

			$query = "UPDATE user set status = 10 where user_id = '$user_id'";
			$db->query($query);
			echo "<br><div class='alert alert-warning' role='alert'>Application Rejected</div>";		   
	    }  
}

function insert_inspections($user_id,$inspection_table,$identifier_id){
	
	$db = Xcrud_db::get_instance();	
	$tableArr = array(4=>'farm_inspections_id',3=>'own_firm_exporters_inspections_id',1=>'low_risk_commodities_inspections_id',2=>'consignment_inspections_id');	
	$tableNameArr = array(4=>'farm_inspections',3=>'own_firm_exporters_inspections',1=>'low_risk_commodities_inspections',2=>'consignment_inspections');
	$tableNameParentArr = array(4=>'farm',3=>'own_firm_exporters',1=>'low_risk_commodities','agents',2=>'phyto');	
	$insp_table = $tableNameArr[$inspection_table];
	$insp_table_id = $tableNameParentArr[$inspection_table] . "_id";
	//echo $insp_table_id;
	//insert into inspections
	$query_ins = "INSERT INTO $insp_table ($insp_table_id,status) value ($identifier_id,1)";
    $db->query($query_ins);
	
	//Get Max Id //this will change
	$id_col = $insp_table . "_id";
	$queryx = "SELECT $id_col from $insp_table order by $id_col desc limit 1";
    $db->query($queryx);
    $resultx = $db->result();
	$lastId = 0;
    foreach ($resultx as $key => $item){
    	$lastId = $item[$id_col];
	}
	
	//loop through all inspections
	$queryx = "SELECT * FROM inspections_line where inspections_header_id = (SELECT inspections_header_id FROM inspections_header where identifier = $inspection_table limit 1)";
	//echo $queryx . "<br>";
	
    $db->query($queryx);
    $resultx = $db->result();

    foreach ($resultx as $key => $item){
    	
		$inspections_line = $item['inspections_line_id'];
		$col_name = $tableArr[$inspection_table];
				
		$query_ins = "INSERT INTO inspections_matrix (inspections_line_id,$col_name) value (" . $inspections_line . "," . $lastId . ")";
        //echo $query_ins . "<br>";
		
        $db->query($query_ins);
			
    }
}

function assign_inspections_for_printing($xcrud)
{
    
	$db = Xcrud_db::get_instance();
	$selected = $xcrud->get('selected');
	//print_r($selected);
	
	$identifier = $xcrud->get('identifier');
	$cnt = count($selected); 

	foreach($selected as $value){
		
		$query = "update phyto set toprint = $identifier WHERE phyto_id IN ($value)";
		$db->query($query);
		//echo $query;
		
	}
   
    $xcrud->set_exception('Phyto Application(s) have been assigned', 'You have Assigned ' . $cnt . ' Phyto Appliction(s)', 'success');

}

function assign_inspections_phyto($xcrud)
{
	
	$db = Xcrud_db::get_instance();
	//print_r($xcrud.selected);
	$selected = $xcrud->get('selected');
	$identifier = $xcrud->get('identifier');
	$cnt = count($selected); 
	
	$insertString = "";
	$count = 0;
	foreach($selected as $value){
		
		$query = "update phyto set status = 4,inspection_by=$identifier  WHERE phyto_id IN ($value)" ;
		$db->query($query);
		
		//create inspection
		$query_elem = "SELECT * FROM phyto where phyto_id = $value";
        $db->query($query_elem);
        $result_elem = $db->result();

        foreach ($result_elem as $key => $item)
        {
             $phyto_id = $item["phyto_id"];
             insert_inspections($value,2,$phyto_id);        
        }
		
	}
   
    $xcrud->set_exception('Phyto Application(s) have been assigned', 'You have Assigned ' . $cnt . ' Phyto Appliction(s)', 'success');
	//$xcrud->set_exception('You have deleted ' . $cnt . ' items', 'error');
}
function assign_inspections($xcrud)
{
	
	$db = Xcrud_db::get_instance();
	//print_r($xcrud.selected);
	$selected = $xcrud->get('selected');
	$identifier = $xcrud->get('identifier');
	$cnt = count($selected); 
	
	$insertString = "";
	$count = 0;
	foreach($selected as $value){
		
		$query = "update user set status = 4,inspection_by=$identifier  WHERE user_id IN ($value)" ;
		$db->query($query);
		
		//loop through producer
		$query_elem = "SELECT * FROM own_firm_exporters where user_id = $value and status = 0";
        $db->query($query_elem);
        $result_elem = $db->result();

        foreach ($result_elem as $key => $item)
        {
             $own_firm_exporters_id = $item["own_firm_exporters_id"];
             insert_inspections($value,3,$own_firm_exporters_id);        
        }
		
		//loop through farms
		$query_elem = "SELECT * FROM farm where user_id = $value and status = 0";
        $db->query($query_elem);
        $result_elem = $db->result();

        foreach ($result_elem as $key => $item)
        {
             $farm_id = $item["farm_id"];
             insert_inspections($value,4,$farm_id);        
        }
		
		//loop through low_risk_comodities
		$query_elem = "SELECT * FROM low_risk_commodities where user_id = $value and status = 0";
        $db->query($query_elem);
        $result_elem = $db->result();

        foreach ($result_elem as $key => $item)
        {
             $low_risk_commodities_id = $item["low_risk_commodities_id"];
             insert_inspections($value,1,$low_risk_commodities_id);        
        }
		
		//loop through consignments inspection
		/*$query_elem = "SELECT * FROM consignment where user_id = $value and status = 0";
        $db->query($query_elem);
        $result_elem = $db->result();

        foreach ($result_elem as $key => $item)
        {
             $producer_id = $item["producer_id"];
             insert_inspections($value,3,$producer_id);        
        }*/
		
	}
   
    $xcrud->set_exception('Registration(s) have been assigned', 'You have Assigned ' . $cnt . ' Registration(s)', 'success');
	//$xcrud->set_exception('You have deleted ' . $cnt . ' items', 'error');
}

function unpublish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'0\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}

function exception_example($postdata, $primary, $xcrud)
{
    // get random field from $postdata
    $postdata_prepared = array_keys($postdata->to_array());
    shuffle($postdata_prepared);
    $random_field = array_shift($postdata_prepared);
    // set error message
    $xcrud->set_exception($random_field, 'This is a test error', 'error');
}

function test_column_callback($value, $fieldname, $primary, $row, $xcrud)
{
    return $value . ' - nice!';
}

function after_upload_example($field, $file_name, $file_path, $params, $xcrud)
{
    $ext = trim(strtolower(strrchr($file_name, '.')), '.');
    if ($ext != 'pdf' && $field == 'uploads.simple_upload')
    {
        unlink($file_path);
        $xcrud->set_exception('simple_upload', 'This is not PDF', 'error');
    }
}

function movetop($xcrud)
{
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `officeCode` FROM `offices` ORDER BY `ordering`,`officeCode`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['officeCode'] == $primary && $key != 0)
            {
                array_splice($result, $key - 1, 0, array($item));
                unset($result[$key + 1]);
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `offices` SET `ordering` = ' . $key . ' WHERE officeCode = ' . $item['officeCode'];
            $db->query($query);
        }
    }
}
function movebottom($xcrud)
{
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `officeCode` FROM `offices` ORDER BY `ordering`,`officeCode`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['officeCode'] == $primary && $key != $count - 1)
            {
                unset($result[$key]);
                array_splice($result, $key + 1, 0, array($item));
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `offices` SET `ordering` = ' . $key . ' WHERE officeCode = ' . $item['officeCode'];
            $db->query($query);
        }
    }
}

function show_description($value, $fieldname, $primary_key, $row, $xcrud)
{
    $result = '';
    if ($value == '1')
    {
        $result = '<i class="fa fa-check" />' . 'OK';
    }
    elseif ($value == '2')
    {
        $result = '<i class="fa fa-circle-o" />' . 'Pending';
    }
    return $result;
}

function custom_field($value, $fieldname, $primary_key, $row, $xcrud)
{
    return '<input type="text" readonly class="xcrud-input" name="' . $xcrud->fieldname_encode($fieldname) . '" value="' . $value .
        '" />';
}
function unset_val($postdata)
{
    $postdata->del('Paid');
}

function format_phone($new_phone)
{
    $new_phone = preg_replace("/[^0-9]/", "", $new_phone);

    if (strlen($new_phone) == 7)
        return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $new_phone);
    elseif (strlen($new_phone) == 10)
        return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $new_phone);
    else
        return $new_phone;
}

function before_list_example($list, $xcrud)
{
    var_dump($list);
}

function after_update_test($pd, $pm, $xc)
{
    $xc->search = 0;
}

/*function after_upload_test($field, &$filename, $file_path, $upload_config, $this)
{
    $filename = 'bla-bla-bla';
}*/

