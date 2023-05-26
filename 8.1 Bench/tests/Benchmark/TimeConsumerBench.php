<?php

namespace emgiezet\Tests\Benchmark;

use emgiezet\TimeConsumer;

class TimeConsumerBench
{
    /**
     * @Revs(1000)
     *
     */
    public function benchConsume()
    {
        $consumer = new TimeConsumer();
        $consumer->consume();
    }
}
