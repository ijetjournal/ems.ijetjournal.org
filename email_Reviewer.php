<?php
$to = "editorijetjournal@gmail.com";

$todayis = date("l, F j, Y, g:i a") ;

$subject= "Request For  Registration";


$gender=$_POST['gender'];
$name=$_POST['fullName'];
$branch=$_POST['branch'];
$Username=$_POST['userName'];
$password=$_POST['password'];
$mob = $_POST['mobileNumber'];
$mobile=$_POST['phoneNumber'];
$qualification=$_POST['qualification'];
$company=$_POST['company'];
$designation=$_POST['designation'];
$academicYear=$_POST['academicYear'];
$dob=$_POST['day1']."-".$_POST['dayMonth']."-".$_POST['dayYear'];
$state=$_POST['state'];
$country=$_POST['country'];
$postalAddress=$_POST['postalAddress'];
$specialization=$_POST['specialization'];



$message = "
Date ----------------- $todayis
Gender --------------- $gender
Full Name ------------ $name
Branch --------------- $branch
Username(Email-ID) --- $Username
Password ------------- $password
Phone Number --------- $mob
Mobile Number -------- $mobile
Qualification -------- $qualification
Affiliation ---------- $company
Designation ---------- $designation
Total Academic  ------ $academicYear
Date Of Birth  ------- $dob
State ---------------- $state
Country -------------- $country
Postal Address ------- $postalAddress
Specialization ------- $specialization";




  $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
         $headers = "From: $email\r\n" .
         "MIME-Version: 1.0\r\n" .
            "Content-Type: multipart/mixed;\r\n" .
            " boundary=\"{$mime_boundary}\"";
         $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";
         foreach($_FILES as $userfile)
         {
            $tmp_name = $userfile['tmp_name'];
            $type = $userfile['type'];
            $name = $userfile['name'];
            $size = $userfile['size'];
            if (file_exists($tmp_name))
            {
               if(is_uploaded_file($tmp_name))
               {
                  $file = fopen($tmp_name,'rb');
                  $data = fread($file,filesize($tmp_name));
                  fclose($file);
                  $data = chunk_split(base64_encode($data));
               }
               $message .= "--{$mime_boundary}\n" .
                  "Content-Type: {$type};\n" .
                  " name=\"{$name}\"\n" .
                  "Content-Disposition: attachment;\n" .
                  " filename=\"{$fileatt_name}\"\n" .
                  "Content-Transfer-Encoding: base64\n\n" .
               $data . "\n\n";
            }
         }
         $message.="--{$mime_boundary}--\n";
if (mail($to, $subject, $message, $headers))
   header('Location:Reviewer.php?status=1');
else
   header('Location:Reviewer.php?status=0');
?>