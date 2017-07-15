<?php
#include('PHPExcel/Classes/PHPExcel/Reader/Excel2007.php');
session_start();
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
//$inputFileName=;
$inputFileName = $_SESSION["filename"];
 

try {

    $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

}
 catch(Exception $e) {

    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());

}


 

$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true);

$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

 

for($i=2;$i<=$arrayCount;$i++){

$SchoolName = trim($allDataInSheet[$i]["A"]);
$admno=trim($allDataInSheet[$i]["B"]);
$clsroom=trim($allDataInSheet[$i]["C"]);
$q1=trim($allDataInSheet[$i]["D"]);
$q2=trim($allDataInSheet[$i]["E"]);
$q3=trim($allDataInSheet[$i]["F"]);
$q4=trim($allDataInSheet[$i]["G"]);
$q5=trim($allDataInSheet[$i]["H"]); 
$q6=trim($allDataInSheet[$i]["I"]);
$q7=trim($allDataInSheet[$i]["J"]);
$q8=trim($allDataInSheet[$i]["K"]);
$q9=trim($allDataInSheet[$i]["L"]);
$q10=trim($allDataInSheet[$i]["M"]);
$q11=trim($allDataInSheet[$i]["O"]);
$q12=trim($allDataInSheet[$i]["P"]);
$q13=trim($allDataInSheet[$i]["Q"]);
$q14=trim($allDataInSheet[$i]["R"]);
$q15=trim($allDataInSheet[$i]["S"]);
$q16=trim($allDataInSheet[$i]["T"]);
$q17=trim($allDataInSheet[$i]["U"]);
$q18=trim($allDataInSheet[$i]["V"]);
$q19=trim($allDataInSheet[$i]["W"]);
$q20=trim($allDataInSheet[$i]["X"]);
$q21=trim($allDataInSheet[$i]["Y"]);
$q22=trim($allDataInSheet[$i]["Z"]);
$q23=trim($allDataInSheet[$i]["AA"]);
$q24=trim($allDataInSheet[$i]["AB"]);
$q25=trim($allDataInSheet[$i]["AC"]);
#$q26=trim($allDataInSheet[$i]["AD"]);
#$q27=trim($allDataInSheet[$i]["AE"]);
#$q28=trim($allDataInSheet[$i]["AF"]);
$total=($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12+$q13+$q14+$q15+$q16+$q17+$q18+$q19+$q20+$q21+$q22);
$query = "insert into student.cls_assm_1(SchoolName,admno,clsroom,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,total) values('".$SchoolName."','".$admno."','".$clsroom."','".$q1."','".$q2."','".$q3."','".$q4."','".$q5."','".$q6."','".$q7."','".$q8."','".$q9."','".$q10."','".$q11."','".$q12."','".$q13."','".$q14."','".$q15."','".$q16."','".$q17."','".$q18."','".$q19."','".$q20."','".$q21."','".$q22."','".$q23."','".$q24."','".$q25."','".$total."')";

$row=mysqli_query($conn,$query);
	if($row){
		echo "table contacts created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($conn);
	}

}
?>

