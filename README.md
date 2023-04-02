# Expansive Technical Task - Longest Palindrome

A palindrome is a string which reads the same backward as it
does forward.

The candidate should create a solution that, when given a string input, returns the longest
palindrome **substring** within the provided string. 

For example, in the string "I drive a red racecar",
"racecar" would be the longest palindrome findable. 
If a palindrome of at least two characters cannot be found, return `NULL`.

### The successful candidate will:
* **Demonstrate their solution through unit tests**

### Test Cases:
_The candidate can demonstrate the following input/outputs through the use of
unit tests_

Input (palindromes underlined) | Expected Output
--- | ---
No Palindrome|`NULL`
<u>php</u>|php
b<u>anana</u>|anana
<u>papaya</u>|pap*
Lets v<u>isi</u>t the z<u>oo</u>|isi

*if multiple of the same length, return the first found.

### Usage
Please ensure that php and composer are installed on your computer.

The vendor directory has been removed, please install packages using the command below in a terminal at the project root:
`composer install`

You may get a message stating that you need to perform a compoer update, issue this command:
`composer update`

To run the unit tests issue this command:
`./vendor/bin/phpunit tests`
