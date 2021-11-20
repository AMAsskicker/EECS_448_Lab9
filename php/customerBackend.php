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
$total;

$subtotal = ($item_1 * 7.99) + ($item_2 * 7.89) + ($item_3 * 6.99);
// if ($item_1 == "yes") {
//   $subtotal += 7.99;
// }
// if ($item_2 == "yes"){
//   $subtotal++;
// }
// if ($item_3 == "yes"){
//   $subtotal++;
// }


if ($ship == "overnight") {
  $total = $subtotal + 50;
} elseif ($ship == "three") {
  $total = $subtotal * 7.99 + 5;
} else {
  $total = $subtotal * 7.99;
}

echo "<html>";
echo "<head>";
echo '<link rel="stylesheet" href="../css/master.css">';
echo '<link rel="stylesheet" href="../css/storeFront.css">';
echo "</head>";
echo "<body>";

echo '<span id="user_pass">User Name: ' . $user . '</span><br>';
echo '<span id="user_pass">Password: ' . $u_pass . '</span><br><br>';

echo 'Red Spatula x '.$item_1.' =  '.$item_1 * 7.89'<br>';

// echo '<span id="price">Purchase Red Spatula: '.$item_1.'</sapn><br>';
// echo '<span id="price">Purchase Blue Spatula: '.$item_3.'</sapn><br>';
// echo '<span id="price">Purchase Purple Spatula: '.$item_3.'</sapn><br>';

if ($ship == "free") {
  echo '<span id="">Shipping: Overnight = $50</span><br>';
} elseif ("three") {
  echo '<span id="">Shipping: Three Day = $5</span><br>';
} else {
  echo '<span id="">Shipping: Free 7 Day = $0</span><br>';
}

echo '<span id="total">TOTAL: $'.$total.'</span><br>';

echo '<span>Total: $'.$total.'</span>';
echo '<span id="footer">THANK YOU FOR YOUR PURCHASE!!</span><br>';
echo "</body>";
echo "</html>";





















 ?>
