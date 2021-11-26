<!-- $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods). -->
<?php
    $x = 5;
    $y = 7;

        function addition()
        {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
    
        addition();
    echo  $z;
    echo "<br>";  
?>

<!-- todo -->
<!-- calculate the area of a triangle -->

<?php
    $length = 20;
    $breadth = 10;
        function areaOfTriangle()
        {
            $GLOBALS['area'] = 0.5 * $GLOBALS['length'] + $GLOBALS['breadth'];
        }

        areaOfTriangle();
    echo $area;

?>