<!DOCTYPE html>

<html>
<head>
	<title>Fruit call Constructor</title>
</head>

<body>
<h1>Fruit call Constructor</h1>
<?php

include "FruitConstructor.php";

$myApples  = 3;
$myOranges = 4;
$myBananas = 5;

$myFruit = new FruitConstructor($myApples, $myOranges, $myBananas);

$rtnVal = $myFruit->addFruit();

print "<br>You have $rtnVal pieces of fruit";


$myFruit = new FruitConstructor(8, 3, 4);

$rtnVal = $myFruit->addFruit();

print "<br>You NOW have $rtnVal pieces of fruit";

?>

</body>
</html>