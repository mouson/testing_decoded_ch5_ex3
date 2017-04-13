<?php
namespace Tests\Unit;

use Mockery as m;
use Tests\TestCase;

class CalculatorTest extends TestCase {

    protected function tearDown()
    {
        m::close();
    }

    /**
     * @test
     */
    public function testInstance()
    {
        /** Arrange */
        $target = new Calculator;

        /** Assume */

        /** Act */

        /** Assert */

    }
}
