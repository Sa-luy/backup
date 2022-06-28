<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    public function __construct()
    {
        $this->startTime = microtime(true);
    }
    public function getter_startTime()
    {
        return $this->startTime;
    }
    public function getter_endTime()
    {
        return  $this->endTime;
    }
    public function  start()
    {
        $this->startTime = microtime(true);
    }
    public function stop()
    {
        $this->endTime = microtime(true);
    }
    public function getElapsedTime()
    {
        $TimeRun = $this->endTime - $this->startTime;
        return $TimeRun;
    }
}

$time1 = new StopWatch();
$time1->start();
for ($i = 1; $i <= 100000000; $i++) {
    echo $i . '<br>';
}


$time1->stop();
echo $time1->getElapsedTime();