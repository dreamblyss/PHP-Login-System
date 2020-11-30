LOGIN



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
    echo "Hello";
    echo "World! Today is";
    echo date("Y m d");

?>



<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
<form class="uk-form-stacked js-login">

<h2>Login</h2>

<!--Email-->
<div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">Email</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com" required />
    </div>
</div>

<!--Password-->
<div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">Password</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-stacked-text2" type="password" placeholder="Your Password" required />
    </div>
</div>

<!--Submit Button-->
<div class="uk-margin">
    <button class="uk-button uk-button-default" type="submit">Login</button>
</div>


</form>

</div>



<?php require_once "inc/footer.php"; ?>



</div>

</body>

</html>