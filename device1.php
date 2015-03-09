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
		<div class="device-top">
			<div class="device-detail-picture toaster-pic"></div>
			<div class="main-title">Toaster</div>
			<div><?php include("admin-functions.html");?></div>	
			
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