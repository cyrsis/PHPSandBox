<?php

class FruitStatic2
{
	public static $apples  = 7;
	public static $oranges = 5;
	public static $bananas = 6;

    public static function addFruit($apples, $oranges, $bananas)
	{
		$totalFruit = $apples + $oranges + $bananas;
		return $totalFruit;
	}
}

?>