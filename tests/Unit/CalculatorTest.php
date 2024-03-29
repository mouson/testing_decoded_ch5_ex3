<?php
namespace Tests\Unit;

use App\Addition;
use App\Calculator;
use App\Multiplication;
use App\Subtract;
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
        $mock = m::mock(Addition::class);
        $mock->shouldReceive('run')
            ->once()
            ->with(5, 0)
            ->andReturn(5);
        $this->calc->setOperation($mock);

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
        $this->calc->setOperands("five");
        $this->calc->setOperation(new Addition);

        /** Assume */
        $this->expectException(\InvalidArgumentException::class);

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */

    }

    /**
     * @test
     */
    public function testAcceptsMultipleArgs()
    {
        /** Arrange */
        $this->calc->setOperands(1, 2, 3, 4);
        $this->calc->setOperation(new Addition);

        /** Assume */
        $expected = 10;

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function testSubtractNumbers()
    {
        /** Arrange */
        $this->calc->setOperands(4);
        $this->calc->setOperation(new Subtract);

        /** Assume */
        $expected = -4;

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function testMultipliesNumbers()
    {
        /** Arrange */
        $this->calc->setOperands(3, 3, 3);
        $this->calc->setOperation(new Multiplication);

        /** Assume */
        $expected = 27;

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
        $this->assertSame($expected, $actual);
    }
}
