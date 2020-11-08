<?php
if(isset($_COOKIE["p2score"])) {
$p2 = $_COOKIE["p2score"];
}
$newp2 = $_COOKIE["score"];
$news2 = $newp2 + $p2;
setcookie("p2score", $news2, time() + 86400);
?>
<html lang="en">
    <head>
	<link rel="stylesheet" href="./QAStyle.css">
        <meta charset="utf-8">
        <title>Player 2 Scores</title>
    </head>
    <body>
	<table>
		<tr>
			<th>Player 2</br>Scores $<?php echo $newp2 ?></th>
		</tr>
	</table>
    <p><a href="./board.php">Return To Board<a></p>

</body>
</html>