
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
        echo "Your file is accepted and will be processed " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Please upload the file in excel format.";
        $uploadOk = 0;
    }
	move_uploaded_file($tmp_name,"C://xampp//htdocs//CFG//".$file_name);
}
?>
<form action="insert1.php" 	method="post">
<input type="Submit"  value="proceed">

</html>



