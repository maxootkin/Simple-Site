<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BMW › 3 Series</title>
	<script src="jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css"/>	
	<link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css"/>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="container">
		<div class="flex1">
			<?php
				include 'header.php';
			?>
			<h1>BMW of third series</h1>
			<div class="slider">
			  	<img src="img/Limousine-1.jpg" alt="photo">
				<img src="img/Limousine-2.jpg" alt="photo">				
				<img src="img/Touring-1.jpg" alt="photo">
				<img src="img/Touring-2.jpg" alt="photo">
				<img src="img/Touring-3.jpg" alt="photo">				
			</div>
		</div>
	<?php include 'footer.php' ?>
	</div>	
	<script type="text/javascript" src="slick-master/slick/slick.min.js"></script>
	<script>
		$(document).ready(function(){
		  $('.slider').slick({
		  });
		});
	</script>
</body>
</html>