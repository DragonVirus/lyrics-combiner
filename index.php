<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Translated Lyrics Generator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="generate.php" method="post" id="generator">
		<h2>Translated Lyrics combiner</h2>
		<textarea name="actual_text" id="actual_text"></textarea>
		<textarea name="pronaunce" id="pronaunce"></textarea>
		<textarea name="english" id="english"></textarea>
		<input type="submit" value="Generate">
	</form>
</body>
</html>