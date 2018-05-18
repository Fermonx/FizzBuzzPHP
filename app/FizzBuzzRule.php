<?php

namespace App;


class FizzBuzzRule implements RuleInterface
{
  public function match($value)
  {
    if(0 === $value % 3 && 0 === $value % 5)
    {
      return true;
    }
    return false;
  }

  public function getReplacement()
  {
    return 'FizzBuzz';
  }
}
