<?php
$p1 = $_COOKIE["p1score"];
$p2 = $_COOKIE["p2score"];
if($p1 > $p2){
    $win = "Player 1";
    $winnum = $p1;
}
elseif($p1 < $p2){
    $win = "Player 2";
    $winnum = $p2;
}
else{
    $win = "Both Players";
    $winnum = $p1;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="./QAStyle.css">
        <meta charset="utf-8">
        <title>C1Q200</title>
    </head>
    <body>
	<table>
		<tr>
			<th>Game Over!!!<br><?php echo "Winning Player are<br>" . $win . "<br>With $" . $winnum; ?></th>
		</tr>
	</table>
	<div class="container">
		<div class="center">
			<button type="button"><a href="index.php">New Game</a></button>
			<button type="button"><a href="board.php">Go Back</a></button>
			<button type="button"><a href="leader.php">See LeaderBoard</a></button>
		</div>
	</div>
	</body>
</html>