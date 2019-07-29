<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <title>PHP Practice </title>
        <p> learning to build with php </p>
    <?php

    $dog = "Ridgard";
    echo nl2br("My dogs name is " . $dog . "! \n");

    $cute = false;

    echo nl2br( "\n Is that dog cute?\n");
    
    if ($cute == true) {
        echo nl2br( "\n" . $dog . " is cute!");
    } else { echo nl2br( "\n No? \n\nThan you must not be talking about " . $dog . ".");
        }
    ?>

    </body>
</html>