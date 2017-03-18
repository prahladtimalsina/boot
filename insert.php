<?php
$con=new mysqli('localhost', 'root', '', 'softrica');

$uname=$_POST['username'];
$upass=$_POST['password'];
$email=$_POST['email'];
$age=$_POST['age'];

$query="Insert into dbl_user values(Null,'$uname','$upass','$email','$age')";

$result=$con->query($query);