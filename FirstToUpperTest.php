<?php
use PHPUnit\Framework\TestCase;

class FirstToUpperTest extends TestCase
{
   /**
     * @return string[][]
    */
    public function stringProvider(): array
    {
        return [
            ['hello', 'Hello'],
            ['hello world', 'Hello world'],
            ['hello world!', 'Hello world!'],
            ['1hello', '1hello'],
            ['1 hello', '1 hello'],
            ['1 hello!', '1 hello!'],
            ['привет', 'Привет'],
            ['привет мир', 'Привет мир'],
            ['привет мир!', 'Привет мир!'],
            ['1привет', '1привет']
        ];
    } 

    /**
     * @dataProvider stringProvider
    */
    public function testToUpperFirstChar($string, $expected)
    {
        $firstToUpper = new FirstToUpper();
        $result = $firstToUpper->toUpperFirstChar($string);
        $this->assertEquals($expected, $result);
    }
        
}

class FirstToUpper
{
    public function toUpperFirstChar(string $string) :string {
        return ucfirst($string);
    }
}