<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class LongestPalindromeFinderTest extends TestCase
{
    protected $finder;

    public function setUp(): void
    {
        $this->finder = new LongestPalindromeFinder();
    }

    public function dataProviderPalindromeTestValues()
    {
        return [
            ['No Palindrome', null],
            ['php', 'php'],
            ['banana', 'anana'],
            ['papaya', 'pap'],
            ['Lets visit the zoo', 'isi'],
        ];
    }

    /** 
     * @test
     * @dataProvider dataProviderPalindromeTestValues
     * */
    public function test_sending_actual_string($searchString, $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->finder->find($searchString));
    }
}
