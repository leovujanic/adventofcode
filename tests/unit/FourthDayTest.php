<?php

use leovujanic\adventofcode\FourthDay;

class FourthDayTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    /**
     * @var FourthDay
     */
    protected $day;
    
    protected $input;
    
    
    protected function _before()
    {
        $this->day = new FourthDay();
        
        if ($this->input === null) {
            $this->input = file_get_contents(__DIR__ . '/../../src/inputs/fourth-day-input.txt');
        }
    }
    
    
    public function testFirstSolution()
    {
        $result = $this->day->first($this->input);
        
        $this->tester->assertEquals(325, $result);
    }
    
    
    public function testSecondSolution()
    {
        $result = $this->day->second($this->input);
        
        $this->assertEquals(119, $result);
    }
}
