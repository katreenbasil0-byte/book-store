<?php
session_start();

if (!isset($_POST['book']) || !isset($_POST['price'])) {
    echo "No product data received.";
    exit;
}

$book  = $_POST['book'];
$price = $_POST['price'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = [
    'book' => $book,
    'price' => $price
];

header("Location: my_store.php");
exit;
