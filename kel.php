<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelvin Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Kelvin to Celcius</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
    <label>Enter your kelvin value</label>
    <input type="number" name="kel">

    <input type="submit" value="Convert">
</fieldset>
<p><a href="">Reset</a></p>
</form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['kel'])) {
        $kel = $_POST['kel'];
        // use a new function to make values into intergers
        $kel_int = intval($kel);
        $cel = ($kel_int - 273.15);

    // if the end user does not enter a value, say something

    if($kel == NULL) {
        echo '<p class="error">Please fill out the Farenheit Value!</p>';

    } elseif($cel <= 32) {
        echo '<p> '.$kel_int.' kelvin equals '.$cel.' degrees celcius <br> 
        and it is pretty cold out there! </p>';

    }

    elseif($cel <= 45) {
        echo '<p> '.$kel_int.' kelvin equals '.$cel.' degrees celcius <br> 
        and it is getting warmer! </p>';

    } 
    elseif($cel <= 60) {
        echo '<p> '.$kel_int.' kelvin equals '.$cel.' degrees celcius <br> 
        and it is sweater weather! </p>';

    }

    elseif($cel <= 75) {
        echo '<p> '.$kel_int.' kelvin equals '.$cel.' degrees celcius <br> 
        and we\'re going to the park! </p>';

    }
    elseif($cel <= 90) {
        echo '<p> '.$kel_int.' kelvin equals '.$cel.' degrees celcius <br> 
        and we may be going to the beach! </p>';

    }

    else {
        echo '<p> '.$kel_int.' kelvin equals '.$cel.' degrees celcius <br> 
        and we are at the beach! </p>';

    }




    } //end isset



    } //end post