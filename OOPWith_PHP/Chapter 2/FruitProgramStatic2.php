<!DOCTYPE html>

<html>
<head>
	<title>Fruit Static 2</title>
</head>

<body>
<h1>Fruit Static 2</h1>
<?php

include "FruitStatic2.php";

$myApples =  FruitStatic2::$apples;
$myOranges = FruitStatic2::$oranges;
$myBananas = FruitStatic2::$bananas;

$rtnVal = FruitStatic2::addFruit($myApples, $myOranges, $myBananas);

print "You have $rtnVal pieces of fruit";

?>

</body>
</html>