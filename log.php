<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db_name = "student";
$db = mysql_connect($server,$username,$password) or die("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or die("Database name not available !!");
$user=$_POST['user'];
$pass=$_POST['pass'];
 $query=mysql_query("SELECT * FROM login_details WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==1)  
    {  
      
    echo "connecting";
header("Location: form.html");
  }
else
{
echo "not connecting";

echo "<script type='text/javascript'>alert('failed!')</script>";
header("Location: login.html");
}
	
?>
