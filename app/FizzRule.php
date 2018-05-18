<?php

namespace App;

class FizzRule implements RuleInterface
{

  const FIZZ_FACTOR = 3;
  public function match($value)
  {
    return 0 === $value% self::FIZZ_FACTOR;
  }

  public function getReplacement()
  {
    return 'Fizz';
  }
}
