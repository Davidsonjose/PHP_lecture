<!-- PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Note: Unlike variables, constants are automatically global across the entire script. -->

<!-- Create a PHP Constant
To create a constant, use the define() function. -->



<?php
    define('GREETING', "Welcome to davidsonjose-page ");
    echo GREETING;
    echo "<br>";
?>

<!-- PHP Constant Arrays
In PHP7, you can create an Array constant using the define() function. -->

<?php 
    define("cars", [
        "Toyata",
        "Camry",
        "Lexus",

    ]);
    echo cars[0];
    echo "<br>";
    
?>


<!-- Constants are Global -->
<!-- Constants are automatically global and can be used across the entire script. -->

<?php
    define("HELP", "welcome to davidson_jose page");
    function myText()
    {
        echo HELP;
    }

    myText();  
?>
