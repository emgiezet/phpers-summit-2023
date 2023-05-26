<?php declare(strict_types=1);
namespace emgiezet;

class TimeConsumer
{
    public function consume(): void
    {
        usleep(100);
    }
}
