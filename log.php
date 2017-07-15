<?
session_start();

$server = "localhost";
$username = "root";
$password = "";
$db_name = "dblogin";

$db = mysql_connect($server,$username,$password) or die("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or die("Database name not available !!");

$login = mysql_query("select * from tbuser where (username = '" . $_POST['username'] . "') and (password = '" . md5($_POST['password']) . "')",$db);
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION['username'] = $_POST['username'];
header("Location: securedpage.php");
}
else
{
header("Location: log.php");
}
?>
