<?php


namespace Tests;


use Panda\WasRun;
use PHPUnit\Framework\TestCase;

class TestTestCase extends TestCase {

    public function testRunning() {
        $test = new WasRun("testMethod");
        $this->assertNull($test->getWasRun());
        $test->run();
        $this->assertTrue($test->getWasRun());
    }
}