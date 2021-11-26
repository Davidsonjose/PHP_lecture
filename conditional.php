<!-- PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed -->

<!-- PHP if statement -->

<?php
  $t = date(1);

  if ($t < 20) {
      echo "Have a good day";
      echo "<br><br>";
  }
?>


<!-- PHP if else statement -->
<?php
  $t = date(30);

  if ($t < 20) {
      echo "Have a good day";
  }
    else {
        echo "Good Evening guys";
    }
?>



<!-- PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions. -->


<?php
$t = date(30);

 if ($t < 40    ) {
     echo "Good morning";
 }elseif ($t < 40) {
     echo "Have a good day";
 }else {
      echo "Have a good night";
 }
?>


<?php
$favColor = "Red";
switch ($favColor) {
    case 'Red':
    echo "your favourite color is red";
        break;
    case 'blue':
    echo "your favourite color is blue";
        break;
    case 'purple':
    echo "your favourite color is purple";
        break;
    default:
        echo "you favourite color is either red, blue or purple";
        break;
}

?> 