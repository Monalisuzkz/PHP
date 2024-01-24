<?php

//Numbers
$first_num = 136;
$sec_num = 136.58;

echo "First number: " . $first_num;
echo "\nSecond number: " . $sec_num;

//Addition and Subtraction
echo "\nTotal: " . 6 + 6;
echo "\nTotal: " . -6 - 6;
echo "\nTotal: " . 10 * 10;
echo "\nTotal: " . 20 / 10;

//Using Number Variables
$last_month = 1903.54;
$this_month = 1000.32;

$total_spent = $last_month - $this_month;

echo "\nTotal Spent: " . $total_spent;

//Multiplication and Division
$num_languages = 4;
$months = 11;

$days = 16 * $months;
echo "\nDays: " . $days;

$days_per_language = $days / $num_languages;
echo "\nDays per language: " . $days_per_language;

//Exponentiation
/*
For example, we can square a number by raising it to the power of 2:
*/
$exponent = 4 ** 2; // echo 2 * * 3; // Will result in an error.
echo "\nExponent: ". $exponent;


//Modulo
echo "\nModulo: " . 7 % 3; //Prints 1

$num_cookies = 27;
$cookies_per_serving = 4;

$leftover_cookies = $num_cookies % $cookies_per_serving;
echo "\nCookies Left: " . $leftover_cookies;

//Another example of Modulo
$students = 82;
$groups = 6;

$students_left = $students % $groups;
echo "\nStudents Left: " . $students_left;

//Order of Operation
echo "\nOrder of operations: " . 2 + 3 + 4 + 5 - 1.1;
echo "\nOrder of operations: " . 2 * 9 / 6;

/*
Operations will be evaluated in the following order:

Any operation wrapped in parentheses (())
Exponents (**)
Multiplication (*) and division (/)
Addition (+) and subtraction (-). 

*/
echo "\nOrder of operations: " . 1 + 3 * 9;
echo "\nOrder of operations: " . (1 + 3) * 9;

/*
Heya! Can you help me out. Use echo to print the answer to the terminal.

I’m trying to figure out how much money I should have. At the start of the day I had $94.

I spent $4.25 on coffee
A friend gave me $7 that he owed me
I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
Some friends and I found $20 on the ground and split it four ways
I think that’s everything.

Use a single chained operation to get your result!
 */

 echo "\n Total spent Result: " . 94 - 4.25 + 7 - 23.50 * 1.20 + 20 / 4;

//Mathematical Assignment Operators
$savings = 800;
$bike_cost = 75;
$savings -= $bike_cost;
echo "\nTotal savings: " . $savings;

$age = 19;
$age++;
echo "\nAge: " . $age;
$age--;
echo "\nAge: " . $age;

//Another example of Mathematical Assignment Operators

$my_num = 20;
$answer = $my_num;

$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;

echo "\nAnswer: " . $answer -= $my_num;