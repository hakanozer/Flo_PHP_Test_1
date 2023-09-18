<?php

class Action
{

    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function sum( int $num1, int $num2 ) : int {
        $total = $num1 + $num2;
        return $total;
    }

    public function call() {
        return $this->name;
    }

}