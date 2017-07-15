<?php

ini_set("display_errors",1);
require_once 'excel_reader2.php';
require_once 'db.php';
 
$data = new Spreadsheet_Excel_Reader("example.xls");
 
echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";
 
$html="<table border='1'>";
for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
{	
	if(count($data->sheets[$i][cells])>0) // checking sheet not empty
	{
		echo "Sheet $i:<br /><br />Total rows in sheet $i  ".count($data->sheets[$i][cells])."<br />";
		for($j=1;$j<=count($data->sheets[$i][cells]);$j++) // loop used to get each row of the sheet
		{ 
			$html.="<tr>";
			for($k=1;$k<=count($data->sheets[$i][cells][$j]);$k++) // This loop is created to get data in a table format.
			{
				$html.="<td>";
				$html.=$data->sheets[$i][cells][$j][$k];
				$html.="</td>";
			}
			$term = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][1]);
			$schlname = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][2]);
			$admn_no = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][3]);
			$Q1= mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$Q2= mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$Q3= mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$Q4= mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$Q5= mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$avg=($Q1+$Q2+$Q3+$Q4+$Q5)/5;
			$query = "insert into stu_assm(Term,School Name,Admn No,Q1,Q2,Q3,Q4,Q5) values('.$term.','".$schlname."','".$admn_no."','.$Q1.','.$Q2.','.$Q3.','.$Q4.','.$Q5.')";
 
			mysqli_query($connection,$query);
			$html.="</tr>";
		}
	}
 
}
 
$html.="</table>";
echo $html;
echo "<br />Data Inserted in dababase";
?>