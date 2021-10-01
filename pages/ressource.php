<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="Shortcut Icon" href="icons/logo.png" type="image/x-icon">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/style3.css">
		<title>Our Vision For Education</title>
	</head>
	<body>
		<?php
			include("header.php");
		?>
	<main>
		<div id="title-div">
			<h1>Resources</h1>
			<p><a href="#">All</a></p>
			<p><a href="#">Best SMMA Niche</a></p>
			<p><a href="#">How to</a></p>
			<p><a href="#">Most Recent</a></p>
			<p><a href="#">Youtube</a></p>
		</div>
		<div id="videos-div">
			<?php for($i=1;$i<=6;$i++){
				echo '<a href="">
							<div>
								<h1>How to Start SMMA with $0</h1><br>
								<img src="../icons/play_icon.png">
							</div>
						</a>';
			}?>
		</div>

	</main>
	<?php 
		include("footer.php");
	?>
	</body>
</html>