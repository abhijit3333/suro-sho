<?php

$sever ="localhost";
$username ="root";
$password ="";
$dbname ="save";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}


// start



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$password = $_POST['password'];

$sql = "INSERT INTO `register`(`name`, `email`, `phone`, `city`, `password`) VALUES ('$name','$email','$phone','$city','$password')
";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submit";
}

else 
{
    echo "query faild.....!";
}

?>