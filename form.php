<?php
include 'conn.php';
if(isset($_POST['done']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];	
$q="INSERT INTO `phpcrud`(`username`,`password`) VALUES ('$name','$pass')";
$query=mysqli_query($conn,$q);
header('location:display.php');	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-6 m-auto">
	<form method="post">
		<br><div class="card">
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Insert operation</h1>
			</div>
			<label>Username</label>
			<input type="text" name="name" class="form-control"><br>
			<label>Password</label>
			<input type="Password" name="pass" class="form-control"><br>
			<button class="btn btn-success" type="submit" name="done">Submit</button><br>
		</div>
		
	</form>
	
</div>
</body>
</html>