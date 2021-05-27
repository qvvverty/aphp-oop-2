<?php
include_once 'Class/Developer.php';

interface LeadInterface
{
  public function setCanManage(string ...$professions): void;
  public function manages(): string;
}