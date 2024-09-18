<?php
// ex 1
// First, create two variables called $width and $height, and assign them the respective values of 10 and 5.

$width = 10;
$height = 5;

// Next, create a third variable called $area, and assign it the value of $width multiplied by $height.

$area = $width * $height;

// Finally, print out a string that includes the value of $width, $height, and $area in a sentence.

echo "Knowing that the rectangle has a width of " .$width . "m, a height of " .$height . "m, its area should be of " .$area. "m. <br><br>";

?>


<?php
//Create a PHP program that takes two numbers and outputs the result of adding, subtracting, multiplying, and dividing them. The program should also concatenate the two numbers into a string.

//Two variable
$number1 = 10;
$number2 = 5;

//addition
$sum = $number1 + $number2;
//subtraction
$difference = $number1 - $number2;
//multiplication
$product = $number1 * $number2;
//division
$quotient = $number1 / $number2;
//concatenation
$concatenate = $number1 . $number2;

echo "The sum of $number1 and $number2 is: $sum. <br>";

//results
echo "The sum of " .$number1 . " and " .$number2 . " is: " .$sum. ". <br>";
echo "The difference of " .$number1 . " and " .$number2 . " is: " .$difference. ". <br>";
echo "The product of " .$number1 . " and " .$number2 . " is: " .$product. ". <br>";
echo "The quotient of " .$number1 . " and " .$number2 . " is: " .$quotient. ". <br>";
echo "The concatenation of " .$number1 . " and " .$number2 . " is: " .$concatenate. ". <br><br>";
?>

<?php
// Create a program that uses variables to store the user's age and the number of days, hours, and minutes they have been alive.
echo "<h2> Welcome to the Age Calculator! </h2>";
// initialising a variable that take the age of the person
$age = 25;
echo " Your age is: $age. <br><br>";
echo "You have been alive for: <br>";
// calculate the days
$days = $age * 365;
echo "$days days, <br>";
// calculate the hours
$hours = $days * 24;
echo "$hours hours, <br>";
// calculate the minutes
$minutes = $hours * 60;
echo "$minutes minutes. <br>";

?>


<?php
//Create and initialise an array variable using a suitable variable name to display the days of the week

# create and initialise an array variable.
echo "<h3> The days of the week are: </h3>";
$days = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' ) ;

# display the value in all elements as bulleted list.
foreach( $days as $value ) 
{echo "<ul><li> $value </li></ul>" ; }

?>


<?php
// Create and initialise an array variable using a suitable variable name to display the following values for climate in Edinburgh:
echo "<h3>Average temperature in Edinburgh</h3>";

// The “hottest” months July and August. During summer, the average low of (11°C) and highs (19°C)    
// The coldest months January and February, with average lows of (1°C) and highs of (7°C)
// creating and initialising the array with 4 values and differentiating high and low temperatures
$temperature = array("highJul-Aug" => 19, "lowJul-Aug" => 11, "highJan-Feb" => 1, "lowJan-Feb" => 1);
echo "<pre> Months          High        Low<br></pre>";
// echo "<pre> Jul-Aug"      . $temperature["highJul-Aug"]."℃"    .$temperature["lowJul-Aug"]."℃</pre>";
// echo "<pre> Jan-Fev         7℃          1℃";

echo "<pre>Jul-Aug&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $temperature["highJul-Aug"]."℃&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
echo $temperature["lowJul-Aug"]."℃";
echo "<br>Jan-Fev&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $temperature["highJan-Feb"]."℃&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $temperature["lowJan-Feb"]."℃</pre>";
//echo "Jan-Fev" .$lowTemperature['Jan-Feb'] . " C"

//echo "<table><tr><th>Month</th><th>High</th><th>Low</th></tr><tr><col>Jul-AugJan-Fev</col></tr>". $temperature["highJul-Aug"]."℃</td></tr></table>";

?>

<?php
//Create and initialise an array variable using a suitable variable name to display student’s results
// echo "<pre>Name       Physics      English        Maths";
// echo "<pre>Aarron        74%           69%        70%</pre>";
// echo "<pre>Jamie         64%           79%        69%</pre>";
// echo "<pre>Harry         55%           52%        57%</pre>";

$studentResults = array(
    "Aarron" => array(
        "Physics" => '74%',
        "English" => '69%',
        "Maths" => '70%'
    ),

    "Jamie" => array (
        "Physics" => '64%',
        "English" => '79%',
        "Maths" => '69%'
    ),

    "Harry" => array (
        "Physics" => '55%',
        "English" => '52%',
        "Maths" => '57%'
    ),
);

echo "Student results<br>";
echo "<br>Physics result for Aarron: ";
echo $studentResults['Aarron']['Physics'] ."";
echo "<br>English result for Jamie: ";
echo $studentResults['Jamie']['English'] ."";
echo "<br>Maths result for Harry: ";
echo $studentResults['Harry']['Maths'] ."";
?>
