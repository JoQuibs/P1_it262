<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Page</title>
    <style>
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
    background-color: gray;
}

form{
    max-width:400px;
    margin: 0 auto 10px auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input, textarea{
    width: 100%;
    display: block;
    margin-bottom: 10px;
    height: 30px;
}

textarea{
    resize: none;
    height: 120px;
}

input[type=submit] {
    width: auto;
    color: purple;
    font-weight: bold;
}

fieldset{
    border: 1px solid #800;
    padding: 10px;
}
h1 {
    text-align: center;
    margin: 20px 0;
    color: purple;
}
h2{
    text-align: center;
    margin-bottom: 10px;
}
p {
    text-align: center;
    margin-top: 10px;
}

.error{
    color:red;
    font-style: italic;
    font-size: .9em;
    margin-top: 15px;
}
.box {
    width: 400px;
    border: 1px solid green;
    margin: 20px auto;
    padding: 10px;
}
    </style>
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