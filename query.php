<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$college = $_POST['college'];
$grade = $_POST['grade'];
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
$sql = "INSERT INTO `entryform` (`Firstname`, `Lastname`, `Email`, `Phone`, `Age`, `College`, `Qualification`, `dt`
VALUES ('$firstname', '$lastname ', '$email', '$phone', '$age', '$college', '$grade', 'current_timestamp())";
if($result)
{
    echo'<div class="alert alert-success" role="alert">
    entry has been submitted
    </div>';
}
else{
    echo "the table was not created ". 
    mysqli_error($conn);
}
}
?>


