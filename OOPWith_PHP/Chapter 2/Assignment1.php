<html>

<head>
	<title>My Unconsious Life</title>
	<style>
		body {
			background-color: silver;
			font-family: Ariel, Helvetica, sans-serif;
		}
	</style>
</head>

<body>

<h1>My Unconsious Life</h1>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

<p>Enter Your First Name:<br>
	<input type="text" name="userfirstname" size="20">
</p>

<p>Enter Your Age:<br>
	<input type="text" name="userage" size="2">
</p>

<p>Enter the Number of Hours you Sleep at Night:<br>
	<input type="text" name="userhours" size="2">
</p>

<p><input type="submit" value="Calculate">


<?php

class Assignment1
{
	const HOURSPERDAY = 24;
	public $userFirstName;
	public $userAge;
	public $userHoursSlept;

	public function __construct($cFirstName, $cAge, $cHoursSlept)
	{
		$this->userFirstName   	= $cFirstName;
		$this->userAge   		= $cAge;
		$this->userHoursSlept  	= $cHoursSlept;
	}


    public function calcSleptYears()
	{
		$sleptYears = ($this->userHoursSlept / self::HOURSPERDAY) * $this->userAge;
		return $sleptYears;
	}

	public function displayMessage()
	{
		$sleptYears = $this->calcSleptYears();

		print "<p>Hey, $this->userFirstName you have slept $sleptYears years of your life away!</p>";

	}
}

//execute

if (!isset($_POST['userfirstname']))
{
	//skip
} else {
	$postFirstName 	= $_POST['userfirstname'];
	$postUserHours 	= $_POST['userhours'];
	$postUserAge   	= $_POST['userage'];

	$myAssignment1 = new Assignment1($postFirstName, $postUserAge, $postUserHours);

	$myAssignment1->displayMessage();
}
?>

</form>

</body>
</html>