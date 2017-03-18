<?php
$con=new mysqli('localhost', 'root', '', 'softrica');
$id=$_GET['id'];
$query="Delete from dbl_user where id='$id'";
$result=$con->query($query);
header("location:viewpage.php");//tei url ma rdirect garxa
?>