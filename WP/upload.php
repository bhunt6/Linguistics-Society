<html>
	<head>
		<title>
			File Uploader
		</title>
	</head>
	<body>
		<h3>File Upload</h3>
		
		Select a file to upload:
		<form action="uploader.php" method="post" enctype="multipart/form-data">
			<br>Password: <input type="text" name='password'>
			<br><input type="file" name="file" size="45">
			<br><input type="submit" value="Upload File">
		</form>
	</body>
</html>
		