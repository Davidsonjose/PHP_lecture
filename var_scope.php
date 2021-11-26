<!-- PHP has three different variable scopes: -->
<!-- local -->
<!-- global -->
<!-- static -->

<!-- Global and local scope -->
<?php 
    $y = 4;  //this is a global scope
        function myText()
        {
            //   using var x in this function will generate an error
            echo "<p>The sum of 3 and 1 is $y </p>";
        }

        myText();
    echo "<p>The sum of 3 and 1 is $y</p>";

  
?> 


<!-- Local scope -->

<?php 
    function FunctionName()
    {
        $p = 7;  //local scope
        echo "<p>The sum of 4 and 3 is $p</p>";
    }

    FunctionName();
            //   using var p in this function will generate an error
    echo "<p>The sum of 4 and 3 is $p </p>";

?>

