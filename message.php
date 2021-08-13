<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = $_POST['email'];
$desc = $_POST['desc'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername,$username,$password,$database);
/* if(!$conn)
{
die("sorry we fail". mysqli_connect_error());
}
else
{
    echo "connection was successful <br>";
}*/
//SUBMIT TO THE DATABSE
$sql = "INSERT INTO `message` (`email`, `message`, `dt`) 
VALUES ('$email', '$desc', current_timestamp());";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo'<div class="alert alert-success" role="alert">
    Your Query has been submitted.
    </div>';
}
else{
    echo "the table was not created ". 
    mysqli_error($conn);
}
}
?>