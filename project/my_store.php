<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Store</title>

  <!-- USE YOUR EXISTING STYLES -->
  <link rel="stylesheet" href="style.css" />

  <!-- ICONS -->
  <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
</head>

<body>

<section id="overview">
  <div class="topic">
    <h3>My Store</h3>
    <p>Your selected books</p>
  </div>

  <?php if (empty($cart)): ?>
    <p style="text-align:center; font-size:18px;">Your store is empty.</p>
  <?php else: ?>
    <ul style="list-style:none; padding:0;">
      <?php foreach ($cart as $index => $item): ?>
        <li style="display:flex; align-items:center; gap:15px; margin-bottom:15px;">
          <span>
            <?php echo htmlspecialchars($item['book']); ?> — $<?php echo htmlspecialchars($item['price']); ?>
          </span>

          <!-- Remove button using form POST -->
          <form action="remove_item.php" method="post" style="display:inline;">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <button type="submit" class="order-btn">Remove</button>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <a href="index.php">⬅ Continue Shopping</a>
</section>

<!-- AJAX Remove Function (اختياري) -->
<script>
function removeItem(index) {
  fetch("./remove_item.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "index=" + index
  })
  .then(res => res.text())
  .then(data => {
    if (data.trim() === "OK") {
      location.reload(); 
    } else {
      alert("Failed to remove item. Check remove_item.php and session.");
    }
  })
  .catch(err => {
    console.error("Error:", err);
    alert("Something went wrong.");
  });
}
</script>

<!-- Existing Scripts -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>

