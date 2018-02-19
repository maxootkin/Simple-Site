<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BMW › 3 Series</title>
	<script src="jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="dimsemenov-Magnific-Popup-2ff1692/dist/magnific-popup.css">
	<script src="dimsemenov-Magnific-Popup-2ff1692/dist/jquery.magnific-popup.js"></script>
	<link rel="stylesheet" href="main.css">
	<script>
		$(document).ready(function() {
		  	$('.parent-container').magnificPopup({
			  delegate: 'a', 
			  type: 'image'		  
			});
			$('#hide-block').hide();
			$('#show-block').on('click', function(){
				let textLink = $('#hide-block').is(':visible') ? 'Show more photos' : 'Back...';
				$('#show-block').text(textLink);
				$('#hide-block').slideToggle();
			})
		});		
	</script>
</head>
<body>
	<div class="container">
		<div class="flex1">
			<?php
				include 'header.php';
			?>
			<h1>BMW of third series</h1>
			<div class="parent-container content convertible">
				<a href="img/convertible-1.jpg"><img src="img/convertible-1.jpg" alt="photo"></a>
				<a href="img/convertible-2.jpg"><img src="img/convertible-2.jpg" alt="photo"></a>
				<a href="img/convertible-3.jpg"><img src="img/convertible-3.jpg" alt="photo"></a>	
				<a href="img/coupe-1.jpg"><img src="img/coupe-1.jpg" alt="photo"></a>	
				<a href="img/coupe-2.jpg"><img src="img/coupe-2.jpg" alt="photo"></a>	
				<a href="img/coupe-3.jpg"><img src="img/coupe-3.jpg" alt="photo"></a>	
			</div>
			<div id="hide-block" class="parent-container content convertible">
				<a href="img/convertible-1.jpg"><img src="img/convertible-1.jpg" alt="photo"></a>
				<a href="img/convertible-2.jpg"><img src="img/convertible-2.jpg" alt="photo"></a>
				<a href="img/convertible-3.jpg"><img src="img/convertible-3.jpg" alt="photo"></a>	
				<a href="img/coupe-1.jpg"><img src="img/coupe-1.jpg" alt="photo"></a>	
				<a href="img/coupe-2.jpg"><img src="img/coupe-2.jpg" alt="photo"></a>	
				<a href="img/coupe-3.jpg"><img src="img/coupe-3.jpg" alt="photo"></a>	
			</div>			
			<div class="button-field">
				<a class="button" id="show-block" href="#">Show more photos</a>
			</div>							
		</div>
	<?php include 'footer.php' ?>
	</div>
</body>
</html>