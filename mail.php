<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//get data from form  

{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$college = $_POST['college'];
$grade = $_POST['grade'];

// $name = $_POST['name'];
// $email= $_POST['email'];
// $message= $_POST['message'];

$to = "shivanigupta4876@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $firstname . "\r\n  Email = " . $email . "\r\n Message =" . $college;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
// header("Location:thankyou.html");
}
?>


thank you for the resgistration
</body>
</html>


