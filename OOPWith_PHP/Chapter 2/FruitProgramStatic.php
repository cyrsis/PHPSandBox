<!DOCTYPE html>

<html>
<head>
	<title>Fruit Static</title>
</head>

<body>
<h1>Fruit Static</h1>
<?php

include "FruitStatic.php";

$myApples = 1;
$myOranges = 2;
$myBananas = 3;

// Not Needed for Static processing
//   $myFruit = new Fruit();
//   $rtnVal = $myFruit->addFruit($myApples, $myOranges, $myBananas);


$rtnVal = FruitStatic::addFruit($myApples, $myOranges, $myBananas);

print "You have $rtnVal pieces of fruit";

?>

</body>
</html>