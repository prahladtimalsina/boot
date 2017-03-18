<?php
$con=new mysqli('localhost', 'root', '', 'softrica');
$id=$_GET['id'];
$query="select * from dbl_user where id='$id'";
$result=$con->query($query);
$data=$result->fetch_array();
?>
<!DOCTYPE >

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<html>
<head>
	<title>My Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
	.pp{
		padding-top: 20px;
		background-color: skyblue
	}

</style>
</head>
<body style="background-color: lightgreen">

	<div class="container pp " >
	<form method="POST" action="update_action.php">

  			<input type="hidden"   name="id" value="<?php echo $data['id'];?>">
	



		<div class="form-group  ">
  			<label for="usr">Name:</label>
  			<input type="text" class="form-control" id="usr" name="username" value="<?php echo $data['username'];?>">
		</div>

		<div class="form-group ">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" name="password" value="<?php echo $data['password'];?>">
		</div>
		<div class="form-group ">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'];?>" >
		</div>

		<div class="form-group ">
			  <label for="age">Age:</label>
			  <input type="text" class="form-control" id="age" name="age" value="<?php echo $data['age'];?>">
		</div>


		<div class="button">
		<button class="btn btn-danger" type="submit" name="Update">Update</button>
		
		</div>
		</form>


	</div>

</body>
</html>