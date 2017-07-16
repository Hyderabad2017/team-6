<?php
//echo "ncje";
$servername = "localhost"; // add you user name pass and db name
$username = "root";
$password = "";
$dbname = "learning_curve";
//echo "ncje";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = mysqli_query($conn,"select avg from student_assess");
$result = array();
$count=0;
while ($row = mysqli_fetch_assoc($query)){
     $result[$count]=$row['avg'];
	 $count=$count+1;//echo $row['avg'];
 }
  
 $final=json_encode($result);
?>
<html>
<head>
<title>Highcharts Tutorial</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>  
</head>
<body>
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
var data_click = <?php echo $final; ?>;
   var chart = {
      type: 'bar'
   };
   var title = {
      text: 'pesonality analysis'   
   };
   var subtitle = {
      text: 'www.team-6.com'  
   };
   var xAxis = {
      categories:['term1', 'term2'],
      title: {
         text: null
      }
   };
   var yAxis = {
      min: 0,
      max: 5,
      title: {
         text: 'personality perfomance',
         align: 'high'
      },
      labels: {
         overflow: 'justify'
      }
   };
   var tooltip = {
     
   };
   var plotOptions = {
      bar: {
         dataLabels: {
            enabled: true
         }
      }
   };
   var legend = {
      layout: 'horizontal',
      align: 'top',
      verticalAlign: 'top',
      x: -40,
      y: 100,
      floating: true,
      borderWidth: 1,
      backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
      shadow: true
   };
   var credits = {
      enabled: false
   };

        var a = garr[0];
        var b = garr[1];
//alert(a);
   var series= [{
         name: 'student',
            data: [2,3]
          }
   ];     

function openData() {
 var fromDate =$('#startDate').val();
 var toDate = $('#expireDate').val();

 if(fromDate == '' || toDate == '' ){
  //    return false;
 }

 var data = 'fromDate='+fromDate+'&toDate='+toDate;

}      
   var json = {};   
   json.chart = chart; 
   json.title = title;   
   json.subtitle = subtitle; 
   json.tooltip = tooltip;
   json.xAxis = xAxis;
   json.yAxis = yAxis;  
   json.series = series;
   json.plotOptions = plotOptions;
   json.legend = legend;
   json.credits = credits;
   $('#container').highcharts(json);
});
</script>
</body>
</html>
