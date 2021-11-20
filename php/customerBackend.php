<?php
// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

$name = $_POST["user"];
$email = $_POST["email"];
$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];
$ship = $_POST["shipping"]
echo "<html>";
echo "<head>";
echo "<link rel="stylesheet" href="./css/master.css">";
echo "<link rel="stylesheet" href="./css/storeFront.css">";
echo "</head>";
echo "<body>";

echo "<span id="user_pass">User Name: " . $user . "</span><br>";
echo "Password: " . $pass . "<br><br>";

if ($item1 == "yes") {
  echo "purchase 1";
}

if ($ship == "free") {
  echo "Free 7 Day<br>";
} elseif ("three") {
  echo "Shipping: Three Day $5<br>";
} else {
  echo "Shipping: Overnight $50<br>";
}
echo "</body>"
echo "</html>";
 ?>
