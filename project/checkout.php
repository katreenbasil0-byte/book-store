<?php
session_start();
if (empty($_SESSION['cart'])) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
</head>
<body>

<h2>Enter Your Information</h2>

<form action="confirm.php" method="post">
  <input type="text" name="name" placeholder="Your Name" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <textarea name="info" placeholder="Address / Notes" required></textarea><br><br>

  <button type="submit">Confirm Purchase</button>
</form>

</body>
</html>
