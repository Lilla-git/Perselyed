<?php 

	$conn = new mysqli("localhost", "root", "","team06");
	
	if($conn->connect_error){
		die("Connection Failed! ".$conn->connect_error);
	}

?>