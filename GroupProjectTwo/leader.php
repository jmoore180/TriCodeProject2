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
        <title>Leader Boards</title>
    </head>
    <body>
	<table>
		<tr><th>LeaderBoards</th>
        <tr><th>1) $14800</th></tr>
        <tr><th>2) $14000</th></tr>
        <tr><th>3) $10000</th></tr>
        <tr><th>4) $9800</th></tr>
        <tr><th>5) $400</th></tr>
    </table>
    <?php
        if($winnum > 14800){
            $res= "You beat #1 Congrats!";
        }
        elseif($winnum > 14000){
            $res= "You beat #2 Congrats!";
        }
        elseif($winnum > 10000){
            $res ="You beat #3 Congrats!";
        }
        elseif($winnum > 9800){
            $res= "You beat #4 Congrats!";
        }
        elseif($winnum > 400){
            $res= "You beat #5 Congrats!";
        }
        else{
            $res= "Try Harder next time!";
        }

    ?>
    <p>Your score: <?php echo $winnum; ?><br></p>
    <p><?php echo $res; ?></p>

	<div class="container">
		<div class="center">
			<button type="button"><a href="index.php">New Game</a></button>
			<button type="button"><a href="endgame.php">Go Back</a></button>
		</div>
	</div>
	</body>
</html>