<?php
	$con=mysqli_connect('localhost','root','','nikunj');
	$uyt=$_POST['name'];
	$query="insert into name(name)values('$uyt')";
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "<h1><center>data add succesfully</center></h1>";
	}
	else
	{
		echo "<h1><center>data not add succesfully</center></h1>";
	}
?>