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

<?php

// php string functions
// 1) strlen()
// 2) str_word_count()
// 3) strpos()
// 4) trim()
// 5) ltrim()
// 6) rtrim()
// 7) stubstr();
// 8) str_replace()
// 9) strtoupper()
// 10) strtolower();
// 11) ucfirst()
// 12) ucwords()
// 13) explode();


$name = 'godbless';

$sentence = 'Hello my name is godbless';

// echo strlen($name);
// echo str_word_count($sentence);

// echo strpos($sentence, 'l');

$mystr = ' Bishop is a funny man   ';

// echo strlen($mystr);

// echo '<br>';

// echo strlen(trim($mystr));

// echo strlen(ltrim($mystr));

// echo '<br>';

// echo strlen(rtrim($mystr));

// echo substr($name, 4, 4)

// echo str_replace('god', 'jesus', $name);

// echo strtoupper($name);
// echo strtolower($name);
// echo ucfirst($name);
// echo ucwords($sentence);

// print_r(explode(' ', $sentence));

// array functions
// 1) array()
// 2) count()
// 4) array_merge()
// 3) array_push()
// 5) array_pop()
// 6) array_shift()
// 7) array_unshift()
// 8) sort()
// 9) rsort()
// 10) in_array()
// 11) array_search()
// 12) array_key_exists()
// 13) sizeof()
// 14) array_keys()
// 15) array_values()
// 16) array_sum

// $myarr = array('godbless', 'benjamin', 'bishop');
// $myarr = ['godbless', 'benjamin', 'bishop'];

// $array2 = ['maxwell', 'collins'];

// print_r($myarr);

// echo count($myarr);

// print_r(array_merge($myarr, $array2));

// array_push($myarr, 20, 'maxwell', 'collins', '23', 'Boyles', 88, 'Zanku');

// array_pop($myarr);
// array_pop($myarr);
// array_pop($myarr);

// array_unshift($myarr, 'freeman', 'GB');

// array_shift($myarr);
// array_shift($myarr);
// array_shift($myarr);

// sort($myarr);

// print_r($myarr);

// $scores = [20, 30, 2, 15, 7, 1, 17];
// sort($scores);
// rsort($scores);
// print_r($scores);

// $names = ['gb', 'fm', 'ben', 'bis', 'lc'];

// $person = [
//     'name' => 'godbess',
//     'school' => 'codefest',
//     'isadmin' => true
// ];

// returns true if found and flaser if not found
// var_dump(in_array('maxwerll', $names));

// returns the index if found and false if not found
// var_dump(array_search('ben', $names));

// returns true if found and flaser if not found
// nb=> for indexed arrays, the index represents the keys
// var_dump(array_key_exists(0, $person))


// count() and size() returns the total of elements in the array
// echo sizeof($names);

// print_r(array_keys($person))
// print_r(array_values($person))


// $scores = [20, 30, 2];

// echo array_sum($scores);


// var_dump($GLOBALS);
// var_dump($_SERVER);

// $x = 23;

// function getGlobal()
// {
//     echo $GLOBALS['x'];
// }

// getGlobal();

// $x = 23;

// function getGlobal()
// {
//     global $x;
//     echo $x;
// }

// getGlobal();


// echo $_SERVER['PHP_SELF'];
// echo '<br>';
// echo $_SERVER['SERVER_NAME'];
// echo '<br>';
// echo $_SERVER['HTTP_HOST'];
// echo '<br>';
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo '<br>';
// echo $_SERVER['SCRIPT_NAME'];
// echo '<br>';
// echo $_SERVER['REQUEST_METHOD'];


// echo $_REQUEST['name'];

// echo $_POST['name'];
// echo $_GET['name'];

?>

<form action=<?php echo $_SERVER['PHP_SELF']; ?> method='GET'>
    <label for="">enter your name</label>
    <input type="text" name='name'>
    <button>submit</button>
</form>