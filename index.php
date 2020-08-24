<?php
$myschool = 'Practicum';
$number = 2;
$decimal = 3.3;
$web = '<a href="https://www.prakticum.fi">web</a>'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Övning</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
        <p>skola: <?php echo $myschool?></p>
        <p>multiplakation: <?php echo $number * $decimal?></p>
        <p>web: <?php echo $web?></p>
	</body>
</html>