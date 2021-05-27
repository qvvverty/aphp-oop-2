<?php
include_once 'Employee.php';
include_once 'Interface/ApplicationCreatorInterface.php';
include_once 'Interface/WebinarSpeakerInterface.php';

class Developer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
  private array $progLanguages;
  private array $webinarThemes;

  public function setProgLanguages(string ...$languages): void
  {
    foreach ($languages as $language) {
      $this->progLanguages[] = $language;
    }
  }

  public function getProgLanguages(): string
  {
    return 'I write code on: ' . implode(', ', $this->progLanguages) . '.' . PHP_EOL;
  }

  public function setWebinarThemes(string ...$themes): void
  {
    foreach ($themes as $theme) {
      $this->webinarThemes[] = $theme;
    }
  }

  public function getWebinarThemes(): string
  {
    return 'Can conduct a webinar on topics: ' . implode(', ', $this->webinarThemes) . '.' . PHP_EOL;
  }

  public function getInfo(): string
  {
    $info = $this->getEmployeeInfo();
    $info .= $this->getProgLanguages();
    if (isset($this->webinarThemes)) {
      $info .= $this->getWebinarThemes();
    }
    return $info;
  }
}