<?php
#include('PHPExcel/Classes/PHPExcel/Reader/Excel2007.php');
require 'PHPExcel-1.8/Classes/PHPExcel.php';
echo "stream opened";
#require 'PHPExcel/IOFactory.php';
#require 'PHPExcel/Autoloader.php';
echo "stream opened";
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
$inputFileName=$_POST["example"];
//$inputFileName = 'example.xlsx';
echo "Abc";

 

try {

    $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

}
 catch(Exception $e) {

    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());

}


 

$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(true,true,true,true,true,true,true,true);

$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

 

for($i=2;$i<=$arrayCount;$i++){

$SchoolName = trim($allDataInSheet[$i]["A"]);
$admno=trim($allDataInSheet[$i]["B"]);
$q1=trim($allDataInSheet[$i]["C"]);
$q2=trim($allDataInSheet[$i]["D"]);
 $q3=trim($allDataInSheet[$i]["E"]);
 $q4=trim($allDataInSheet[$i]["F"]);
 $q5=trim($allDataInSheet[$i]["G"]);
 
$avg=($q1+$q2+$q3+$q4+$q5)/5;

$query = "insert into student.stu_assm(SchoolName,admno,q1,q2,q3,q4,q5,avg) values('".$SchoolName."','".$admno."','".$q1."','".$q2."','".$q3."','".$q4."','".$q5."','".$avg."')";

$row=mysqli_query($conn,$query);
	if($row){
		echo "table contacts created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($conn);
	}

}?>

