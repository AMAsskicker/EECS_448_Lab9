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
$item1_total = $item_1 * 7.99;
$item2_total = $item_2 * 7.89;
$item3_total = $item_3 * 6.99;
$subtotal = $item1_total + $item2_total + $item3_total;
if ($ship == "overnight") {
  $total = $subtotal + 50;
} elseif ($ship == "three") {
  $total = $subtotal + 5;
} else {
  $total = $subtotal;
}

echo "<html>";
echo "<head>";
echo '<link rel="stylesheet" href="../css/master.css">';
echo '<link rel="stylesheet" href="../css/storeFront.css">';
echo "</head>";
echo "<body>";

echo '<span id="user_pass">User Name: ' . $user . '</span><br>';
echo '<span id="user_pass">Password: ' . $u_pass . '</span><br><br>';

echo '<span id="recipt">    Recipt     </span><br>';
echo '<span id="recipt">----------</span><br>';
echo '<span id="recipt">Red Spatula x '.$item_1.' =  '.$item1_total.'</span><br>';
echo '<span id="recipt">Blue Spatula x '.$item_2.' =  '.$item2_total.'</span><br>';
echo '<span id="recipt">Red Spatula x '.$item_3.' =  '.$item3_total.'</span><br>';
echo '<span id="recipt">----------</span><br>';
echo '<span id="recipt">SUBTOTOAL: $'.round($subtotal,2).'</span><br>';
echo '<span id="recipt">----------</span><br>';

if ($ship == "free") {
  echo '<span id="recipt">Shipping: Overnight = $50</span><br>';
} elseif ("three") {
  echo '<span id="recipt">Shipping: Three Day = $5</span><br>';
} else {
  echo '<span id="Recipt">Shipping: Free 7 Day = $0</span><br>';
}
echo '<span id="recipt">----------</span><br>';

echo '<span id="recipt">TOTAL: $'.round($total,2).'</span><br><br><br>';

echo '<span id="footer">THANK YOU FOR YOUR PURCHASE!!</span><br>';
echo "</body>";
echo "</html>";





















 ?>
