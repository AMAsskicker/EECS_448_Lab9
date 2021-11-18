<?php
//access the global array called $_POST to get the values from the text fields
// $name = $_POST["name"];
// $email = $_POST["email"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST("name"));
  $email = test_input($_POST("email"));
  $ans_q1 = test_input($_POST("q1"));
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";

echo "Question 1: blah blah <br>";
echo "Correct Answer: this <br>";
echo "Your Answer: " . $ans_q1 . "<br>";

?>
