<html>
<?php
session_start();
$target_dir = "/CFG";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
	$tmp_name=$_FILES["fileToUpload"]["tmp_name"];
	$file_name=$_FILES["fileToUpload"]["name"];
	$_SESSION["filename"]=$file_name;
    if($check!=0) {
        echo "File is an excel - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	move_uploaded_file($tmp_name,"C://xampp//htdocs//CFG//".$file_name);
}
?>
<form action="insert_cr_assess3.php" 	method="post">
<input type="Submit"  value="proceed">

</html>
