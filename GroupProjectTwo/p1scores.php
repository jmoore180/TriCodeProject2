<?php
if(isset($_COOKIE["p1score"])) {
$p1 = $_COOKIE["p1score"];
}
$newp = $_COOKIE["score"];
$news = $newp + $p1;
setcookie("p1score", $news, time() + 86400);
?>
<html lang="en">
    <head>
	<link rel="stylesheet" href="./QAStyle.css">
        <meta charset="utf-8">
        <title>Player 1 Scores</title>
    </head>
    <body>
	<table>
		<tr>
			<th>Player 1</br>Scores $<?php echo $newp ?></th>
		</tr>
	</table>
    <p><a href="./board.php">Return To Board<a></p>

</body>
</html>