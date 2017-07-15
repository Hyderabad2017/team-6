 <?php
$servername = "localhost";
$username = "username";
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
$school = $_REQUEST["school"];
$q1 = $_REQUEST["q1"];
$q2 = $_REQUEST["q2"];
$q3 = $_REQUEST["q3"];
$q4 = $_REQUEST["q4"];
$q5 = $_REQUEST["q5"];
$avg = ($q1 + $q2 + $q3 + $q4 + $q5)/5;
$sql = "INSERT INTO student_assess (term,sid,school,q1,q2,q3,q4,q5);
VALUES ('$term','$sid','$school','$q1','$q2','$q3','$q4','$q5')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

