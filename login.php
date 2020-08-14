<?php
session_start();
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<div>
	<form method="post" action="" enctype="multipart/form-data" >
		USERNAME: <input type="text" name="USERNAME" value=""><br><br>
		PASSWORD: <input type="PASSWORD" name="PASSWORD" value=""><br><br>
		<input type="Submit" name="login" value="Log In">
	</form>

</div>
<a href="register.php">Register</a>
</body>
</html>

<?php 

if(isset($_POST['login']))
	{

			$USERNAME = $_POST['USERNAME'];
			$PASSWORD = $_POST['PASSWORD'];
			$query = "select * from std where user='$USERNAME' && pass='$PASSWORD'";
			$data=mysqli_query($con,$query);
			$total=mysqli_num_rows($data);
			if($total==1)
			{
				$_SESSION['user_name']=$USERNAME;
				header('location:home.php');
			}
			else
			{
				echo "Login Faild!! <a href='register.php'>Register</a> first <br>";
			}

	}

?>