
<!-- A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for. -->
<!-- A regular expression can be a single character, or a more complicated pattern. -->
<!-- Regular expressions can be used to perform all types of text search and text replace operations. -->




<!-- preg_match()	Returns 1 if the pattern was found in the string and 0 if not -->

<?php
    $str = "Visit davidson";
    $pattern = "/davidson/i";
    echo preg_match($pattern, $str);
    echo "<br>";
?>



<!-- preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0 -->
<?php
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);
    echo "<br>";
?>

<!-- preg_replace()	Returns a new string where matched patterns have been replaced with another string -->
<?php
    $str = "davidson indomie";
    $pattern = "/indomie/i";
    echo preg_replace($pattern, "Jose", $str);
?>


<!-- NOTE -->
<!-- Modifiers can change how a search is performed. -->

<!-- Modifier	Description -->
<!-- i	Performs a case-insensitive search -->
<!-- m	Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line) -->
<!-- u	Enables correct matching of UTF-8 encoded patterns -->



<!-- NOTE -->
<!-- Brackets are used to find a range of characters:

Expression	Description
[abc]	Find one character from the options between the brackets
[^abc]	Find any character NOT between the brackets
[0-9]	Find one character from the range 0 to 9 -->



<!-- Grouping -->
<!-- You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match -->


<?php
    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str); 
?>