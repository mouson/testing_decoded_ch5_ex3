<?php
namespace Tests\Unit;

use App\Addition;
use App\Calculator;
use Mockery as m;
use Tests\TestCase;

class CalculatorTest extends TestCase {

    /** @var  Calculator */
    protected $calc;

    public function setUp(): void
    {
        $this->calc = new Calculator;
    }

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

        /** Assume */
        $expected = 0;

        /** Act */
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertSame($expected, $actual);

    }

    /**
     * @test
     */
    public function testAddNumbers()
    {
        /** Arrange */
        $this->calc->setOperands(5);
        $this->calc->setOperation(new Addition);

        /** Assume */
        $expected = 5;

        /** Act */;
        $actual = $this->calc->calculate();

            /** Assert */
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function testRequiresNumericValue()
    {
        /** Arrange */

        /** Assume */
        $this->expectException(\InvalidArgumentException::class);

        /** Act */
        $this->calc->add('five');

        /** Assert */

    }

    /**
     * @test
     */
    public function testAcceptsMultipleArgs()
    {
        /** Arrange */

        /** Assume */
        $expected = 10;

        /** Act */
        $this->calc->add(1, 2, 3, 4);
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function testSubtractNumbers()
    {
        /** Arrange */

        /** Assume */
        $expected = -4;

        /** Act */
        $this->calc->subtract(4);
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertSame($expected, $actual);
    }
}
