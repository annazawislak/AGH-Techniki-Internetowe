 <!DOCTYPE html>
<html>
<body>
<div id="main">
	<h1> Crawler </h1>
	<form action="" method="GET">
		<div id="input-text" class="input">
			<input type="text" name="search">
		</div>
		<div id="input-submit" class="input">
		<input type="submit" value="crawl!">
		</div>
	</form>
</div>

<?php
	$url = $_GET["search"];

	if (filter_var($url, FILTER_VALIDATE_URL)) {
		echo("$url is a valid URL");
	} else {
		echo("$url is not a valid URL");
		
	$doc = new DOMDocument();
	$doc ->loadHTML
}
?>

</body>
</html> 