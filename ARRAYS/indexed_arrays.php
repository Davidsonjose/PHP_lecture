<?php
$cars = array("Volvo", "BMW", "Toyota");
      echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
      echo "<br>";
      echo "<br>";
?>

<!-- TODO -->
<!-- note the for loop method is used for looping through indexed_arrays -->
<?php
    $cars = array("Volvo", "BMW", "Toyota", "Lexus"); 
       $arrLength = count($cars);
       for ($i=0; $i < $arrLength; $i++) { 
           echo $cars[$i];
           echo "<br>";
       }

?>


