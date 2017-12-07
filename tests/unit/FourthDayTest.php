<?php

use leovujanic\adventofcode\FourthDay;

/**
 * Class FourthDayTest
 */
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
    
    /**
     * @var
     */
    protected static $input;
    
    
    public static function setUpBeforeClass()
    {
        self::$input = file_get_contents(codecept_data_dir() . '/days/fourth-day-input.txt');
    }
    
    
    protected function _before()
    {
        $this->day = new FourthDay();
    }
    
    
    public function testFirstSolution()
    {
        $result = $this->day->first(self::$input);
        
        $this->tester->assertEquals(325, $result);
    }
    
    
    public function testSecondSolution()
    {
        $result = $this->day->second(self::$input);
        
        $this->assertEquals(119, $result);
    }
}
