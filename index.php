<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Project</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
    <h1><a href="index.php">Temperature Converter</a></h1>
        <nav>
            <ul>
                <li><a href="celcius.php">C-F</a></li>
                <li><a href="far.php">F-C</a></li>
                <li><a href="kel.php">K-C</a></li>
            </ul>
        </nav>
    </header>
    <footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="./index.php">Web Design by Jomar Quiban</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
    </footer>
</body>
</html>