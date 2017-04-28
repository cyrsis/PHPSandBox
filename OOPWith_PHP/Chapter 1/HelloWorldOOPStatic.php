<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>HelloWorld OOP - Static</title>
</head>

<body>
<h1>HelloWorld - OOP - Static</h1>
<?php

class HelloWorldOOPStatic
{
	public static function displayValue()
	{
		$myMsg = "Hello World - OOP Static";
		print $myMsg;
	}
}

HelloWorldOOPStatic::displayValue();

?>

</body>
</html>
