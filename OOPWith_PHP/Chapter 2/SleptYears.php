<!DOCTYPE html>

<html>
<head>
	<title>SleptYears</title>
</head>

<body>
<h1>SleptYears</h1>
<?php

//Define the Class

class SleptYears
{
 	public $hoursSleptperNight = 8;
    public $myAge = 54;

    public function calcSleptYears()
	{
		$sleptYears = ($this->myAge * $this->hoursSleptperNight)/24;
		return $sleptYears;
	}
}


//Execute Code Using the Class

$mySleptYears = new SleptYears();

$rtnVal = $mySleptYears->calcSleptYears();

print "You have slept $rtnVal years of your life away!";

?>

</body>
</html>