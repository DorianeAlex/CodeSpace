<!-- Write a PHP program that displays the multiplication table of a given number using a for loop.

 
The output should display the multiplication table from 1 to 10. -->

<html>
    <body>
    <!-- creating a form to accept a single input from the user, which is the number whose multiplication table should be displayed. -->
        <form action="forLoop.php" method="get">
            Number: <input type="number" name="number" required><br>

            <input type="submit" name="submit">
        </form>
    

<?php
// checking if the form is submitted and a number is entered by the user
if(isset($_GET['submit']) && isset($_GET['number'])){
    $num = ($_GET['number']);
    echo "The multiplication table of " . $num . " is: <br><br>";
// initiating a for loop to run from 1 to 10
    for ($i = 1; $i <= 10; $i++){
        // multiplying the input number from the user x number of times according to the number of iterations entered in the for loop
        $product = $num * $i;
        // printing each iteration until the test-expression becomes FALSE and the loop ends
        echo " $num  x  $i = $product <br>"  ;
    }
}
?>
    </body>


</html>

