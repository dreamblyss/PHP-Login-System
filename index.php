<?php 

//allow the config
define('__CONFIG__', true);
//Require the config
require_once 'inc/config.php';

?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">
    <title>FRIENDS OF JESUS CHRIST IGM LOGIN SYSTEM</title>
    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css" />
</head>

<body>


<div class="uk-section uk-container">

<?php 

    echo "Hello World! Today is";
    echo date("Y m d");

?>







<?php require_once "inc/footer.php"; ?>

<p>
<a href="/login.php">Login</a>

<a href="/register.php">Register</a>
</p>

</div>

</body>

</html>