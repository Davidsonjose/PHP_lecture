<?php 
echo "<h2>PHP is fun</h2>";
echo "Hello world<br>";
echo "I'm about to learn PHP<br><br>";
echo "this ", "string ", "was ", "made ", "with multiple parameters ";
?>



<!-- Examle 2 using print to run html on the browser or server -->
<?php 
$txtOne = "Learn PHP";
$txtTwo = "Davidson_Jose school";
$x = 5;
$y = 7;

print "<h2>" . $txtOne ."<h2/>";
print "study PHP at " . $txtTwo . "<br>";
print $x + $y;

?>