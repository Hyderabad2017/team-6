<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



	#require_once("connection.php");
	$sql = "CREATE TABLE stu_assm 
	(TERM INT NOT NULL  PRIMARY KEY, 
	SchoolName CHAR(50) NOT NULL,
	admno INT(20) NOT NULL UNIQUE,
	q1 INT(1) UNSIGNED NOT NULL,
	q2 INT(1) UNSIGNED NOT NULL,
	q3 INT(1) UNSIGNED NOT NULL,
	q4 INT(1) UNSIGNED NOT NULL,
	q5 INT(1) UNSIGNED NOT NULL)";
	$row=mysqli_query($conn,$sql);
	if($row){
		echo "table stu_assm created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($conn);
	}
?>