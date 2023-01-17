<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celcius to Farenheit</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
    <label>Enter your celcius value</label>
    <input type="number" name="cel">

    <input type="submit" value="Convert">
</fieldset>
<p><a href="">Reset</a></p>
</form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        // use a new function to make values into intergers
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) + 32;

    // if the end user does not enter a value, say something

    if($cel == NULL) {
        echo '<p class="error">Please fill out the Celcius Value!</p>';

    } elseif($far <= 32) {
        echo '<p> '.$cel_int.' degrees celcius equals '.$far.' degrees farenheit <br> 
        and it is pretty cold out there! </p>';

    }

    elseif($far <= 45) {
        echo '<p> '.$cel_int.' degrees celcius equals '.$far.' degrees farenheit <br> 
        and it is getting warmer! </p>';

    } 
    elseif($far <= 60) {
        echo '<p> '.$cel_int.' degrees celcius equals '.$far.' degrees farenheit <br> 
        and it is sweater weather! </p>';

    }

    elseif($far <= 75) {
        echo '<p> '.$cel_int.' degrees celcius equals '.$far.' degrees farenheit <br> 
        and we\'re going to the park! </p>';

    }
    elseif($far <= 90) {
        echo '<p> '.$cel_int.' degrees celcius equals '.$far.' degrees farenheit <br> 
        and we may be going to the beach! </p>';

    }

    else {
        echo '<p> '.$cel_int.' degrees celcius equals '.$far.' degrees farenheit <br> 
        and we are at the beach! </p>';

    }




    } //end isset



    } //end post