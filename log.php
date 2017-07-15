<?
session_start();

$server = "localhost";
$username = "root";
$password = "";
$db_name = "learning_curve";

$db = mysql_connect($server,$username,$password) or die("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or die("Database name not available !!");

 $query=mysql_query("SELECT * FROM login_details WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
 if($user == $dbusername && $pass == $dbpassword)  
    {  
echo "connecting";
//header("Location: securedpage.php");
}
else
{
echo "not connecting";
//header("Location: log.php");
}
?>
