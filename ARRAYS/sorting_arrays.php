<!-- Sort Array in Ascending Order - sort() -->
<!-- The following example sorts the elements of the $cars array in ascending alphabetical order: -->

<!-- todo -->
<?php
   $cars = array("Volvo", "BMW", "Mercedes" => "Benz", "Toyata" );
   echo "Mercedez " .$cars[" Mercedes"]. ".<br>";
   sort($cars);
    $arrLength = count($cars);
    for ($i=0; $i < $arrLength; $i++) { 
        echo $cars[$i];
        echo "<br>";
    }
?>
