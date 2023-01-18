<?php
//initalize variables


//check server request
if($_SERVER['REQUEST_METHOD'] =='POST') {
    //Check POST associate array
    empty($_POST['userInput']) ? : $_POST['userInput'] ; //This is a Ternary operator, condition ? true:false
    //if both toggle empty, print warning
   


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
    <p>Input Number: <input type="number" name="userInput" value="<?php if(isset($_POST['userInput'])) echo $_POST['userInput'];?>"/></p>
<!-- Temp toggle container -->
<div>
    <!-- Temp A here  -->
    <div>
        <p><input type="radio" name="tempA" value="fahr" /> Fahrenheit </p>
        <p><input type="radio" name="tempA" value="cel" /> Celsius</p>
        <p><input type="radio" name="tempA" value="kel" /> Kelvin</p>
    </div>
    <div>
        <p>Convert To</p>
    </div>
    <!-- Temp B here -->
    <div>
        <p><input type="radio" name="tempB" value="fahr" /> Fahrenheit </p>
        <p><input type="radio" name="tempB" value="cel" /> Celsius</p>
        <p><input type="radio" name="tempB" value="kel" /> Kelvin</p>
    </div>
</div>
    <p><input type="submit"/></p>
    </form>
    <?php
    echo '<pre>';
    echo var_dump($_POST);
    
    echo'</pre>'
    
    
    ?>
    
</body>
</html>