<?php
namespace Tests\Unit;

use App\Calculator;
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

    /**
     * @test
     */
    public function testResultDefaultToZero()
    {
        /** Arrange */
        $target = new Calculator;

        /** Assume */
        $expected = 0;

        /** Act */
        $actual = $target->getResult();

        /** Assert */
        $this->assertSame($expected, $actual);

    }
}
