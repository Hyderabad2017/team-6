<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Learning curve foundation</title>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <!-- =======================================================
        Theme Name: MyBiz
        Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
		
</head>


<body>

<header id="home">

		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">

							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>

						</div>
					</div>

					<div class="col-md-6">
						<div class="top-right">
							<p>Location:<span>Main Street 2020, City 3000</span></p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						
						<a href="" class="navbar-brand">LEARNING CURVE FOUNDATION</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home">home</a></li>
							<li><a href="#about">about</a></li>
							<li><a href="#service">child assessment</a></li>
							<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">student assessment</a>
						<ul class="dropdown-menu">
							<li><a href="cse.html">Add Data</a></li>
							<li><a href="it.html">Show data</a></li>
							
						</ul>
						</li>
							<li><a href="#contact">login</a></li>
							<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        </li>
						</ul>

					</div>

					<div class="search-form">
	                    <form>
	                        <input type="text" id="s" size="40" placeholder="Search..." />
	                    </form>
	                </div>

				</div>
			</nav>
		</div>
</header>
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
        echo "Please upload the file in excel format";
        $uploadOk = 0;
    }
	move_uploaded_file($tmp_name,"C://xampp//htdocs//CFG//".$file_name);
}
?>
<div class="container">
<form action="insert_cr_assess3.php" 	method="post">
<input type="Submit"  value="proceed">
</div>
</body>
</html>
