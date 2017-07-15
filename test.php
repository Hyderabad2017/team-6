<?php
	error_reporting(0);
	$servername = "localhost"; // add you user name pass and db name
$username = "root";
$password = "";
$dbname = "learning_curve";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	if(isset($_POST['submit'])){
		$email = $_POST['user'];
		$email = mysqli_real_escape_string($conn,$email);
		$email = strip_tags($email);

		$password = $_POST['pass'];
		$password = mysqli_real_escape_string($conn,$password);
		$password = strip_tags($password);
		$password = MD5($password);

		$query = "SELECT username, password FROM login_details WHERE username='$email' and password='$password'";
		$result = mysqli_query($conn,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database{
		echo "notworking";header('location: error.php');}
		else{
			echo "success";
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email']=$row['Email'];
			header('location: home.php');	
		}
	
?>