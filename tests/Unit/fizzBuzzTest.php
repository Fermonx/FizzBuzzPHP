<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\FizzBuzz;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class fizzBuzzTest extends TestCase
{
     /**
     * @test
     * @dataProvider fizzNumberProvider()
     */
    public function itReturnsFizzIfDivisibleByThree($value,$expected)
    {
      $result = Fizzbuzz::isFizz($value);
      $this->assertEquals($expected, $result);
    }
    public function fizzNumberProvider()
    {
      return[
        [3,true],
        [6,true],
        [9,true],
        [12,true],
        [1,false],
        [15,true],
        [18,true]
      ];
    }
    /**
    * @test
    * @dataProvider buzzNumberProvider
    */
    public function itReturnsBuzzIfDivisibleByFive($value,$expected)
    {
      $fizzbuzz = new fizzBuzz();
      $result = $fizzbuzz->isBuzz($value);
      $this->assertEquals($expected, $result);
    }

    public function buzzNumberProvider()
    {
      return[
        [5, true],
        [10, true],
        [15, true],
        [8, false],
        [20, true],
        [25, true],
        [30, true],
      ];
    }

    /**
    * @test
    * @dataProvider fizzBuzzNumberProvider
    */

    public function itRetursFizzBuzzIfLastTwoConditionsApply($value, $expected)
    {
      $fizzbuzz = new fizzBuzz();
      $result = $fizzbuzz->isFizzBuzz($value);
      $this->assertEquals($expected, $result);
    }

    public function fizzBuzzNumberProvider()
    {
      return[
        [15, true],
        [30, true],
        [45, true],
        [60, true],
        [75, true],
        [90, true],
        [92, false],
      ];
    }

    /**
    * @test
    * @dataProvider listValuesProvider
    */
    public function itReturnsTheCorrectReplacementForEachValue($value,$expected)
    {
      $result = Fizzbuzz::getReplacement($value);
      $this->assertEquals($expected, $result);
    }

    public function listValuesProvider()
    {
      return[
        [1, 1],
        [2, 2],
        [3, 'Fizz'],
        [4, 4],
        [5, 'Buzz'],
        [15, 'FizzBuzz']
      ];
    }

}
