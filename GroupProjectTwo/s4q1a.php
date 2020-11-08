<?php
setcookie("score", 200, time() + 86400);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="./QAStyle.css">
        <meta charset="utf-8">
        <title>C4A200</title>
    </head>
    <body>
	<table>
		<tr>
		<th>What is dubbed?</th>
		</tr>
	</table>

    
	<div class="container">
		<div class="center">
            <button type="button"><a href="p1scores.php">Player 1</a></button>
			<button type="button"><a href="p2scores.php">Player 2</a></button>
		</div>
    </div>
	<p><a href="./board.php">Return To Board<a></p>

	</body>
</html>