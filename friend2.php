<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="res/style.css">
<title>SWOT Frontend Dummy</title>
</head>

<body>
<?php include("header.html");?>
<div class="content">
	<?php include("navigation.html");?>
	<div class="main">
		<div class="main-title">Markus</div>
		<div class="device-detail-picture person-pic"></div>	
		<div class="devices-actions">
			<ul>
				<li>Löschen</li>
			</ul>
		</div>
		<div class="devices-list">
			<ul>
				<li><a href="device1.php"><div class="devices-list-picture toaster-pic"></div>Toaster</li>		
			</ul>
		</div>
		<?php include("newsfeed.html");?>
	</div>
</div>
</body>

</html>