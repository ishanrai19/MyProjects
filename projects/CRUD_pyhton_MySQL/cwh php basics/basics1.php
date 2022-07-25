<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tut</title>
</head>
<body>
    <div class="container">PHP Website</div>
    <?php
    // constants    
    define('PI','3.14');
    echo "Print using PHP"; 
    echo "<br>";
    // variables
    $var1=68;
    $var2=1;
    echo "Sum of variable 1 and variable 2 is: ";
    echo "<br>";
    echo $var1+$var2;
    // operators
    echo "<br>";
    $newVar=$var1*$var2;
    echo "Value of new variable is: ";
    echo "newVar";
    echo "<br>";
    echo "Is variable 1 and greater than variable 2 " ;
    echo var_dump($var1>$var2);
    echo "<br>";
    echo $var1*PI ;
    echo "<br>";
    // data types
    $v1="hello";
    echo var_dump($v1);
    echo "<br>";
    $v2=45;
    echo var_dump($v2);
    echo "<br>";
    $v3=2.0;
    echo var_dump($v3);
    echo "<br>";
    $v4=True;
    echo var_dump($v4);
    echo "<br>";

    ?>
</body>
</html>