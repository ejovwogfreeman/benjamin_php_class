<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['myname'])) {
        echo htmlspecialchars($_POST['myname']);
    } else {
        echo 'Name is required';
    }
};

$date = date('Y/m/d');
echo $date;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method='POST'>
        <input type="text" name="myname" id="" placeholder="entr your name">
        <button>submit</button>
    </form>
</body>

</html>