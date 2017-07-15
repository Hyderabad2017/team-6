<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$db_name = "student";

$db = mysql_connect($server,$username,$password) or die("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or die("Database name not available !!");

$login = mysql_query("select * from login_details where (username = '" . $_REQUEST['username'] . "') and (password = '" . ($_REQUEST['password']) . "')",$db);
$rowcount = mysql_num_rows($login);
if ($rowcount = 1) {
$_SESSION['username'] = $_REQUEST['username'];
echo "connecting";
header("Location: form.html");
}
else
{
echo "not connecting";
exit;
}

?>