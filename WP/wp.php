<html>
<head>
	<link rel="stylesheet" type="text/css" href="/org/lingclub/WP/wp.css">
</head>
<body>
<?php
	$vol=$_GET["Vol"];
	// Current defaults to 9
	if ($vol=="")
		$vol="9";

	$issue= simplexml_load_file($vol."_issue.xml");
$issue_title=$issue->id;

include "banner.php";
include "leftcol.php";
?>
	<div id="border">
	<div id="titlecol">
		<center>
			<br>
		<img title="Working Papers" alt="Working Papers" src="/org/lingclub/WP/images/ling2.gif" width="600" height="50" border=0>
		<br>
		<table cellpadding=0 cellspacing=0>
			<tr>
				<td valign=center><b><font size=+4>W</b><td>
				<td valign=center><b><font size=+2>orking</font></b></td>
				<td valign=center><b><font size=+4>&nbsp;P</b></td>
				<td valign=center><b><font size=+2>apers &nbsp;in</font></b></td>
				<td valign=center><b><font size=+4>&nbsp;L</b><td>
				<td valign=center><b><font size=+2>inguistics</font></b></td>
			</tr>
		</table>
		<br>
		<img title="Working Papers" alt="Working Papers" src="/org/lingclub/WP/images/doulos 2.png" border=0><br>
		<font size=+1>
		<b><?php echo $issue_title?></b>
		</font>
		<br><br><br><br><br>
		<a href="currentXML.php?Vol=<?php echo $vol ?>">Contents</a>
		<br><br><br><br>
		<table border=0 cellpadding=0 cellspacing=0>
			<tr>
				<td align=center>
					<table border=0 cellpadding=0 cellspacing=0>
						<tr>
							<td align=right ><b><font size=+1>E</b></td>
							<td align=left ><b><font size=-1>DITORS</font></td>
						</tr>
					</table>
				</td>
			</tr>
			<?php
				foreach ($issue->editor as $editor) {
					echo "<tr>";
					echo "<td align='center'>$editor</td>";
					echo "</tr>";
				}
			?>
		</table>
		<br><br><br><br>
		George Mason University<br>Fairfax, Virginia<br><br>
		<img class= title="Working Papers" alt="Working Papers" src="/org/lingclub/WP/images/ling2.gif" width="600" height="50" border=0>		
		</center>
	</div> <!-- titlecol -->
	</div> <!-- border -->

	</body>
</htmo>
