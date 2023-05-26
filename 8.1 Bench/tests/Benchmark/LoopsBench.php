<?php

namespace emgiezet\Tests\Benchmark;

final class LoopsBench
{
    /**
     * @Revs(100000)
     *
     */
    public function benchFor()
    {
        $array = array_map(static function () {
            return random_int(0, 1000);
        }, array_fill(0, 10000, null));
        
        for($i=0; $i<10000; $i++) {
            $elem = $array[$i];
        }
    }
    /**
     * @Revs(100000)
     *
     */
    public function benchForeach()
    {
        $array = array_map(static function () {
            return random_int(0, 1000);
        }, array_fill(0, 10000, null));
        
        foreach ($array as $elem) {
        }
        
    }
    /**
     * @Revs(100000)
     *
     */
    public function benchWhile()
    {
        $array = array_map(static function () {
            return random_int(0, 1000);
        }, array_fill(0, 10000, null));
        $i = 10000;
        while ($i > 0) {
            $elem = $array[$i];
            $i--;
        }
    }
    /**
     * @Revs(100000)
     *
     */
    public function benchDoWhile()
    {
        $array = array_map(static function () {
            return random_int(0, 1000);
        }, array_fill(0, 10000, null));
        $i = 10000;
        do {
            $elem = $array[$i];
            $i--;
        } while ($i > 0);
    }
}
