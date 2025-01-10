<?php
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    /**
     * Дата-провайдер для метода testMultiply.
     * Возвращает массив массивов с тестовыми данными.
     *
     * @return array<int, array{float|int, float|int, float|int}>
    */
    public function multiplyProvider(): array
    {
        return [
            [2, 5, 10],
            [3, 6, 18],
            [5, 6, 25],
            [2.3, 2, 4.6]
        ];
    }

    /**
     * Тестирует метод multiply() из класса Calc с использованием данных из multiplyProvider.
     *
     * @dataProvider multiplyProvider
    */
    public function testMultiply($a, $b, $expected)
    {
        $calc = new Calc();
        $result = $calc->multiply($a, $b);
        $this->assertEquals($expected, $result);
        return $result;
    }

    /**
     * @depends testMultiply
     * @dataProvider multiplyProvider
    */
    public function testSome($result)
    {
        $this->assertIsNumeric($result);
    }
}

class Calc
{
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}
