<?php

namespace App;

class Multiplication implements Operation
{

    /**
     * Perform the arithmetic
     *
     * @param integer $num
     * @param integer $current
     *
     * @return integer
     */
    public function run($num, $current)
    {
        if ($current === 0) {
            return $num;
        }
        return $current * $num;
    }
}