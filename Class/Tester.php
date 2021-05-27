<?php
include_once 'Employee.php';

class Tester extends Employee
{
  public function getInfo(): string
  {
    return $this->getEmployeeInfo();
  }
}