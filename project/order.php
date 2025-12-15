<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$book  = htmlspecialchars($_POST["book"]);
$price = htmlspecialchars($_POST["price"]);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Complete Your Order</title>
</head>
<body>

<h2>Complete Your Purchase</h2>

<p><strong>Book:</strong> <?php echo $book; ?></p>
<p><strong>Price:</strong> $<?php echo $price; ?></p>

<form action="purchase.php" method="post">
  <input type="hidden" name="book" value="<?php echo $book; ?>">
  <input type="hidden" name="price" value="<?php echo $price; ?>">

  <input type="text" name="customer_name" placeholder="Your Name" required><br><br>
  <
