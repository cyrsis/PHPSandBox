<!DOCTYPE HTML>

<html>
<head>
	<title>NumPets - Get/Set</title>
</head>

<body>
<h1>NumPets - Get/Set</h1>

<?php

include "NumPets.php";

$myNumPets = new NumPets();

$myNumPets->setNumPets(3);

$numPets = $myNumPets->getNumPets();

print "<br>I have ".$numPets." pets.";

//print "<p>Fatal Error if I access a private variable directly: ".$myNumPets->$aNumPets;

?>

</body>
</html>
