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
$name = 'Godbless';
$age = 30;

// string concatenation
// $sentence = 'Hello my name is ' . $name . ' and i am ' . $age . ' years old';

// similar to js backticks or template literals
$sentence = "Hello my name is $name and i am $age years old";

echo $sentence;

?>
<!-- closing php tag -->