<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$email = $_POST["email"];
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";

$ans_1 = $_POST["q1_a2"];
echo "Question 1: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_1 . "<br>";

?>
