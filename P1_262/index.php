<?php
//initalize variables
$input = '';
$conversion = '';
$msg = '';

#set conversion functions here=============================================
function fahrToCel($arg) {
    $num = $arg;
    $int_val = intval($num);
    $conversion = ($int_val - 32) * 5/9;
    return $conversion;
}

function fahrToKel($arg){
    $num = $arg;
    $int_val = intval($num);
    $conversion = ($int_val - 32) * 5/9 + 273.15;
    return $conversion;
}

function celToKel($arg){
    $num = $arg;
    $int_val = intval($num);
    $conversion = $int_val + 273.15;
    return $conversion;
}

function celToFahr($arg) {
    $num = $arg;
    $int_val = intval($num);
    $conversion = ($int_val * 9/5) + 32;
    return $conversion;
}

function kelToFahr($arg){
    $num = $arg;
    $int_val = intval($num);
    $conversion = ($int_val - 273.15) * 9/5 + 32;
    return $conversion;
}

function kelToCel($arg){
    $num = $arg;
    $int_val = intval($num);
    $conversion = $int_val - 273.15;
    return $conversion;
}

#=======================================================================

//check server request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Check POST associate array
    if (!empty($_POST['userInput'])) {
        $input = intval($_POST['userInput']);
    } //This is a Ternary operator, condition ? true:false

    //if both toggle empty, print warning
    if (!array_key_exists('tempA',$_POST) && !array_key_exists('tempB',$_POST)) {
        $msg = '<p class="error">Please pick two temperatures to convert</p>';

    } else {//keys exist
     
        //if one is toggled and not the other, print warning
    if (isset($_POST['tempA']) && !isset($_POST['tempB'])) {
        $msg = '<p class="error">Please pick a temperature type</p>';
    }
    if (!isset($_POST['tempA']) && isset($_POST['tempB'])) {
        $msg = '<p class="error">Please pick a temperature to convert</p>';
    }

#============================================================================
    //if tempA and tempB are the same
    if($_POST['tempA']=='fahr' && $_POST['tempB']=='cel') {

        if(empty($input)) {//if no value in input
            $msg= '<p class="error">input a value</p>';//return message
        }
            //
            $conversion = fahrToCel($input);//else, execute function and save to variable
        
        } else if($_POST['tempA']=='fahr' && $_POST['tempB']=='kel') {
            $conversion = fahrToKel($input);
        
        } else if($_POST['tempA']=='cel' && $_POST['tempB']=='fahr') {
            $conversion = celToFahr($input);
        
        } else if($_POST['tempA']=='cel' && $_POST['tempB']=='kel') {
            $conversion = celToKel($input);
        
        } else if($_POST['tempA']=='kel' && $_POST['tempB']=='fahr') {
            $conversion = kelToFahr($input);
        
        } else if($_POST['tempA']=='kel' && $_POST['tempB']=='cel') {
            $conversion = kelToCel($input);
        
        } 
    //turn this to elseif and write something similar to line 35 to 42 but custom to each temp function
    


#===================================================================================
    }//end else
}//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Project</title>
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="" method="POST">
    <fieldset>
        <legend>Temperature Converter</legend>
        <label>Input Number:</label>
      <input type="number" name="userInput" value="<?php if (
          isset($_POST['userInput'])
      ) {
          echo $_POST['userInput'];
      } ?>">
<!-- Temp toggle container -->
    <!-- Temp A here  -->
        <label>Temperature Type:</label>
        <ul>
        <li><input type="radio" name="tempA" value="fahr"> Fahrenheit</li>
        <li><input type="radio" name="tempA" value="cel"> Celsius</li>
        <li><input type="radio" name="tempA" value="kel"> Kelvin</li>
        </ul>

    <!-- Temp B here -->
        <label>Convert To:</label>
        <ul>
        <li><input type="radio" name="tempB" value="fahr"> Fahrenheit </li>
        <li><input type="radio" name="tempB" value="cel"> Celsius</li>
        <li><input type="radio" name="tempB" value="kel"> Kelvin</li>
        </ul>
    <input type="submit" value="Convert">
    <a href=''>Reset</a>
    </fieldset>
</form>
    <?php

    echo 'The conversion of '.$input.' from '.$_POST['tempA'].' to '.$_POST['tempB'].' is equal to '.$conversion.' degrees';
    ?>
    
</body>
</html>
