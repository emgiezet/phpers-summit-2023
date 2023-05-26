<?php

namespace emgiezet\Tests\Benchmark;

final class MathBench
{

    /**
     * @Revs(100000)
     *
     */
    public function benchBcmul()
    {
       $result = bcmul('1.232123123123', '2.12312313123',2);
    }
    /**
     * @Revs(100000)
     *
     */
    public function benchMultiply()
    {
        $result = round(1.232123123123 + 2.12312313123, 2);
        
    }
}
