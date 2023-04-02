<?php

use phpDocumentor\Reflection\Types\Boolean;

class LongestPalindromeFinder extends PalindromeUtilities
{
    public function find(string $searchString): ?string
    {
        $stringLength = strlen($searchString);

        // Initialise the palindrome value to the first digit of the search string
        $palindrome = substr($searchString, 0, 1);

        for ($outerLoop = 0; $outerLoop < $stringLength; $outerLoop++) {
            for ($innerLoop = $outerLoop + 1; $innerLoop < $stringLength; ++$innerLoop) {
                $subString = $this->getSubString($searchString, $innerLoop, $outerLoop);

                if ($this->isTheStringPalindrome($subString) && strlen($subString) > strlen($palindrome)) {
                    $palindrome = $subString;
                }
            }
        }

        // If the length of the retrieved palindrome is less that 2 digits return null
        if (strlen($palindrome) < 2) {
            return null;
        }

        return $palindrome;
    }
}
