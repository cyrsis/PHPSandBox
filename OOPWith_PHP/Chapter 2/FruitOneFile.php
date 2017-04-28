<!DOCTYPE html>

<html>
<head>
	<title>Fruit</title>
</head>

<body>
<h1>Fruit</h1>
<?php

//Define the Class

class FruitOneFile
{
    public function addFruit($apples, $oranges, $bananas)
	{
		$totalFruit = $apples + $oranges + $bananas;
		return $totalFruit;
	}
}


//Execute Code Using the Class

$myApples = 2;
$myOranges = 3;
$myBananas = 4;

$myFruit = new FruitOneFile();

$rtnVal = $myFruit->addFruit($myApples, $myOranges, $myBananas);

print "You have $rtnVal pieces of fruit";

?>

</body>
</html>