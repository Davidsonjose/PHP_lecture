<!-- Data types in PHP
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource -->


<!-- a string can be text inside a quote. You can use single or double quote -->
<?php
// String data 
$x = 'GOD is great';
$y = "Hello World";


echo $x;
echo "<br/>";
echo $y;

?>


<!-- PHP integer -->
<!-- An integer data type is a non-decimal number between -2, 147,483,648 to 2, 147,483,647 -->
<!-- Rules for integers -->
<!-- An integer must have at least one digit  -->
<!-- An integer must no have a decimal point -->
<!-- An integer can be positive or negative -->
<!-- Integers can be specified in: decimal(base10), hexaDeximal(base16), octal (base8), or binary (base 2) notation -->



<!-- Integer -->


<!-- uyou can make use of var_dump to know the data types you are dealing with -->
<?php
$x = 1234;
var_dump($x);

?>

<!-- Float -->
<?php 
$y = 1234.7;
var_dump($y);
?>



<!-- PHP boolean -->
<!-- A boolean represent two possible states: TRUE or FALSE  -->
<!-- $x = true; -->
<!-- $y = false; -->


<!-- Array  -->
<!-- An array stores multiple values in one single variable. -->

<?php 
$books= array('The Pot', "Solake", "The PRICE", "Humility");
var_dump($books);

?>


<!-- PHP Object -->
<!-- Classes and objects are the two main aspects of object-oriented programming. -->
<!-- A class is a template for objects, and an object is an instance of a class. -->


<?php
    class Car{
        public $color;
        public $model;
        public function __construct($color, $model)
        {
        $this->color = $color;
        $this->model = $model;
        }
        public function message()
        {
            return "My car is a " .$this->color . "!";
        }
    }

    $myCar = new Car("Black", "volvo");
    echo $myCar -> message();
?>


<?php
    class food{
        public $food;
        public $type;
        public function __construct($food, $type)
        {
            $this->food = $food;
            $this->type = $type;
        }
        public function message()
        {
            return "My favourite food is" .$this->food . "!";
        }
    }

    $myFood = new food(" Indomie", " egg");
    echo $myFood -> message();

?>

<!-- Null data-types -->
<!-- Null is a special data type which can have only one value: NULL. -->
<!-- A variable of data type NULL is a variable that has no value assigned to it. -->


<?php
$x = "Hello world";
$x = null;
var_dump($x);
?>


