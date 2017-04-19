<?php

namespace App;

class Calculator
{

    protected $result = 0;

    public function getResult()
    {
        return $this->result;
    }

    public function add()
    {
        foreach (func_get_args() as $num) {
            if (! is_numeric($num)) {
                throw new \InvalidArgumentException;
            }
            $this->result += $num;
        }
    }
}