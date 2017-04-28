<!DOCTYPE html>

<html>
<head>
	<title>Fruit</title>
</head>

<body>
<h1>Fruit</h1>
<?php

include "Fruit.php";

$myApples = 2;
$myOranges = 3;
$myBananas = 4;

$myFruit = new Fruit();

$rtnVal = $myFruit->addFruit($myApples, $myOranges, $myBananas);

print "You have $rtnVal pieces of fruit";

?>

</body>
</html>