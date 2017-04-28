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

}

class Dog extends Animal
{

  public $name;

  public function __construct()
  {
  	parent::__construct("Collie");
  }

  public function showDog($aName) {
    $this->name = $aName;         // Supplied name
    print "<p> $this->name is a $this->type </p>";
  }
}


?>