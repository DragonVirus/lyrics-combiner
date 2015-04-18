<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Translated Lyrics Generator</title>
	<link rel="stylesheet" href="style.css">
	<style>
		body {
			background-position: top center;
		}
	</style>
</head>
<body>
	<?php 
		$actual = $_POST['actual_text'];
		$pronaunce = $_POST['pronaunce'];
		$english = $_POST['english'];

		$line1 = explode("\n", $actual);
		$line2 = explode("\n", $pronaunce);
		$line3 = explode("\n", $english);
		
		$total_line = count($line1);

		$final = '';

		for ($c=0; $c < $total_line; $c++) {
			if (trim($line1[$c]) != '') {
				$final .= '<p>';
				$final .= $line1[$c].'<br>';
				$final .= $line2[$c].'<br>';
				$final .= '<b>'.$line3[$c].'</b><br>';
				$final .= '</p>';
			} else {
				$final .= '<br>';
			}
		}

		echo $final;
	 ?>
</body>
</html>