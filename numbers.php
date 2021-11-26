<!-- we are looking into Integers, floats, and number Strings -->

<!-- PHP Numbers -->
<!-- One thing to notice about PHP is that it provides automatic data type conversion. -->

<!-- So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string. -->

<!-- This automatic conversion can sometimes break your code. -->

<!-- PHP Integers -->
<!-- 2, 256, -256, 10358, -179567 are all integers. -->

<!-- An integer is a number without any decimal part. -->

<!-- An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer. -->

<!-- Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5). -->



<!-- PHP has the following predefined constants for integers: -->

<!-- PHP_INT_MAX - The largest integer supported -->
<!-- PHP_INT_MIN - The smallest integer supported -->
<!-- PHP_INT_SIZE -  The size of an integer in bytes -->
<!-- PHP has the following functions to check if the type of a variable is integer: -->

<!-- is_int() -->
<!-- is_integer() - alias of is_int() -->
<!-- is_long() - alias of is_int() -->


<!-- checkinig if it a integer if it is it is gonna return boolean true or false  -->
<?php
$x = 1234;
var_dump(is_int($x));
?>

<!-- PHP Floats
A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats. -->

<!-- PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float() -->



<?php
$y = 1234.236;
var_dump(is_float($y));

?>



<!-- PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()
However, the PHP var_dump() function returns the data type and value: -->

<?php
$x = 1.9e411;
var_dump($x);
?>


<!-- PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan() -->


<?php
$x = acos(8);
var_dump($x);
?>




<!-- PHP Numerical Strings -->
<!-- The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise. -->


<?php
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
?>


<!-- PHP Casting Strings and Floats to Integers -->
<!-- Sometimes you need to cast a numerical value into another data type. -->
<!-- The (int), (integer), or intval() function are often used to convert a value to an integer. -->


<?php
// cast float to int
$x = 2345.234;
$int_cast = (int)$x;
echo $int_cast;


// casting a int to a string
$x = "2345.1234";
$int_cast = (int)$x;
echo $int_cast;
?>


