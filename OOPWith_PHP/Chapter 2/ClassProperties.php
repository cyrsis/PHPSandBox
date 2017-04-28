<!DOCTYPE html>

<html>
<head>
	<title>ClassProperties</title>
</head>

<body>
<h1>ClassProperties</h1>
<?php

//Define the Class

class ClassProperties
{
    public $myRadius = 5.5;
    const MYPI = 3.14159;

    public function calcCircum()
	{
		$circum = 2 * self::MYPI * $this->myRadius;
		return $circum;
	}
}


//Execute Code Using the Class

$myClassProperties = new ClassProperties();

$rtnVal = $myClassProperties->calcCircum();

print "The circumference of a circle with a radius ";
print "of $myClassProperties->myRadius is $rtnVal";

?>

</body>
</html>