<?php

namespace App;


class fizzBuzz
{
    const FIZZ_FACTOR = 3;

    public static function isFizz($value)
    {
      return 0 === $value % self::FIZZ_FACTOR;
    }

    const BUZZ_FACTOR = 5;

    public static function isBuzz($value)
    {
      return 0 === $value % self::BUZZ_FACTOR;
    }

    public static function isFizzBuzz($value)
    {
      return self::isFizz($value) && self::isBuzz($value);
    }

    public static function getReplacement($value)
    {

      $fizzBuzzRule = new FizzBuzzRule();
      if($fizzBuzzRule->match($value))
      {
        return $fizzBuzzRule->getReplacement();
      }

      $fizzRule = new FizzRule();
      if($fizzRule->match($value))
      {
        return $fizzRule->getReplacement();
      }

      $buzzRule = new BuzzRule();
      if($buzzRule->match($value))
      {
        return $buzzRule->getReplacement();
      }

      return($value);
    }
}
