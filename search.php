<?php

include("connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
<form action="" method="get">
	<input type="text" name="Username" placeholder="Enter user name" id="">
	<input type="submit" name="" value="search">


</form>

<table border="1" cellpadding="7">
	<tr>
		<th>NAME</th>
		<th>COURSE</th>
		<th>EMAIL</th>
	</tr>
<?php

if(isset($_GET['Username']))
{
	$user=$_GET['Username'];
	$query = "select * from std where user='$user'";
	$data=mysqli_query($con,$query);
                    
                    while($result = mysqli_fetch_assoc($data))
                    {
                    	echo"<tr>
                    	     <td>".$result['name']."</td>
                    	     <td>".$result['course']."</td>
                    	     <td>".$result['email']."</td>
                    	     </tr>";
                    }
                
       
}

?>
</table>
</body>
</html>
