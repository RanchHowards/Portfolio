<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "GrahamHeinzMcCarthy@mail.com";
$subject = "Mail From website";
$txt ="Name = ";
$headers = "From: noreply@weener.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:about.html");
?>