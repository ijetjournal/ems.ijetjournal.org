<?php

if($_FILES["file1"]["name"]!= ""){
	
	$from_email         = $_POST['email']; //from mail, it is mandatory with some hosts
    $recipient_email    = 'editorijetjournal@gmail.com'; //recipient email (most cases it is your personal email)
    
    //Capture POST data from HTML form and Sanitize them, 
    $sender_name    =$_POST['email'];
    $reply_to_email ='editorijetjournal@gmail.com';
    $subject        ='conference Form';
    $message        ='editorijetjournal@gmail.com';
	
    
    /* //don't forget to validate empty fields 
    if(strlen($sender_name)<1){
        die('Name is too short or empty!');
    } 
    */
    
    //Get uploaded file data
    $file_tmp_name    = $_FILES['file1']['tmp_name'];
    $file_name        = $_FILES['file1']['name'];
    $file_size        = $_FILES['file1']['size'];
    $file_type        = $_FILES['file1']['type'];
    $file_error       = $_FILES['file1']['error'];

    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
	//read from the uploaded file & base64_encode content for the mail
	$handle = fopen($file_tmp_name, "r");
	$content = fread($handle, $file_size);
	fclose($handle);
	$encoded_content = chunk_split(base64_encode($content));

	$boundary = md5("sanwebe");
	//header
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "From:".$from_email."\r\n"; 
	$headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 

	//plain text 
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 

	$message1="Correspondence Name * : ".strip_tags($_POST['correspondenceName'])."\r\n";
	$message1.="Organized by (Department) : ".strip_tags($_POST['department'])." \r\n";
	$message1.="Email   : ".strip_tags($_POST['email'])." \r\n";
	$message1.="Name of Conference   : ".strip_tags($_POST['conference'])." \r\n";
	
	$message1.="contact Number   : ".strip_tags($_POST['phoneNumber'])." \r\n";
	$message1.="College / Institute Website : ".strip_tags($_POST['institute'])." \r\n";
	$message1.="University / College Name  : ".strip_tags($_POST['university'])." \r\n";
	$message1.="Full Address : ".strip_tags($_POST['fullAddress'])." \r\n";
	
	$Landmark = $_POST['Landmark'];
		if (($Landmark) != '') {
			$message1 .= "Conference Website (if any) :" . strip_tags($_POST['Landmark']) ." \r\n";
	}
	
		
	$date1 = $_POST['date1'];
		if (($date1) != '') {
			$message .= "<tr><td><strong>Conference Date </strong> </td><td>" . strip_tags($_POST['date1']) . "</td></tr>";
	}
	
	
	$body .= chunk_split(base64_encode($message1)); 


	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $file_type; name=".$file_name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
	$body .= $encoded_content; 
    
    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail)  {       
		  header('Location:conference.php?status=1');
	} else {
		  header('Location:conference.php?status=0');
	}

		
	
} else {	
   
		$to = "editorijetjournal@gmail.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$subject = "Form submission";
	
	
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "From:".$from."\r\n"; 
	
		$message = '<html><body>';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background:#eee;'><td><strong>Correspondence Name:</strong></td><td>".strip_tags($_POST['correspondenceName'])."</td></tr>";
		$message .= "<tr><td><strong>Organized by (Department):</strong> </td><td>" . strip_tags($_POST['department']) . "</td></tr>";
		$message .= "<tr><td><strong>Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
		$message .= "<tr><td><strong>Name of Conference </strong> </td><td>" . strip_tags($_POST['conference']) . "</td></tr>";
		$message .= "<tr><td><strong>contact Number </strong> </td><td>" . strip_tags($_POST['phoneNumber']) . "</td></tr>";
		$message .= "<tr><td><strong>College / Institute Website</strong> </td><td>" . htmlentities($_POST['institute']) . "</td></tr>";
		$message .= "<tr><td><strong>University / College Name </strong> </td><td>" . strip_tags($_POST['university']) . "</td></tr>";
		$message .= "<tr><td><strong>Full Address</strong> </td><td>" . htmlentities($_POST['fullAddress']) . "</td></tr>";
		

		
		$Landmark = $_POST['Landmark'];
		if (($Landmark) != '') {
			$message .= "<tr><td><strong>Conference Website (if any) </strong> </td><td>" . strip_tags($_POST['Landmark']) . "</td></tr>";
		}
	
		
		$date1 = $_POST['date1'];
		if (($date1) != '') {
			$message .= "<tr><td><strong>Conference Date </strong> </td><td>" . strip_tags($_POST['date1']) . "</td></tr>";
		}
	
	
		$message .= "</table>";
		$message .= "</body></html>";
	
	
		if (mail( $to, $subject, $message, $headers)) {
		  header('Location:conference.php?status=1');
		} else {
		  header('Location:conference.php?status=0');
		}
}


?>
