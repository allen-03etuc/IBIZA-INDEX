<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $product_id   = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $price        = $_POST["price"];
    $total_order  = $_POST["total_order"];
    $total_price  = $_POST["total_price"];
    $cname = $_POST["cname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    /* CHECK STOCK */
    $sql_stock = "SELECT stocks FROM ashly WHERE product_id = '$product_id'";
    $result_stock = mysqli_query($conn, $sql_stock);
    $row_stock = mysqli_fetch_assoc($result_stock);
    $current_stock = $row_stock["stocks"];

    if ($total_order > $current_stock) {
        header("Location: mendy.php?order=nostock");
        exit;
    }

    /* INSERT ORDER HISTORY */
    $sql_insert = "INSERT INTO history 
        (product_id, product_name, price, total_order, total_price, cname, email, mobile)
        VALUES 
        ('$product_id', '$product_name', '$price', '$total_order', '$total_price', '$cname', '$email', '$mobile')";

    if (mysqli_query($conn, $sql_insert)) {

        /* UPDATE STOCK */
        $new_stock = $current_stock - $total_order;
        $sql_update = "UPDATE ashly SET stocks = '$new_stock' WHERE product_id = '$product_id'";
        mysqli_query($conn, $sql_update);

        header("Location: mendy.php?order=success");
        exit;

    } else {
        header("Location: mendy.php?order=error");
        exit;
    }
}
?>
