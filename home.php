<?php 
session_start();
include("connection.php");
echo "Welcome ".$_SESSION['user_name'];
$userprof = $_SESSION['user_name'];

if($userprof==true)
{

}

else
{
	header('location:login.php');
}


$query = "select * from std where user='$userprof'";
$data=mysqli_query($con,$query);

?>

 <table>
	      	<tr>
	      		<th>USERNAME</th>
	      		<th>PASSWORD</th>
	      		<th>NAME</th>
	      		<th>COURSE</th>
	      		<th>EMAIL</th>
	      	</tr>
	      		<?php
                    
                    while($result = mysqli_fetch_assoc($data))
                    {
                    	echo"<tr>
                    	     <td>".$result['user']."</td>
                    	     <td>".$result['pass']."</td>
                    	     <td>".$result['name']."</td>
                    	     <td>".$result['course']."</td>
                    	     <td>".$result['email']."</td>
                    	     </tr>";
                    }
                
                 ?>


	      </table>
	      <a href="logout.php">LOG OUT</a>