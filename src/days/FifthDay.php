<?php
/**
 * User: leonardvujanic
 * DateTime: 05/12/2017 10:14
 *
 *
 */

namespace leovujanic\adventofcode;

/**
 * Class FifthDay
 *
 * @package leovujanic\adventofcode
 */
class FifthDay
{
    
    /**
     * @param array $items
     *
     * @return int
     */
    public function first(array $items): int
    {
        return $this->countSteps($items);
    }
    
    /**
     * @param array $items
     *
     * @return int
     */
    public function second(array $items): int
    {
        return $this->countSteps($items, true);
    }
    
    /**
     * @param array $items
     * @param bool  $isSecond
     *
     * @return int
     */
    protected function countSteps(array $items, bool $isSecond = false): int
    {
        $itemsCount = count($items);
        $index = 0;
        $steps = 0;
        
        while ($index >= 0 && $index < $itemsCount) {
            $step = (int)$items[$index];
            
            $items[$index] += $step >= 3 && $isSecond ? -1 : 1;
            $index += $step;
            ++$steps;
        }
        
        return $steps;
    }
}
