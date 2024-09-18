<!--Create a simple calculator program that takes two numbers as input and performs basic arithmetic operations on them using PHP operators. 
The program should display the results of each operation. -->
<html>
    <body>
        <!-- create a form to get twos number for the user and a selection of operators -->
        <form action="calculator.php" method="get">
            Number 1: <input type="number" name="num1"><br>
            Number 2: <input type="number" name="num2"><br>
            <select name = "operator">
                <option>Add</option>
                <option>Substract</option>
                <option>Multiply</option>
                <option>Divide</option>
                <option>Square</option>
            </select>
                <br>
            <!-- the user can validate its choice by clicking the submit button and call the function -->
            <input type="submit" name="submit">
        </form>
        <!-- create PHP Code the conditions that will be apply once submit button is clicked
        using a switch statement to run through multiple conditions to check against the same variable -->
        The answer is: 
<?php 
        
    if (isset($_GET['num1'], $GET['num2'], $_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operation = $_GET['operator'];

        switch ($operation){
            case 'Add':
                echo $result1 + $result2;
                break;
            case'Substract':
                echo $result1 - $result2;
                break;
            case 'Multiply':
                echo $result1 * $result2;
                break;
            case 'Divide':
                echo $result1 / $result2;
                break;
            case 'Square':
                echo $result1 ** $result2;
                break;
            default:
                echo "Choose a number!";
        }
    }
?>
    </body>
</html>

