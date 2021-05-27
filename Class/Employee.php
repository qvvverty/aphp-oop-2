<?php
abstract class Employee
{
  private string $name;
  private string $surname;
  private int $salary = 0;
  private static array $instances;

  public function __construct(string $name = 'John', string $surname = 'Doe')
  {
    $this->name = $name;
    $this->surname = $surname;
    self::$instances[] = $this;
  }

  public static function getOrganisationInfo(): string
  {
    $info = 'Total employees: ' . count(self::$instances) . '.' . PHP_EOL;
    $salarySum = 0;
    foreach (self::$instances as $employee) {
      $salarySum += $employee->getSalaryInt();
    }
    $info .= "Salary sum: $salarySum" . '.' . PHP_EOL;
    return $info;
  }

  public function setSalary(int $salary): void
  {
    $this->salary = $salary;
  }

  private function getSalaryInt(): int
  {
    return $this->salary;
  }

  private function getSalaryStr(): string
  {
    return $this->salary . ' parrots';
  }

  protected function getEmployeeInfo(): string
  {
    $info = "Hi, i'm " . strtolower(get_class($this)) . " $this->name $this->surname." . PHP_EOL;
    if ($this->salary > 0) {
      $info .= 'My salary is ' . $this->getSalaryStr() . '.';
    } else {
      $info .= 'I have no salary yet :(';
    }
    $info .= PHP_EOL;
    return $info;
  }

  abstract public function getInfo(): string;
}