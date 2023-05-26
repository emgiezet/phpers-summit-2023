<?php

namespace emgiezet\Tests\Benchmark;

use emgiezet\TimeConsumer;

final class IssetBench
{
    private $array = ['a'=>1,'b'=>2,'c'=>3,'d'=>4, 'e'=>5,'f'=>6,'g'=>7];
    /**
     * @Revs(10000)
     *
     */
    public function benchIsset()
    {
        if(isset($this->array)){
        
        }
    }
    /**
     * @Revs(10000)
     *
     */
    public function benchSizeof()
    {
        if(sizeof($this->array) > 0) {
        
        }
    }
    /**
     * @Revs(10000)
     *
     */
    public function benchCount()
    {
        if(count($this->array) > 0) {
        
        }
    }
}
