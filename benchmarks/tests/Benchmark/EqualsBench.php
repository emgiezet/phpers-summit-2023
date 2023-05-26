<?php

namespace emgiezet\Tests\Benchmark;

final class EqualsBench
{
    private array $compare = [
            ['a','b'],
            ['$test',"test"],
            ['$test',"test"],
            ['b',1],
            [1,1],
            ['c',['array']],
            [2,1 ],
        ];

    /**
     * @Revs(100000)
     *
     */
    public function benchEqual()
    {
        foreach ($this->compare as $test) {
            if($test[0] == $test[1])
            {
            
            }
        }
    }
    /**
     * @Revs(100000)
     *
     */
    public function benchIdentical()
    {
        foreach ($this->compare as $test) {
            if($test[0] === $test[1])
            {
            
            }
        }
        
    }
}
