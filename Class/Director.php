<?php
include_once 'Developer.php';
include_once 'Interface/LeadInterface.php';

class Director extends Employee implements LeadInterface
{
  private array $canManage;

  public function setCanManage(string ...$professions): void
  {
    foreach ($professions as $profession) {
      $this->canManage[] = $profession;
    }
  }

  public function manages(): string
  {
    return 'I can manage: ' . implode(', ', $this->canManage) . '.';
  }

  public function getInfo(): string
  {
    return $this->getEmployeeInfo() . $this->manages() . PHP_EOL;
  }
}