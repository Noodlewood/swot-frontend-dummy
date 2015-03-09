<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="res/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
<title>SWOT Frontend Dummy</title>
</head>

<body>
<?php include("header.html");?>
<div class="content">
	<?php include("navigation.html");?>
	<div class="main">
		<div class="device-top">
			<div class="device-detail-picture skoda-pic"></div>
			<div class="main-title">Skoda</div>
			<div>Im Besitz: von <a href="friend1.php">Markus</a></div>
		</div>
		<div class="device-center">
			<div class="device-actions">
				<ul>
					<li>Move</li>
					<li>Do</li>
					<li>Make</li>
					<li>Read</li>
					<li>Listen</li>
					<li>Open</li>
					<li>Close</li>
					<li>Yell</li>
					<li>Stop</li>
					<li>Start</li>
					<li>Count</li>
				</ul>
			</div>
		</div>
		<div class="device-bot">
			<?php include("newsfeed.html");?>
		</div>
	</div>
</div>
</body>

</html>