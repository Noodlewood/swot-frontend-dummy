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
		<div class="main-title">Dan</div>
		<div class="device-detail-picture person-pic"></div>
		<div class="device-actions">
			<ul>
				<li>Löschen</li>
			</ul>
		</div>
		<div class="devices-list">
			<ul>
				<li><a href="device2.php"><div class="devices-list-picture skoda-pic"></div>Skoda</li>				
			</ul>
		</div>
		<?php include("newsfeed.php");?>
	</div>
</div>
</body>

</html>