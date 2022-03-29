<?php 
include 'connection.php';

if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];

	$sql="DELETE FROM arva WHERE id=$id";
	$result= mysqli_query($connaction,$sql);
	if ($result) {
		//echo "Deleted Sucessfully.";
		header("location:display.php");
	}else{
		die("Error:" .mysqli_connect_error($connaction));
	}
}

 ?>