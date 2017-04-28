<html>
<head>
  <title>OOP and MySQLi</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">


<h2 style="background-color: #F5DEB3;">OOP and MySQLi</h2>

<?php

//**********************************************
//*
//*  Connect to MySQLi and Database
//*
//**********************************************


$mysqli = new mysqli('localhost','root','', 'test');

if (!$mysqli)
{
	print "<h1>Unable to Connect to MySQL</h1>";
}


//**********************************************
//*
//*  SELECT from table and display Results
//*
//**********************************************

$sql_statement  = "SELECT lastname, firstname, state ";
$sql_statement .= "FROM author ";
$sql_statement .= "WHERE state = 'CA' ";
$sql_statement .= "ORDER BY lastname, firstname ";

  //mySQLi

$result = $mysqli->query($sql_statement);

$outputDisplay = "";
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p>MySQL No: ".$mysqli->errno."</p>";
	$outputDisplay .= "<p>MySQL Error: ".$mysqli->error."</p>";
	$outputDisplay .= "<p>SQL Statement: ".$sql_statement."</p>";
	$outputDisplay .= "<p>MySQL Affected Rows: ".$mysqli->affected_rows."</p>";
} else {

	$outputDisplay  = "<h3>Authors who live in CA</h3>";

	$outputDisplay .= '<table border=1 style="color: black;">';
	$outputDisplay .= '<tr><th>Last Name</th><th>First Name</th><th>State</th></tr>';

	$numresults = $result->num_rows;

	for ($i = 0; $i < $numresults; $i++)
	{
		if (!($i % 2) == 0)
		{
			 $outputDisplay .= "<tr style=\"background-color: #F5DEB3;\">";
		} else {
			 $outputDisplay .= "<tr style=\"background-color: white;\">";
		}

		$myrowcount++;

		$row = $result->fetch_assoc();

		$lastname  = $row['lastname'];
		$firstname = $row['firstname'];
		$state = $row['state'];

		$outputDisplay .= "<td>".$lastname."</td>";
		$outputDisplay .= "<td>".$firstname."</td>";
		$outputDisplay .= "<td>".$state."</td>";

		$outputDisplay .= "</tr>";

	}

	$outputDisplay .= "</table>";

}


?>


<hr size="4" style="background-color: #F5DEB3; color: #F5DEB3;">

<?php
	$outputDisplay .= "<br /><br /><b>Number of Rows in Results: $myrowcount </b><br /><br />";
	print $outputDisplay;
?>

</body>
</html>