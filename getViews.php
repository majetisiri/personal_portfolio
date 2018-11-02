<?php
	
	$servername="localhost";
	$username="root";
	$password="siri";
	$dbname="personal_portfolio";

		
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$dance_id=$_POST['id'];
    $sql="SELECT * from dance where id='$dance_id'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
		$row= $result->fetch_assoc();
		echo $row['views'];
	}
?>