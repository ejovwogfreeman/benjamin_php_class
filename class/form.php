<?php

// $name = 'Godbless';

// $name = isset($_POST['name']) ? $_POST['name'] : '';
// $email = isset($_POST['email']) ? $_POST['email'] : '';

// $name = $email = $nameErr = $emailErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $nameErr = 'Name is required';
    }

    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $emailErr = 'Email is required';
    }


    $sql = "INSERT INTO blogs (title, content) VALUES ($name, $content)";

    $sql_query = mysqli_query($conn, $sql);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>Hello <?php echo $name; ?></h1>
    <form action="" id="form" method="GET">
        <label for="">Name</label><br>
        <input type="text" name='name' value="<?php echo !empty($name) ? $name : '';  ?>"> <br>
        <?php echo !empty($nameErr) ? $nameErr : '';  ?>
        <br><br>
        <label for="">Email</label><br>
        <input type="email" name='email' value="<?php echo !empty($email) ? $email : '';  ?>"> <br>
        <?php echo !empty($emailErr) ? $emailErr : '';  ?>
        <br><br>
        <button>SUBMIT</button>
    </form>
    <div>
        <?php
        if (!empty($name) && !empty($email)) {
            echo $name;
            echo $email;
        }
        ?>
    </div> -->



</body>
<script>
    // let form = document.getElementById('form')
    // let nameInput = document.getElementById('name')
    // let emailInput = document.getElementById('email')

    // form.addEventListener('submit', (e) => {
    //     e.preventDefault()
    //     console.log(nameInput.value, emailInput.value)
    // })

    // let form = document.querySelector('form')
    // form.addEventListener('submit', (e) => {
    //     e.preventDefault()
    //     console.log(form.name.value)
    //     console.log(form.email.value)
    // })
</script>

</html>