
<!-- $_GET can also collect data sent in the URL. -->
<!-- Assume we have an HTML page that contains a hyperlink with parameters: -->



<a href="">Test $GET</a>


<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
