<?php

namespace emgiezet\Tests\Benchmark;

final class StrBench
{
    private string $string = 'The quick brown fox jumps over the lazy dog';
    /**
     * @Revs(10000)
     *
     */
//    public function bench()
//    {
//        if(isset($this->array)){
//
//        }
//    }
    /**
     * @Revs(10000)
     *
     */
    public function benchSizeof()
    {
        if(sizeof($this->string) > 0) {
        
        }
    }
    /**
     * @Revs(10000)
     *
     */
    public function benchCount()
    {
        if(count($this->string) > 0) {
        
        }
    }
}
