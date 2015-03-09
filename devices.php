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
		<div class="main-title">Geräte</div>
		<div class="devices-add">
			Gerät hinzufügen: 
			<input type="file" />
			<input type="submit" />
		</div>
		<div class="devices-list">
			<div class="devices-list-owned">Im Besitz</div>
			<ul>
				<li><a href="device1.php"><div class="devices-list-picture toaster-pic"></div>Toaster</li>			
			</ul>
			<div class="devices-list-rented">Geliehen</div>
			<ul>	
				<li><a href="device2.php"><div class="devices-list-picture skoda-pic"></div>Skoda</li>				
			</ul>
		</div>
	</div>
</div>
</body>

</html>