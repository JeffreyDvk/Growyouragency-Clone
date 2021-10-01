<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="Shortcut Icon" href="icons/logo.png" type="image/x-icon">
		<link rel="stylesheet" href="../css/stylecss">
		<link rel="stylesheet" href="../css/style4.css">
		<title>Reviews Archive - Grow Your Agency</title>
	</head>
	<body>
		<?php
			include("header.php");
		?>
	<main>
		<div id="title-div">
			<h1>Reviews</h1>
			<div>
				<a href="">Filters</a>
				<p>12 results</p>
			</div>
		</div>
		<div id="videos-div">
			<?php 	for($j=1;$j<=6;$j++){
			 			echo    '<a href="">
									<div>
										<h1>Timothy Lee<br>
											<span>'?>
										<?php for($i=1;$i<=10;$i++){
											echo '<img src="../icons/7924730121544077048-512.png">';
										}
										?><?php 

						echo '</span>
									</h1><br>
									<img id="play" src="../icons/play_icon.png">
									<span id="location">Carrollton,USA</span>
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