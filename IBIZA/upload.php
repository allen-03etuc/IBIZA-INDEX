<?php
include 'database.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {

$product_id = $_POST["product_id"];
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$stocks = $_POST["stocks"];


if (!isset($_FILES["product_img"]) || $_FILES["product_img"]["error"] !== 0) {
    die("image upload failed.");
}

$imagedata = file_get_contents($_FILES["product_img"]["tmp_name"]);

$sql = "INSERT INTO ashly
       (product_id, product_name, price, stocks, product_img)
       VALUES (?, ?, ?, ?, ?)";

       $stmt = $conn->prepare($sql);
       $stmt->bind_param("isdis", $product_id, $product_name, $price, $stocks, $imagedata);


       if ($stmt->execute()){
       echo "<script>alert('Successfully Added'); window.location.href='admin.php'</script>";
       } else {
        echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
}

?>