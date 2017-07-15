<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$term = $_REQUEST["term"];
$sid = $_REQUEST["sid"];
$sql = "select avg from student_asses where sid='$sid'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //while($row = mysqli_fetch_assoc($result)) {
       if($result[0] > $result[1]){
echo "student personality demoted";
    }
if($result[0] < $result[1]){
echo "student personality improved";
    }
if($result[0] > $result[1]){
echo "student personality didn't change";
    }

} else {
    echo "0 results";
}
$conn->close();
?>
