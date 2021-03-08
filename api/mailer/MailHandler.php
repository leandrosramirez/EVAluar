<?php
    require_once('class.phpmailer.php');
    include("class.smtp.php");


	
	
	/*
	 * 
	 * 
	 * $mail_host = "mail.itechsolutions.co.ke";
	$mail_user = "patrick@itechsolutions.co.ke";
    $mail_pass = "itech@2018";
	$mail_port = "587";
	$mailSMTPSecure = "tls";
	 * 
	 * define("HOST","$mail_host");
	define("SMTPAUTH",true);
	define("USERNAME","$mail_user");
	define("PASSWORD","$mail_pass");
	define("PORT","$mail_port");
	define("SMTPSECURE","$mailSMTPSecure");*/
	
	define('HOST',"mail.briskbusiness.co.ke");
	define("SMTPAUTH",true);
	define('USERNAME',"info@briskbusiness.co.ke");
	define('PASSWORD',"kirwa@1400");
	//define('MAILORGANIZATION',"KEPHIS");
	define('PORT',587);
	define("SMTPSECURE","tls");
	
	function get_include_contents($filename, $variablesToMakeLocal) {
        extract($variablesToMakeLocal);           
        ob_start();
        include $filename;
        return ob_get_clean();            
        return false;
    }
	
	function initializeMailer($email){
	      $mail = new PHPMailer();
	      //$mail->SetLanguage()
	      $mail->SetLanguage("en", 'Mailer/language/');
	      //$mail->SetLanguage("en", '../Mailer/language/');
	      /*$mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
          );*/
          
	      //echo USERNAME;      
          $mail->IsSMTP();
          
          $mail->Host       = HOST;
          $mail->SMTPAuth   = TRUE;
		  $mail->SMTPSecure = SMTPSECURE;
		  $mail->Port       = PORT; 
		  $mail->verify_peer = false; 
		  $mail->verify_peer_name = false; 
		  $mail->allow_self_signed = true;  
          $mail->Username   = USERNAME;
          $mail->Password   = PASSWORD;
          $mail->From       = USERNAME;
          $mail->FromName   = "KEPHIS ICES";
		  $mail->isHTML(true);
		  //$mail->AddCC("info@briskbusiness.com");
          
          
          $emails = explode(",", $email);
          foreach($emails as $singleEmail){
          	$mail->AddAddress("$singleEmail","Registration");
          }
		  
          $mail->WordWrap   = 50;
          $mail->IsHTML(true);
         // $mail->Subject = $subject;
         // $mail->Body    = $message;
         //$mail->AltBody = strip_tags("Message:");
	     return $mail;
	}
	
	function updateOnPoCRequests(){
	   
       $fetchSQL = "SELECT pocid,name,phone,email,country,institution,orgtype,studentstotal,stafftotal,programstotal,coursetotal FROM poc_request WHERE isadminupdated='N'";
	   $result = mysql_query($fetchSQL);
	   
	    while ($row = mysql_fetch_array($result)) {

           //$row already an array
		   $message = get_include_contents('poc_templ.php',$row); 
		   $mail = initializeMailer();
		   $mail->Subject = "PoC Request: #".$row[0];
           $mail->Body    = $message;
		   
		   if($mail->Send()){ 

		   	$updateSQL="UPDATE poc_request SET isadminupdated='Y' where pocid=".$row[0];
			$result_= mysql_query($updateSQL);
		   
		   }
	   
        }
        
        mysql_free_result($result);	   
	}
	
	
	function updateOnPartnerApplication(){
		 $fetchSQL = "SELECT id,partnertype,region,name,jobtitle,organization,email,website,country,city,streetaddress,fax,businesstype,yearstart,employees,technicalteam,technicalsupport,message FROM partner_application WHERE isadminupdated='N'";
	     $result = mysql_query($fetchSQL);
	   
	    while ($row = mysql_fetch_array($result)) {
           //$row already an array
		   $message = get_include_contents('partner_templ.php',$row); 
		   $mail = initializeMailer();
		   $mail->Subject = "Partner Application: #".$row[0];
           $mail->Body    = $message;
		   if($mail->Send()){ 
		      $updateSQL="UPDATE partner_application SET isadminupdated='Y' where id=".$row[0];
			  $result_ = mysql_query($updateSQL);
		   }
	   
        }
        mysql_free_result($result);	
    
	}
	
	function sendMail($header,$email,$content){
	
		$mail = initializeMailer($email);
		$mail->Subject = $header;
		$mail->Body    = $content;
	
		if($mail->Send()){
			
			//echo "Mail " . $email . " sent successfully<br>";
			//$updateSQL="UPDATE contactus SET isadminupdated='Y' where contactusid=".$row[0];
			//$result_ = mysql_query($updateSQL);3w	
		} else {
			
			//echo "Mail " . $email . " Not sent successfully<br>";
 		}
	
	}
	
	function sendActivationMail($email,$content){
		
		$mail = initializeMailer($email);
		$mail->Subject = "Activate Account";
		$mail->Body    = $content;
		
		if($mail->Send()){
			
			
			//$updateSQL="UPDATE contactus SET isadminupdated='Y' where contactusid=".$row[0];
			//$result_ = mysql_query($updateSQL);
		}
		
	}
	
	function updateOnGenContact(){
		 $fetchSQL = "SELECT contactusid,name,jobtitle,organization,phone,email,website,country,hearabtus,message FROM contactus WHERE isadminupdated='N'";
	   $result = mysql_query($fetchSQL);
	   
	    while ($row = mysql_fetch_array($result)) {
           //$row already an array
		   $message = get_include_contents('contact_templ.php',$row); 
		   $mail = initializeMailer();
		   $mail->Subject = "General Contact: #".$row[0];
           $mail->Body    = $message;
		   if($mail->Send()){ 
		      $updateSQL="UPDATE contactus SET isadminupdated='Y' where contactusid=".$row[0];
			  $result_ = mysql_query($updateSQL);
		   }
	   
        }
        mysql_free_result($result);	
	
	}
	
	
	function updateOnDownloads(){
		 $fetchSQL = "SELECT id,name,jobtitle,organization,phone,email,heardus,type,version FROM downloads WHERE isadminupdated='N'";
	   $result = mysql_query($fetchSQL);
	   
	    while ($row = mysql_fetch_array($result)) {
           //$row already an array
		   $message = get_include_contents('download_templ.php',$row); 
		   $mail = initializeMailer();
		   $mail->Subject = "Academia Server Download: #".$row[0];
           $mail->Body    = $message;
		   if($mail->Send()){ 
		      $updateSQL="UPDATE downloads SET isadminupdated='Y' where id=".$row[0];
			  $result_ = mysql_query($updateSQL);
		   }
	   
        }
        mysql_free_result($result);	
	
	}
	
?>