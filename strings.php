<!-- looking at commonly used functions to manipulate strings -->
<!-- strlen() - Return the Length of a String -->

<?php
 echo strlen("God is Great");
?>


<!-- str_word_count() - Count Words in a String -->
<!-- The PHP str_word_count() function counts the number of words in a string. -->

<?php
    echo str_word_count("God is Great");
    echo "<br><br>"
    ?>

<!-- strrev() - Reverse a String -->
<!-- The PHP strrev() function reverses a string. -->

<?php
    echo strrev("I am Davidson");
    echo "<br><br>"
?>



<!-- strpos() - Search For a Text Within a String -->
<!-- The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE. -->

<?php
   echo strpos("GOD is great", "great");
?>


<!-- str_replace() - Replace Text Within a String -->
<!-- The PHP str_replace() function replaces some characters with some other characters in a string. -->

<?php
    echo str_replace("great", "are you",  "God great");
?>