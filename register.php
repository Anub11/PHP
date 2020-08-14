<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
<div>
	<form method="post" action="" enctype="multipart/form-data" >
		USERNAME: <input type="text" name="USERNAME" value=""><br><br>
		PASSWORD: <input type="PASSWORD" name="PASSWORD" value=""><br><br>
		CONFIRMPASSWORD: <input type="PASSWORD" name="CPASSWORD" value=""><br><br>
		NAME: <input type="text" name="NAME" value=""><br><br>
		COURSE: <input type="text" name="COURSE" value=""><br><br>
		EMAIL: <input type="text" name="EMAIL" value=""><br><br>
		<input type="Submit" name="Submit" value="Register">
	</form>

</div>
</body>
</html>






<?php 

	if(isset($_POST['Submit']))
	{

			$USERNAME = $_POST['USERNAME'];
			$PASSWORD = $_POST['PASSWORD'];
			$CPASSWORD = $_POST['CPASSWORD'];
			$NAME = $_POST['NAME'];
			$COURSE = $_POST['COURSE'];
			$EMAIL = $_POST['EMAIL'];


		
		if($USERNAME==''OR $CPASSWORD=='' OR $PASSWORD==''OR $NAME==''OR $COURSE==''OR $EMAIL=='')
		{

			echo "<script>alert('FILL THE FIELDS!!!!')</script>";
			exit();


		}	
		elseif($PASSWORD==$CPASSWORD)
		{
			
					$insert = "insert into std values('$USERNAME','$PASSWORD','$NAME','$COURSE','$EMAIL','$CPASSWORD')";

					$query=mysqli_query($con,$insert);
		            if($query){

			                   echo "<script>alert('Successfully Register !! ')</script>";
			                   header('location:login.php');
		            }
		}	
		else{
				echo "Your Password Not Match!! ";
			}	
	}
?>