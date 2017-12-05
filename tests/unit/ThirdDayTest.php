<?php

use leovujanic\adventofcode\ThirdDay;

/**
 * Class ThirdDayTest
 */
class ThirdDayTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    /**
     * @var ThirdDay
     */
    protected $day;
    
    protected function _before()
    {
        $this->day = new ThirdDay();
    }
    
    
    public function testFirstSolution()
    {
        $actual = $this->day->first(325489);
        
        $this->assertEquals(552, $actual);
    }
    
    
    public function atestSecondSolution()
    {
        $actual = $this->day->second(325489);
        
        $this->assertEquals(325489, $actual);
    }
}
