<?php
	//load the xml document
	$issue= simplexml_load_file($_GET['Vol']."_issue.xml");
	$issue_title=$issue->id;	
	
	?>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="wp.css">
		<script language="javascript" type="text/javascript">
		</script>
	</head>
	<body>
			<?php 
			include "banner.php";
			include "leftcol.php";
			?>
		<div id="border">
			<br>
			<div id="content">
		<?php
		foreach ($issue->article as $article) {
			// need to decode any funny characters in the title.
			// [ maybe also for the authors name...]
			echo $article->author."\n<br>";
			echo sprintf("<a href='texts/%s'>%s<a><br>",$article->file,utf8_decode($article->title));
			echo "<br>";
		}
		
		?>
		</div>
		</div >
		<div id="nav" align=right>
			<a href="00.contents.html">Contents</a> &nbsp; 
			<a href="00.contents.html"><img border=0 src="images/nav_right.gif">&nbsp</a>
		</div>
		</body>
	</html>	