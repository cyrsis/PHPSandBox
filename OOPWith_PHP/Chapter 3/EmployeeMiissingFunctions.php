<?php

class Person
{
  private $firstname;
  private $lastname;

  public function getFullName($aFirstname, $aLastname)
  {
  	 $fullname = "$this->$firstname $this->$lastname";
  	 return $fullname;
  }

  public function setFullName($aFirstname, $aLastname)
  {
	 $this->$firstname = $aFirstname;
	 $this->$lastname = $aLastname;
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
		$this->$employeeId = $aEmpId;
		$this->$jobcode = $aJobcode;
  	}
}

?>