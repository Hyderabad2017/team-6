 <?php
$servername = "localhost"; // add you user name pass and db name
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
$sid = $_REQUEST["sid"];
$school = $_REQUEST["school"];
$q1 = $_REQUEST["q1"];
$q2 = $_REQUEST["q2"];
$q3 = $_REQUEST["q3"];
$q4 = $_REQUEST["q4"];
$q5 = $_REQUEST["q5"];
$c1 = $_REQUEST["c1"];
$c2 = $_REQUEST["c2"];  
$c3 = $_REQUEST["c3"];
$c4 = $_REQUEST["c4"];
$c5 = $_REQUEST["c5"];
$avg = ($q1 + $q2 + $q3 + $q4 + $q5)/5;
$sql = "INSERT INTO student_assess (sid,school,q1,q2,q3,q4,q5,c1,c2,c3,c4,c5,avg)  
VALUES ('$sid','$school','$q1','$q2','$q3','$q4','$q5','$c1','$c2','$c3','$c4','$c5','$avg')"; //adding data to database
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
