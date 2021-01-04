<?php
include 'conn.php';
if(isset($_POST['done']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];	
$q="SELECT * FROM phpcrud";
$query=mysqli_query($conn,$q);	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<h1 class="text-warning text-center">Display data table</h1>
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-center text-white">
					<th>Id</th>
					<th>Username</th>
					<th>Password</th>
                    <th>Edit</th>
					<th>Delete</th>
                </tr>
            <?php
                    include 'conn.php';
                   $q="SELECT * FROM phpcrud";
                   $query=mysqli_query($conn,$q);	
                   while($res=mysqli_fetch_array($query)){

                               
             ?>
             	<tr class="text-center">
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['username'];?></td>
					<td><?php echo $res['password'];?></td>
                    <td><button class="btn-primary btn"><a href="edit.php?id=<?php echo $res['id'];?>"class="text-white">Edit</a></button></td>
					<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>
                </tr>
                
                <?php
                  
                  }
                ?>

			</table>
			 <tr>
                   <td><a href="form.php">Back</a></td>
             </tr>
		</div>
	</div>

</body>
</html>