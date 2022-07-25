<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tut2</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;

            background-color:rgba(190, 190, 190, 0.63);
        }
        .container{
            max-width: 800px;
            background-color:red;
            margin:auto;
            padding:20px;
            text-align:center;

        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Hello Ishan Lord</h3>
        <p>Welcome to Pub96</p>
        <?php
        // if else statements
            $age=20;
            if($age>18){
                echo "You may proceed to party";
            }
            else{
                echo "Minors not allowed";
            }
            echo "<br>";
            echo "Print using for loop: ";
            echo "<br>";

            // arrays
            $names=array("Ishan","Nikita","Chad","Patrick","Bateman");
            echo "Total names in array: ";
            echo count($names);

            // // loops
            // for ($i=0; $i <count($names); $i++) { 
            //     echo "$names[$i]";
            //     echo "<br>";
                
            // }
            // echo "<br>";
            // echo "Print using while loop: ";
            // echo "<br>";
            
            // $a=0;
            // while ($a <count($names)) {
            //     echo "$names[$a]";
            //     echo "<br>";
            //     $a++;
                
            // }
            // echo "<br>";
            // echo "Print using do while loop: ";
            // echo "<br>";
            
            // $a=0;
            // do  {
            //     echo "$names[$a]";
            //     echo "<br>";
            //     $a++;
                
            // }while ($a <count($names));
            // echo "<br>";
            
            // echo "Print using for each loop: <br>";
            // foreach ($names as $values ) {
            //     echo "<br>$values";
            // }
            // // functions
            // function print_message($name){
            //     echo "<br>Good Morning ";
            //     echo "$name<br>";
            // }
            // print_message("Ishan");

            // strings
            $str="Ishan Rai";
            $len=strlen($str);
            echo "Length of the string is :".$len." assi hazar ke shoj";
            echo "<br>Number of wors in your strings are: ".str_word_count($str)."<br>";  
            echo "<br>Reverse of your string is: ".strrev($str)."<br>";  
            echo "<br>Position of '''n R''' in your string is: ".strpos($str," R")."<br>";  
            echo "<br>Position of ''' R''' in your string is replaced by Nikita: ".str_replace(" R","nikita", $str)."<br>";  
            // echo $len;
            ?>
    </div>
</body>
</html>