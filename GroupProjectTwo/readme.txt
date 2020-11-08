What to copy and edit

1) add in some questions and answers. I can add more in if you don't have all
2) Name the php files similar to s3q1.php (questions) and s3q1a.php (answers) and save them in the same folder as board || s3=section 3 q1=question 1 which is 3/$200
3) copy this into them(changing whatever numbers you need to fit the naming format:

s1q1.php:
<?php
setcookie("c1r1", 0, time() + 86400, "codd.cs.gsu.edu/~jmoore180/Project2/");
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
			<th>This is the</br>question</th>
		</tr>
	</table>
	<p><a href="./s1q1a.php">Answer<a></p>
	</body>
</html>

s1q1a.php:
<?php
setcookie("score", 200, time() + 86400);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="./QAStyle.css">
        <meta charset="utf-8">
        <title>C1A200</title>
    </head>
    <body>
	<table>
		<tr>
			<th>This is the</br>answer</th>
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

4)I'll bugtest before submiting it so if some numbers are off don't worry about it