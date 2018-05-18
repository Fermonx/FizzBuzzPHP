<?php

namespace App;

/**
 *
 */
interface RuleInterface
{
  public function match($value);
  public function getReplacement();
}
