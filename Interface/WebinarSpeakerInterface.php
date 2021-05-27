<?php
interface WebinarSpeakerInterface
{
  public function setWebinarThemes(string ...$themes): void;
  public function getWebinarThemes(): string;
}