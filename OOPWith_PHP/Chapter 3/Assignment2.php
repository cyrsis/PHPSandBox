<html>

<head>
	<title>My Finances</title>
	<style>
		body {
			background-color: silver;
			font-family: Ariel, Helvetica, sans-serif;
		}
	</style>
</head>

<body>

<h1>My Finances - Assignment 2</h1>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

<p>Income/Expense<br>
    <select name="incexp" size="1">
    	<option value="-">-</option>
    	<option value="Income">Income</option>
    	<option value="Expense">Expense</option>
    </select>
</p>

<p>Item<br>
	<input type="text" name="item" size="20">
</p>

<p>Category<br>
	<select name="category" size="1">
		<option value="-">-</option>
		<option value="Food">Food</option>
	    <option value="Gas">Gas</option>
	    <option value="Paycheck">Paycheck</option>
	    <option value="Rent">Rent</option>
	    <option value="Stock">Stock</option>

    </select>
</p>

<p>Amount<br>
	<input type="text" name="amount" size="20">
</p>

<p><input type="submit" name="submitme" value="Add Transaction">

<hr>

<table border="1">

<tr>
  <th>Inc/Exp</th>
  <th>Item</th>
  <th>Category</th>
  <th>Amount</th>
</tr>

<?php

interface IncomeCategories
{
	const INCOMECATS = "Stock*Paycheck*";

	public function checkIncomeCategory($category);
}

interface ExpenseCategories
{
	const EXPENSECATS = "Rent*Food*Gas*";

	public function checkExpenseCategory($category);
}

abstract class Transaction
{
	protected $item;
	protected $category;
	protected $amount;

	public function __construct($cItem, $cCategory, $cAmount)
	{
		$this->item   			= $cItem;
		$this->category  	= $cCategory;
		$this->amount	  	= $cAmount;
	}

	public static function displayTrans()
	{

		$filename = "transfile.txt";

		if (file_exists($filename))
		{
			$fp = fopen($filename, "r");

			while(true)
			{

				$line = fgets($fp);

				if (feof($fp))
				{
					//print "<br><b>Program Ended Normally</b>";
					return;  //exit the function
				}

				list($aIncExp, $aItem, $aCategory, $aAmount)
					= explode('*', $line);

				print "<tr>";
				print "<td>$aIncExp</td> ";
				print "<td>$aItem</td> ";
				print "<td>$aCategory</td> ";
				print "<td>$aAmount</td> ";
				print "</tr>";
			}

			fclose($fp);
		}
	}

	public function addTrans($aIncExp)
	{
		$tran  = $aIncExp."*".$this->item."*";
		$tran .= $this->category."*".$this->amount."*\n";

		$filename = "transfile.txt";

		$fpw = fopen($filename, "a");

		fwrite($fpw, $tran);

		fclose($fpw);
	}
}


class IncomeTran extends Transaction implements IncomeCategories
{
	private $tranType = "Income";

	public function checkIncomeCategory($category)
	{
		$validCategories = explode('*', self::INCOMECATS);

		$isValid = false;

		foreach ($validCategories as $element)
		{
			if ($element == $category)
			{
				$isValid = true;
			}
		}

		return $isValid;
	}
}

class ExpenseTran extends Transaction implements ExpenseCategories
{
	private $tranType = "Expense";

	public function checkExpenseCategory($category)
	{
		$validCategories = explode('*', self::EXPENSECATS);

		$isValid = false;

		foreach ($validCategories as $element)
		{
			if ($element == $category)
			{
				$isValid = true;
			}
		}

		return $isValid;
	}
}


//Execute Code

if (isset($_POST['submitme']))
{
	$button = $_POST['submitme'];
} else {
	$button = "";
	Transaction::displayTrans();  //On opening of first page
}

if ($button == "Add Transaction")
{
	$postIncExp   	= $_POST['incexp'];
	$postItem	 	    = $_POST['item'];
	$postCategory  	= $_POST['category'];
	$postAmount  	= $_POST['amount'];

	$isValid = false;

	if ($postIncExp == 'Income')
	{
		$myTransaction
		  = new IncomeTran($postItem, $postCategory, $postAmount);

		 $isValid = $myTransaction->checkIncomeCategory($postCategory);

	} else {
		if ($postIncExp == 'Expense')
		{
			$myTransaction
		 	 = new ExpenseTran($postItem, $postCategory, $postAmount);

		  	$isValid = $myTransaction->checkExpenseCategory($postCategory);
		} else {
			print "<p><b>Please select 'Income' or 'Expense'</b></p>";
		}
	}

	if ($isValid)
	{
		$myTransaction->addTrans($postIncExp);
	} else {
		print "<p><b>$postCategory is NOT a valid Category</b></p>";
	}

	Transaction::displayTrans();
}
?>

</table>

</form>

</body>
</html>