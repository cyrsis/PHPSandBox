<?php

class Person
{
  private $firstname;
  private $lastname;

  public function getFullName()
  {
  	 $fullname = $this->firstname." ".$this->lastname;
  	 return $fullname;
  }

  public function setFullName($aFirstname, $aLastname)
  {
	 $this->firstname = $aFirstname;
	 $this->lastname = $aLastname;
  }

}

interface JobCodes
{
	const PAYROLL = "01";
	const MANAGER = "02";
	const RETAIL  = "03";
}

interface StandardFunctions
{
	public function getJobTitle($aJobCode);
	public function showFullName();
}

class Employee extends Person
	implements JobCodes, StandardFunctions
{
  	private $employeeId;
  	private $jobcode;

	public function __construct($aFirstname, $aLastname, $aEmpId, $aJobcode)
	{
		$this->setFullName($aFirstname, $aLastname);
		$this->employeeId = $aEmpId;
		$this->jobcode = $aJobcode;
  	}

  	function getJobTitle($aJobCode)
  	{

  	}

  	function showFullName()
  	{

  	}

}


$myEmployee = new Employee("Steve", "Perry", "01234", "03");
$myFullname = $myEmployee->getFullName();

print "<p>Hi $myFullname</p>";


?>