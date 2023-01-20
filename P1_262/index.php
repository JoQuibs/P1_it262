<?php
//initalize variables
$input = '';
$conversion = '';
$msg = '';

function fahrToCel($arg)
{
    $num = $arg;
    $int_val = intval($num);
    $conversion = (($int_val - 32) * 5) / 9;
    return $conversion;
}

function fahrToKel($arg)
{
    $num = $arg;
    $int_val = intval($num);
    $conversion = (($int_val - 32) * 5) / 9 + 273.15;
    return $conversion;
}

function celToKel($arg)
{
    $num = $arg;
    $int_val = intval($num);
    $conversion = $int_val + 273.15;
    return $conversion;
}

function celToFahr($arg)
{
    $num = $arg;
    $int_val = intval($num);
    $conversion = ($int_val * 9) / 5 + 32;
    return $conversion;
}

function kelToFahr($arg)
{
    $num = $arg;
    $int_val = intval($num);
    $conversion = (($int_val - 273.15) * 9) / 5 + 32;
    return $conversion;
}

function kelToCel($arg)
{
    $num = $arg;
    $int_val = intval($num);
    $conversion = $int_val - 273.15;
    return $conversion;
}

function conversionMsg($input, $conversion)
{
    return '<p class = "result">The conversion of <b>' .
        $input .
        '</b> from <b>' .
        strtoupper($_POST['tempA'][0]) .
        '°</b> to <b>' .
        strtoupper($_POST['tempB'][0]) .
        '°</b> is equal to <b>' .
        number_format((float) $conversion, 2) .
        '</b> degrees!</p>';
}

//check server request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Check POST associate array
    if (empty($_POST['userInput'])) {
        $msg = 'Please input a value';
    } else {
        $input = intval($_POST['userInput']);

        //if both toggle empty, print warning
        if (
            !array_key_exists('tempA', $_POST) &&
            !array_key_exists('tempB', $_POST)
        ) {
            $msg = 'Please pick two temperatures to convert';
        } else {
            //keys exists
            //if one is toggled and not the other, print warning
            if (isset($_POST['tempA']) && !isset($_POST['tempB'])) {
                $msg = 'Please pick a temperature type ';
            } elseif (!isset($_POST['tempA']) && isset($_POST['tempB'])) {
                $msg = 'Please pick a temperature to convert';
            } else {
                //temp combo options
                if ($_POST['tempA'] == 'fahr' && $_POST['tempB'] == 'cel') {
                    $conversion = fahrToCel($input);
                    $msg = conversionMsg($input, $conversion);
                } elseif (
                    $_POST['tempA'] == 'fahr' &&
                    $_POST['tempB'] == 'kel'
                ) {
                    $conversion = fahrToKel($input);
                    $msg = conversionMsg($input, $conversion);
                } elseif (
                    $_POST['tempA'] == 'cel' &&
                    $_POST['tempB'] == 'fahr'
                ) {
                    $conversion = celToFahr($input);
                    $msg = conversionMsg($input, $conversion);
                } elseif (
                    $_POST['tempA'] == 'cel' &&
                    $_POST['tempB'] == 'kel'
                ) {
                    $conversion = celToKel($input);
                    $msg = conversionMsg($input, $conversion);
                } elseif (
                    $_POST['tempA'] == 'kel' &&
                    $_POST['tempB'] == 'fahr'
                ) {
                    $conversion = kelToFahr($input);
                    $msg = conversionMsg($input, $conversion);
                } elseif (
                    $_POST['tempA'] == 'kel' &&
                    $_POST['tempB'] == 'cel'
                ) {
                    $conversion = kelToCel($input);
                    $msg = conversionMsg($input, $conversion);
                } else {
                    // temp same, please try again
                    $msg = conversionMsg($input, $input);
                }
            } 
        } 
    } 
}

//end server request
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
    </fieldset>
</form>
    <?php
    echo '<pre>';
    echo var_dump($_POST);
    echo var_dump($input) . 'input--line 140 <br>';
    echo var_dump($msg) . 'msg==line141     ';
    echo '</pre>';
    echo $conversion;
    ?>
    
</body>
</html>
