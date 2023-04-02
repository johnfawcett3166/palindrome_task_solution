<?php

class PalindromeUtilities
{
    public function isTheStringPalindrome(string $string): bool
    {
        return strrev($string) === $string;
    }

    public function getSubString(string $string, int $offset, int $length): string
    {
        return substr($string, $length, $offset - $length + 1);
    }
}
