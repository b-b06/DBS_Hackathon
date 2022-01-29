<?php

$con = mysqli_connect('localhost', 'root', '','customer');

$name = $_POST['name'];
$userName = $_POST['userName'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];


$sql = "INSERT INTO `sign_up` (`name`, `userName`, `pwd`, `email`) VALUES ('0', '$name', '$userName', '$pwd', '$email')";

$rs = $con->query($sql);
if($rs)
{
	echo "Contact Records Inserted";
}
else{

    echo "Error connecting to databse!";
  }
?>
