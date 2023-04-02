<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class PalindromeUtilitiesTest extends TestCase
{
    protected $palindromeUtilities;

    public function setUp(): void
    {
        $this->palindromeUtilities = new PalindromeUtilities();
    }

    public function dataProviderTestSubstringValues()
    {
        return [
            [1, 1, 'e'],
            [2, 1, 'es'],
            [2, 2, 's'],
            [3, 1, 'est'],
            [3, 2, 'st'],
        ];
    }

    /** 
     * @test
     * @dataProvider dataProviderTestSubstringValues
     */
    public function test_get_substring_function($valueOne, $valueTwo, $expectedResult)
    {
        $result = $this->palindromeUtilities->getSubString('teststring', $valueOne, $valueTwo);

        $this->assertEquals($expectedResult, $result);
    }

    /** 
     * @test
     */
    public function test_is_string_a_palindrome_function()
    {
        $this->assertTrue($this->palindromeUtilities->isTheStringPalindrome('php'));
        $this->assertNotTrue($this->palindromeUtilities->isTheStringPalindrome('john'));
    }
}
