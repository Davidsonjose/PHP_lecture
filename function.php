
<?php 
    function writeMsg() {
            echo "Hello World <br><br>";
        }

    writeMsg();  //call the function
?>



<?php
    // function familyName($fsname){
    //     echo "$fsname  Joseph<br>";
    // }


    // familyName('Davidson');
    // familyName('Gift');
    // familyName('Victory');
    // familyName('Favour');
    // familyName('Abraham');
?>

<!-- todo -->
<?php
    function familyName($fsname, $year){
        echo "$fsname  Joseph born in the year $year<br>";
    }


    familyName('Davidson', '2003');
    familyName('Gift', '2004');
    familyName('Victory', '2005');
    familyName('Favour', '2006');
    familyName('Abraham', '2007');
?>


<?php
    function add(int $numOne, int $numTwo){
        echo $numOne + $numTwo;
    }


    add(5, '5 number' );

?>
