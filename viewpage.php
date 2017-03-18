<?php
$con=new mysqli('localhost', 'root', '', 'softrica');


$query="select * from dbl_user";
$result=$con->query($query);
 //table bhako run garxa..
?>
<table  style="background-color: grey;" border='1'>


<?php 
while($data=$result->fetch_array())
{
	

?>
<tr>
<td><?php echo $data['username']; ?></td>
<td><?php echo $data['password']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['age']; ?></td>
<td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td><!--yo bhaneko database bta id taneko url lai tann ne method bhaneko get method;-->
<td><a  href="update.php?id=<?php echo $data['id'];?>">Update</a></td>
</tr>



<?php

}



?>


</table>