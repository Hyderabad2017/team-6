<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning_curve";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$term = $_REQUEST["term"];
//$sid = $_REQUEST["sid"];
//$school = $_REQUEST["school"];
$sql = "select sname,age,gender,parental_status,family_income from std_info where sid=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo '<h2 style="text-align:center">User Profile</h2>
<div class="row">
    <div class="col-sm-6">
      <p>NAME:'.$row["sname"].'</p>
	  <p>AGE:'.$row["age"].'</p>
      <p>GENDER:'.$row["gender"].'</p>
	  </div>
    <div class="col-sm-6">
      <p>PARENTAL-STATUS:'.$row["parental_status"].'</p>
	  <p>FAMILY-INCOME:'.$row["family_income"].'</p>
	  </div></div>'
$sql = "select term,avg from student_assess where sid=39";
$result = $conn->query($sql);	
$row = $result->fetch_assoc();  
?>
</body>
</html>

