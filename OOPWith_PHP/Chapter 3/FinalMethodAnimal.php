<?php

class Animal
{
  public $type;

  public function __construct($aType) {
    $this->type = $aType;   //Use new String object!
  }

  public function showType()
  {
	print "<p> My Animal is a $this->type </p>";
  }

  final public function showAnimal() {
      print "<p>This is a $this->type type of Animal </p>";
  }

}

class Dog extends Animal
{

  public $name;

  public function __construct()
  {
  	parent::__construct("Dog");
  }

  public function showDog($aName) {
    $this->name = $aName;         // Supplied name
    print "<p>This $this->type is named $this->name</p>";
  }
}

$myDog = new Dog();

$myDog->showAnimal();
$myDog->showDog("Lassie");
?>