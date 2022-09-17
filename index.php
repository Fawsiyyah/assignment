<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3, p {
            text-align:center;
        }
    </style>
</head>
<body>
   
<?php 
//question 1
echo ("<h3>QUESTION 1</h3>");
 echo ("<p>Hello world<br><br><br><p>");


 //question 2
 echo ("<h3>QUESTION 2</h3>");
 $greetings = "Hello PHP";
echo ("<p>$greetings<br><br><br><p>");


//question 3

$topic = "Basic Data Types";
$string = "To be or not to be";
$num = 30;
$float = 3.9;
$boolean = "true/false";
$null = "   " ;

echo ("<h3>QUESTION 3</b><br></h3>");
echo ("<p><b>$topic</b><br></p>");
echo ("<p>A string: $string.<br></p>");
echo ("<p>An integer: $num.<br></p>");
echo ("<p>A decimal: $float. <br></p>");
echo ("<p>A boolean: $boolean.<br></p>");
echo ("<p>A null: $null.<br></p>");


?>

</body>
</html>