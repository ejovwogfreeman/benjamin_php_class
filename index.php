<?php // opening php tag

// php output
// 1) echo - (for string) print stuffs on browser (can also print multiple stuffs)
// 2) print - (for string) print out single stuff on the browser
// 3) pirnt_r - (for array)
// 3) var_dump - (showing data types)
// 4) var_export - (showing values)
// echo '<h1 style="color: red">Hello php</h1>', '<br>', 'heiiii', '<br>', 'testing php';
// print('Hello print statement');

// print_r(['godbless', 'benjamin', 'emmanuel']);

// $my_var = 'Hello world';

// var_dump($my_var);

// var_export($my_var);

// variable and data types

// variable - its container for storing values
// they are declared using the dollar sign ($)

// $income = 5000;
// $expense = 200;
// $balance = $income - $expense;

// echo 'balance: ' . $balance;

// php data types
// (1-5 are primitive data types)
// 1) integer - whole numbers
// 2) float - numbers with decimal point
// 3) string - sequence of characters enclosed in single or double quotes
// 4) boolean - true or false statement (could also be an evaluation whose result is true or false)
// 5) null - means empty

// (reference data types - seen as a resource)
// 6) array [simple, associative, multidimensional]
// 7) object (Classes/OOP)

// indexed array
// $my_var = ['gb', 'ben', 'maxwell'];

// associative array
// $my_var = ['name' => 'godbless', 'email' => 'gb@gmail.com', 'isAdmin' => true];

// multidimensional array
// $my_var = [
//     ['name' => 'godbless', 'email' => 'gb@gmail.com', 'isAdmin' => true],
//     ['name' => 'benjamin', 'email' => 'ben@gmail.com', 'isAdmin' => false],
//     ['name' => 'maxwell', 'email' => 'max@gmail.com', 'isAdmin' => false]
// ];

// var_dump($my_var);

// string concatenation
// $name = 'Godbless';
// $age = 30;

// string concatenation
// $sentence = 'Hello my name is ' . $name . ' and i am ' . $age . ' years old';

// similar to js backticks or template literals
// $sentence = "Hello my name is $name and i am $age years old";

// echo $sentence;

// PHP Operators
// Operators are used to perform operations on variables and values.

// PHP divides the operators in the following groups:

// Arithmetic operators (+, -, *, /)
// Assignment operators (=, +=, -=, *=, /=)
// Comparison operators (>, <, >=, <=, ==, !=)
// Increment/Decrement operators (++, --)
// Logical operators (&&, ||, !)
// String operators (., .=)
// Conditional assignment operators

// Arithmetic operators
// $x = 63;
// $y = 20;

// // addition
// $z = $x + $y;

// // subtraction
// $z = $x - $y;

// // multiplication
// $z = $x * $y;

// // division
// $z = $x / $y;

// // power
// $z = $x ** 2;

// modulus
// $z = $x % $y;
// echo $z;

// Assignment operators (=, +=, -=)
// $name = 'Benjamin';

// $x = 25;

// $x += 5;
// $x -= 5;
// $x *= 5;
// $x /= 5;

// echo $x;

// comparism operators
// $x = 25;

// if ($x <= 25) {
//     echo 'X is 25';
// }
// var_dump($x < 10);


// increment/decrement
// $x = 25;

// $x--;

// echo $x;

// $x = 25;
// $y = 30;

// // && - all expressions must evaluate to true
// if ($x > 23 && $y > 28 && 9 < 8) {
//     echo 'all passed';
// } else {
//     echo 'one failed';
// }

// || - atleast one expression must evaluate to true
// if ($x < 23 || $y > 108 || 9 < 8) {
//     echo 'true';
// } else {
//     echo 'otherwise';
// }

// $name = 'Godbless';

// $sentence = 'Hello my name is ' . $name;

// echo $sentence;

// $name .= ' is a developer';

// echo $name;

// $x = 23;

// if ($x == 23) {
//     echo 'x is 23';
// } else {
//     echo 'x is not 23';
// }

// ternary operator
// echo $x == 23 ? 'x is 23' : NULL;

// null coalescing operator
// echo $x = 23 ?? 'x is 23';


// php conditionals

// $x = 29;

// if statement
// if ($x == 23) {
//     echo 'x is 23';
// }

// if/else statment
// if ($x == 23) {
//     echo 'x is 23';
// } else {
//     echo 'x is not 23';
// }

// if/elseif/else
// $color = 'pink';
// if ($color == 'blue') {
//     echo 'your color is blue';
// } elseif ($color == 'red') {
//     echo 'your color is red';
// } elseif ($color == 'green') {
//     echo 'your colro is green';
// } else {
//     echo 'none of the above';
// }

// switch statments: are similar to if/elseif/else

// $color = 'pink';

// switch ($color) {
//     case 'blue':
//         echo 'your color is blue';
//         break;
//     case 'red':
//         echo 'your color is red';
//         break;
//     case 'green':
//         echo 'your color is green';
//         break;
//     default:
//         echo 'none of the above';
//         break;
// }

$color = 'blue';
$colorVal = '#0000ff';

if ($color == 'blue') {
    if ($colorVal == '#0000ff') {
        echo 'color is blue and its value is #0000ff';
    }
} else {
    echo 'not a match at all';
}

?>
<!-- closing php tag -->