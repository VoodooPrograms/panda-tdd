<?php


namespace Panda;


class WasRun extends TestCase {

    private ?bool $was_run = null;

    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function testMethod() {
        $this->was_run = true;
    }

    /**
     * @return bool|null
     */
    public function getWasRun(): ?bool {
        return $this->was_run;
    }

}