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
// 6) array [indexed, associative, multidimensional]
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

// Arithmetic operators (+, -, *, /, %, **)
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

// $color = 'blue';
// $colorVal = '#0000ff';

// if ($color == 'blue') {
//     if ($colorVal == '#0000ff') {
//         echo 'color is blue and its value is #0000ff';
//     }
// } else {
//     echo 'not a match at all';
// }

// $names = ['godbless', 'freeman', 'lancelot'];

// $my_obj = [
//     'name' => 'gb',
//     'email' => 'gb@gmail.com',
//     'isAdmin' => true
// ];

// $data = [
//     [
//         'amount' => 3000,
//         'type' => 'income',
//     ],
//     [
//         'amount' => 5000,
//         'type' => 'expense',
//     ],
//     [
//         'amount' => 8500,
//         'type' => 'income',
//     ],
// ];

// $income_array = [3000, 8500, 6000, 9000, 3500];
// $expense_array = [5000, 4000, 5000];

// $income = array_sum($income_array);
// $expense = array_sum($expense_array);
// $balance = $income - $expense;
// echo 'income: $' . number_format($income) . ' expense: $' . number_format($expense) . '<br>';
// echo "income: $income expense: $expense" . '<br>';
// echo 'balance: $' . number_format($balance);

// for loop
// for ($i = 0; $i <= 20; $i++) {
//     echo $i . '<br>';
// }

// $names = ['godbless', 'bishop', 'benjamin'];

// for ($i = 0; $i < count($names); $i++) {
//     echo $names[$i] . '<br>';
// }

// // while loop
// $x = 1;

// while ($x <= 20) {
//     echo $x . '<br>';
//     $x++;
// }

// $names = ['godbless', 'bishop', 'benjamin'];
// $x = 0;
// while ($x < count($names)) {
//     echo $names[$x] . '<br>';
//     $x++;
// }


// // do while loop
// $x = 26;

// do {
//     echo $x;
//     $x++;
// } while ($x <= 20)


// fraeach;
// $names = ['godbless', 'bishop', 'benjain', 'john', 'maxwell'];

// foreach ($names as $name) {
//     echo $name . '<br>';
// }

// $data = [
//     [
//         'amount' => 3000,
//         'type' => 'income',
//     ],
//     [
//         'amount' => 5000,
//         'type' => 'expense',
//     ],
//     [
//         'amount' => 8500,
//         'type' => 'income',
//     ],
// ];

// foreach ($data as $transaction) {
//     echo '<div style="background: black; color: white; paddiing: 10px">' . $transaction['amount'] . ' - ' . $transaction['type'] . '</div>';
// }

// break and continue

// // break - jups out of a loop
// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 7) {
//         break;
//     }
//     echo $i . '<br>';
// }

// // continue - jups a particular value and continue with the loop
// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 7) {
//         continue;
//     }
//     echo $i . '<br>';
// }

// functions - are block of codes designed to perform a particular task

// // syntax - without parameter/argument
// function functionName(){
//     codeblock;
// }

// // syntax - with parameter/argument
// function functionName(param1, param2, param3...etc){
//     codeblock;
// }

// function greet()
// {
//     echo 'Hello world';
// }

// greet();

// function greet($name)
// {
//     echo 'Hello ' . $name . '<br>';
// };

// greet('Godbless');
// greet('Benjamin');
// greet('Bishop');

// function addNums($a, $b)
// {
//     echo $a + $b;
// }

// addNums(3, 4);

// functions are supposed to use a return statement:
// the return statement stores the returned value in memory of the funcction

// function addNums($a, $b)
// {
//     return $a + $b;
// }

// echo addNums(3, 4);

// function with default value
// function greet($name = 'Godbless')
// {
//     return 'Hello ' . $name;
// }

// echo greet('Freeman');

// next class => sting functions and array functions

// assignment:

// 1) write a function that converts money in dollar to naira (using 1 dollar to 1600 naira)
// 2) write a function that converts temerature in kelvin to celcius
?>
<!-- closing php tag -->


<!-- <?php foreach ($data as $transaction): ?>
    <div class="transaction">
        <h2><?php echo $transaction['amount'] ?></h2>
        <span><?php echo $transaction['type'] ?></span>
    </div>
<?php endforeach; ?> -->

<!-- <style>
    .transaction {
        background-color: black;
        color: white;
        padding: 10px;
        margin-bottom: 3px
    }
</style> -->