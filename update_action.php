<?php
$con=new mysqli('localhost', 'root', '', 'softrica');
$id=$_POST['id'];
$uname=$_POST['username'];
$upass=$_POST['password'];
$email=$_POST['email'];
$age=$_POST['age'];




$query="UPDATE `dbl_user` SET  `username` = '$uname', `password` = '$upass' , `email`= '$email', `age`='$age' WHERE `id` = '$id'";
$result=$con->query($query);



header("location:viewpage.php");//tei url ma rdirect garxa
?>