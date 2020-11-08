<?php
if(isset($_COOKIE["p1score"])) {
$p1 = $_COOKIE["p1score"];
$p2 = $_COOKIE["p2score"];
}
$c1q1 = $_COOKIE["c1r1"];
$c1q2 = $_COOKIE["c1r2"];
$c1q3 = $_COOKIE["c1r3"];
$c1q4 = $_COOKIE["c1r4"];
$c1q5 = $_COOKIE["c1r5"];
$c2q1 = $_COOKIE["c2r1"];
$c2q2 = $_COOKIE["c2r2"];
$c2q3 = $_COOKIE["c2r3"];
$c2q4 = $_COOKIE["c2r4"];
$c2q5 = $_COOKIE["c2r5"];
$c3q1 = $_COOKIE["c3r1"];
$c3q2 = $_COOKIE["c3r2"];
$c3q3 = $_COOKIE["c3r3"];
$c3q4 = $_COOKIE["c3r4"];
$c3q5 = $_COOKIE["c3r5"];
$c4q1 = $_COOKIE["c4r1"];
$c4q2 = $_COOKIE["c4r2"];
$c4q3 = $_COOKIE["c4r3"];
$c4q4 = $_COOKIE["c4r4"];
$c4q5 = $_COOKIE["c4r5"];
$c5q1 = $_COOKIE["c5r1"];
$c5q2 = $_COOKIE["c5r2"];
$c5q3 = $_COOKIE["c5r3"];
$c5q4 = $_COOKIE["c5r4"];
$c5q5 = $_COOKIE["c5r5"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="ProjectTwo.css">
        <meta charset="utf-8">
        <title>Jeopardy Junior</title>
    </head>
	
    <body>
	<h1>This is Junior Jeopardy!</h1>
	<table>
		  <tr>
			<th>Characters</th>
			<th>What's that Anime?</th>
			<th>Creators</th>
			<th>Japanese Terms</th>
			<th>Trivia</th>
		  </tr>
		  <tr>
			<td><?php if ($c1q1 == 1) : ?><a href="s1q1.php">$200</a><?php endif; ?></td>
			<td><?php if ($c2q1 == 1) : ?><a href="s2q1.php">$200</a><?php endif; ?></td>
			<td><?php if ($c3q1 == 1) : ?><a href="s3q1.php">$200</a><?php endif; ?></td>
			<td><?php if ($c4q1 == 1) : ?><a href="s4q1.php">$200</a><?php endif; ?></td>
			<td><?php if ($c5q1 == 1) : ?><a href="s5q1.php">$200</a><?php endif; ?></td>
		  </tr>
		  <tr>
			<td><?php if ($c1q2 == 1) : ?><a href="s1q2.php">$400</a><?php endif; ?></td>
			<td><?php if ($c2q2 == 1) : ?><a href="s2q2.php">$400</a><?php endif; ?></td>
			<td><?php if ($c3q2 == 1) : ?><a href="s3q2.php">$400</a><?php endif; ?></td>
			<td><?php if ($c4q2 == 1) : ?><a href="s4q2.php">$400</a><?php endif; ?></td>
			<td><?php if ($c5q2 == 1) : ?><a href="s5q2.php">$400</a><?php endif; ?></td>
		  </tr>
		  <tr>
			<td><?php if ($c1q3 == 1) : ?><a href="s1q3.php">$600</a><?php endif; ?></td>
			<td><?php if ($c2q3 == 1) : ?><a href="s2q3.php">$600</a><?php endif; ?></td>
			<td><?php if ($c3q3 == 1) : ?><a href="s3q3.php">$600</a><?php endif; ?></td>
			<td><?php if ($c4q3 == 1) : ?><a href="s4q3.php">$600</a><?php endif; ?></td>
			<td><?php if ($c5q3 == 1) : ?><a href="s5q3.php">$600</a><?php endif; ?></td>
		  </tr>
		  <tr>
			<td><?php if ($c1q4 == 1) : ?><a href="s1q4.php">$800</a><?php endif; ?></td>
			<td><?php if ($c2q4 == 1) : ?><a href="s2q4.php">$800</a><?php endif; ?></td>
			<td><?php if ($c3q4 == 1) : ?><a href="s3q4.php">$800</a><?php endif; ?></td>
			<td><?php if ($c4q4 == 1) : ?><a href="s4q4.php">$800</a><?php endif; ?></td>
			<td><?php if ($c5q4 == 1) : ?><a href="s5q4.php">$800</a><?php endif; ?></td>
		  </tr>
		  <tr>
			 <td><?php if ($c1q5 == 1) : ?><a href="s1q5.php">$1000</a><?php endif; ?></td>
			 <td><?php if ($c2q5 == 1) : ?><a href="s2q5.php">$1000</a><?php endif; ?></td>
			 <td><?php if ($c3q5 == 1) : ?><a href="s3q5.php">$1000</a><?php endif; ?></td>
			 <td><?php if ($c4q5 == 1) : ?><a href="s4q5.php">$1000</a><?php endif; ?></td>
			 <td><?php if ($c5q5 == 1) : ?><a href="s5q5.php">$1000</a><?php endif; ?></td>
		  </tr>
	</table>
	
	<div><p>Player 1 $<?php echo $p1; ?></P></div>
	<div><p>Player 2 $<?php echo $p2; ?></P></div>
	
	
	<div class="container">
		<div class="center">
			<button type="button"><a href="index.php">New Game</a></button>
			<button type="button"><a href="endgame.php">End Game!</a></button>
		</div>
	</div>
	</body>
</html>