<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['message'];



if(empty($_POST['fullname'])  || 
   empty($_POST['email']) || 
   empty($_POST['subject']) ||  
   empty($_POST['message']))
{
    $errors .= "\n Error: Compulsory (*) fields are required";
}


$to="kulklex@gmail.com";
$subject= "Contact message from $name porfolio website.";
$message="Hello Hassan, \n\n You have received a new message. ".
	" Here are the details:\n\n Name: $name \n Email: $email \n Number: $subject  \n Message: $comment \n\n Kindly respond as soon as you can. \n\n"; 
$headers="from:Contact@kulklex.com";

if (mail($to, $subject, $message,$headers)) {
	# code...
	echo "mail sent successfully";
}else
{
	echo"can't send mail";
}


    header("Location: http://www.kulklex.com");

?>