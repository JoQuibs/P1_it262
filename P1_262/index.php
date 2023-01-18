<?php
//initalize variables/functions
$input = '';
$msg = '';

#------fehr
function fehrTofehr()
{
    //Code here
    echo 'beep boop, fehr To fehr';
}
function fehrToCel()
{
    //Code here
    echo 'beep boop, fehr To Cel';
}
function fehrToKel()
{
    //Code here
    echo 'beep boop, fehr To Kel';
}

function celTofehr()
{
    //Code here
    echo 'beep boop, cel To fehr';
}
function celToCel()
{
    //Code here
    echo 'beep boop, cel To Cel';
}
function celToKel()
{
    //Code here
    echo 'beep boop, cel To Kel';
}
function kelTofehr()
{
    //Code here
    echo 'beep boop, kel To fehr';
}
function kelToCel()
{
    //Code here
    echo 'beep boop, kel To Cel';
}
function kelToKel()
{
    //Code here
    echo 'beep boop, kel To Kel';
}

//check server request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Check POST associate array
    if (!empty($_POST['userInput'])) {
        $input = intval($_POST['userInput']);
    } //This is a Ternary operator, condition ? true:false
    //if both toggle empty, print warning
    if (!isset($_POST['tempA']) && !isset($_POST['tempB'])) {
        $msg = 'Please pick two temperatures to convert';
    }
    //if one is toggled and not the other, print warning
    if (isset($_POST['tempA']) && !isset($_POST['tempB'])) {
        $msg = 'Please pick One temperatures to convert';
    }
    if (!isset($_POST['tempA']) && isset($_POST['tempB'])) {
        $msg = 'Please pick One temperatures to convert';
    }

    //if tempA and temp
}
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
    echo var_dump($input);
    echo var_dump($msg);
    echo '</pre>';

    ?>
    
</body>
</html>
