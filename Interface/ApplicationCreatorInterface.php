<?php
interface ApplicationCreatorInterface
{
  public function setProgLanguages(string $languages): void;
  public function getProgLanguages(): string;
}