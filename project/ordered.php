<?php
session_start();

$name  = $_POST['name'];
$email = $_POST['email'];
$info  = $_POST['info'];
$cart  = $_SESSION['cart'];

session_destroy(); // clear cart
?>

<!DOCTYPE html>
<html>
<head>
  <title>Order Confirmed</title>
</head>
<body>

<h2>Order Successful </h2>

<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>

<h3>Books Ordered:</h3>
<ul>
  <?php foreach ($cart as $item): ?>
    <li><?php echo $item['book']; ?> — $<?php echo $item['price']; ?></li>
  <?php endforeach; ?>
</ul>

<p>Thank you for your purchase.</p>

<a href="index.php">Back to Home</a>

</body>
</html>
