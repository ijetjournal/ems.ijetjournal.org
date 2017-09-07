<?php session_start();
if(!empty($_POST)){

    switch($_POST['action']) {
        case 'add':

			$from_email         = $_POST['email']; //from mail, it is mandatory with some hosts
			$recipient_email    = 'editorijetjournal@gmail.com'; //recipient email (most cases it is your personal email)

			//Capture POST data from HTML form and Sanitize them, 
			$sender_name    = $_POST['email'];
			$reply_to_email = 'editorijetjournal@gmail.com';
			$subject        = "Subject";
			$message        = "message";


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

			$message1="UserName : Sasikumar\r\n";
			$message1.="Phone number : 9095777643 \r\n";
			$body .= chunk_split(base64_encode($message1)); 


			//attachment
			$body .= "--$boundary\r\n";
			$body .="Content-Type: $file_type; name=".$file_name."\r\n";
			$body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
			$body .="Content-Transfer-Encoding: base64\r\n";
			$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
			$body .= $encoded_content; 

			$sentMail = @mail($recipient_email, $subject, $body, $headers);

			if($sentMail) {
			header('Location:menuscript.php?status=0');
			} else {
			header('Location:menuscript.php?status=1');
			}

            break;

		
       

    
    }
}




?>