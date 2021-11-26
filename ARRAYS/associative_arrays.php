<?php
    $age = array("Emmanuel" => "30", "Ben" => "49", "Cristopher" => "30");
    echo "Emmanuel is " .$age["Emmanuel"]. "years old";
    echo "<br>"; 
?>

<!-- TODO -->

<?php 
    $surname = array("Bolanle" => "Adewunmi", "Ifeola" => "Bisola", "Davidson" => "Jose");
        echo "Bolanle surname is " .$surname["Bolanle"]. ". <br>";
        echo "Ifeola " .$surname["Ifeola"]. ". <br>";
        echo "Davidson "  .$surname["Davidson"]. ".";
        echo "<br>";

?>
<!-- Note foreach method is used in the associatiative method of looping through arrays -->
<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        foreach($age as $x => $value) {
        echo "Key=" . $x . ", Value=" . $value;
        echo "<br>";
        }
?>


