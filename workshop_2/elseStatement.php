<!-- In this challenge, create a variable $age is set the value. 
Next create a script that checks the value of $age and displays a message based on the age group it falls into -->

<?php

$age = 15;

if ($age <= 13) {
    echo "You are a child.";
} elseif ($age <= 17) {
    echo "You are a teen.";
} elseif ($age <= 64){
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}
?>