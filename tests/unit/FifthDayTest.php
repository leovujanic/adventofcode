<?php

use leovujanic\adventofcode\FifthDay;

/**
 * Class FifthDayTest
 */
class FifthDayTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    /**
     * @var FifthDay
     */
    protected $day;
    
    /**
     * @var array
     */
    protected static $input;
    
    protected function _before()
    {
        $this->day = new FifthDay();
    }
    
    public static function setUpBeforeClass()
    {
        $contents = file_get_contents(codecept_data_dir() . '/days/fifth-day-input.txt');
        
        self::$input = explode("\n", $contents);
    }
    
    
    public function testFirstSolution()
    {
        $result = $this->day->first(self::$input);
        
        $this->tester->assertEquals(373543, $result);
    }
    
    
    public function testSecondSolution()
    {
        $result = $this->day->second(self::$input);
        
        $this->tester->assertEquals(27502966, $result);
    }
    
    
    public function testFirstSolution_ExampleArrayAsInput_ExpectsResultIsEqualToFive()
    {
        $result = $this->day->first([0, 3, 0, 1, -3]);
        
        $this->tester->assertEquals(5, $result);
    }
    
    
    public function testSecondSolution_ExampleArrayAsInput_ExpectsResultIsEqualToTen()
    {
        $result = $this->day->second([0, 3, 0, 1, -3]);
        
        $this->tester->assertEquals(10, $result);
    }
}
