<?php


namespace Panda;


class TestCase
{
    private string $name = "";

    public function __construct($name) {
        $this->name = $name;
    }

    public function run() {
        if (is_callable([$this, $this->name])) {
            call_user_func(array($this, $this->name));
        } else {
            throw new \Exception("Not callable method");
        }
    }
}