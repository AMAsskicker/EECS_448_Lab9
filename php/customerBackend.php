<?php
// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

$user = $_POST["user"];
$u_pass = $_POST["password"];
$item_1 = $_POST["item1"];
$item_2 = $_POST["item2"];
$item_3 = $_POST["item3"];
$ship = $_POST["shipping"];
$subtotal = 0;
$total;

if ($item_1 == "yes") {
  $subtotal++;
}
if ($item_2 == "yes"){
  $subtotal++;
}
if ($item_3 == "yes"){
  $subtotal++;
}

if ($ship == "overnight") {
  $total = $subtotal * 7.99 + 50;
} elseif ($ship == "three") {
  $total = $subtotal * 7.99 + 5;
}

echo "<html>";
echo "<head>";
echo '<link rel="stylesheet" href="../css/master.css">';
echo '<link rel="stylesheet" href="../css/storeFront.css">';
echo "</head>";
echo "<body>";

echo '<span id="user_pass">User Name: ' . $user . '</span><br>';
echo '<span id="user_pass">Password: ' . $u_pass . '</span><br><br>';

echo '<span id="price">Purchase Item 1: '.$item_1.'</sapn><br>';
echo '<span id="price">Purchase Item 2: '.$item_3.'</sapn><br>';
echo '<span id="price">Purchase Item 3: '.$item_3.'</sapn><br>';

if ($ship == "free") {
  echo "Free 7 Day<br>";
} elseif ("three") {
  echo "Shipping: Three Day $5<br>";
} else {
  echo "Shipping: Overnight $50<br>";
}

echo '<span>Total: $'.$total.'</span>';
echo "</body>";
echo "</html>";
 ?>
