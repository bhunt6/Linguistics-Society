<?php
	if($_FILES['file']['name']!="") {
		copy ($_FILES['file']['name'], "uploads/".$_FILES['file']['name'])
			or die("could not do it.");
	}
?>
<html>
	<head>
		<title>
			File Uploader
		</title>
	</head>
	<body>
		<h3>File Upload succeeded</h3>
		<ul>
			<li>Sent: <?php echo $_FILES['file']['name'];?>
			<li>Sent: <?php echo $_FILES['file']['size'];?> bytes
			<li>Sent: <?php echo $_FILES['file']['type'];?>	
		</ul>
		<a href="wp.php">Back to Working Papers</a> &nbsp; 	
	</body>
</html>
