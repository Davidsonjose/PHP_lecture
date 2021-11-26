<!-- PHP has a set of math functions that allows you to perform mathematical tasks on numbers -->

<!-- PHP pi() Function
The pi() function returns the value of PI: -->


<?php
echo(pi());
?>


<!-- PHP min() and max() Functions
The min() and max() functions can be used to find the lowest or highest value in a list of arguments: -->

<?php
echo(min(0, 150, 30, 20, -8, -200));  
echo(max(0, 150, 30, 20, -8, -200));  
?>

<!-- PHP abs() Function
The abs() function returns the absolute (positive) value of a number: -->

<?php
echo(abs(-6.7));
?>



<!-- PHP sqrt() Function
The sqrt() function returns the square root of a number: -->

<?php
echo(sqrt(64));
?>


<!-- PHP round() Function
The round() function rounds a floating-point number to its nearest integer: -->
<?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>



<!-- Random Numbers
The rand() function generates a random number: -->
<?php
echo(rand());
?>


<!-- the rand() generates a random number giving the range -->
<?php
echo(rand(10, 100));
?>
