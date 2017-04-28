<?php

class Animal
{
  	protected $species;

  	public function getSpecies()
 	{
  		return $this->species;
  	}

  	public function setSpecies($aSpecies)
  	{
    	$this->species = $aSpecies;
  	}

}

class Dog extends Animal
{

 	protected $breed;

    public function getBreed()
    {
    	return $this->breed;
    }

    public function setBreed($aBreed)
    {
      $this->breed = $aBreed;
  	}
}

class MyDog extends Dog
{
	private $dogname;

	function __construct($aSpecies, $aBreed, $aDogname)
	{
		$this->setSpecies($aSpecies);
		$this->setBreed($aBreed);
		$this->setDogname($aDogname);
    }

    public function getDogname()
	{
		return $this->species;
	}

	public function setDogname($aDogname)
	{
	    $this->dogname = $aDogname;
  	}

    public function showDog()
    {
    	print "<p>My $this->species is a $this->breed  ";
    	print "named $this->dogname </p>";
    }

}

$myDog = new MyDog("Dog", "Spaniel", "Wuf Wuf");

$myDog->showDog();

$myDog->setBreed("Shepard");

$myDog->showDog();

print "<p>Fatal Error if I access a protected variable directly: ".$myDog->$breed;

?>