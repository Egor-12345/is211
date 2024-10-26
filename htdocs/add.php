<?php
session_start();

if (isset($_POST['id'])) {
    $product_id = $_POST['id'];

    if (!isset($_SESSION['basket'])) {
        $_SESSION['basket'] = [];
    }

    if (isset($_SESSION['basket'][$product_id])) {
        $_SESSION['basket'][$product_id]['quantity']++;
    } else {
        $_SESSION['basket'][$product_id] = [
            'quantity' => 1
        ];
    }
}
?>