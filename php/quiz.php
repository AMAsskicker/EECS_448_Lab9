<?php
// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//access the global array called $_POST to get the values from the text fields
// $name = $_POST["name"];
// $email = $_POST["email"];
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // $name = test_input($_POST("name"));
  // $email = test_input($_POST("email"));
  // $ans_q1 = test_input($_POST("q1"));
// }

$name = $_POST["name"];
$email = $_POST["email"];
$ans_q1 = $_POST["q1"];
$ans_q2 = $_POST["q2"];
$ans_q3 = $_POST["q3"];
$ans_q4 = $_POST["q4"];
$ans_q5 = $_POST["q5"];
$score = 0;

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br><br>";

echo "Question 1: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_q1 . "<br><br>";
if ($ans_q1 == "blue") {
  $score++;
}

echo "Question 2: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_q2 . "<br><br>";
if ($ans_q2 == "like") {
  $score++;
}

echo "Question 3: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_q3 . "<br><br>";
if ($ans_q1 == "blue") {
  $score++;
}

echo "Question 4: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_q4 . "<br><br>";
if ($ans_q1 == "blue") {
  $score++;
}

echo "Question 5: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_q5 . "<br><br>";
if ($ans_q1 == "blue") {
  $score++;
}

echo "final score: " . $score . "of 5<Br>";

?>
