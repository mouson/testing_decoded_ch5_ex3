<?php

namespace App;

class Subtract implements Operation
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
        return $current - $num;
    }
}