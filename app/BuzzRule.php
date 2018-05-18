<?php

namespace App;

class BuzzRule implements RuleInterface
{
  const BUZZ_FACTOR = 5;
  public function match($value)
  {
    return 0 === $value% self::BUZZ_FACTOR;
  }

  public function getReplacement()
  {
    return 'Buzz';
  }
}
