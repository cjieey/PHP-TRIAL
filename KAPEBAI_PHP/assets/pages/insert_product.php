<?php
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['pName'];
    $sugarLevel = $_POST['sugarLevel'];
    $productPrice = $_POST['pPrice'];
    $productQuantity = $_POST['pQuantity'];

    // Calculate total price
    $totalPrice = $productPrice * $productQuantity;

    // Get current date and time
    date_default_timezone_set('Asia/Manila'); // Set your desired timezone
    $currentDate = date('Y-m-d'); // Format: YYYY-MM-DD
    $currentTime = date('H:i:s'); // Format: HH:MM:SS

    // Prepare insert query
    $insert_query = "INSERT INTO product (pName, sugarLevel, pPrice, pQuantity, pTotal, pDate, pTime) VALUES ('$productName', '$sugarLevel', '$productPrice', '$productQuantity', '$totalPrice', '$currentDate', '$currentTime')";

    if (mysqli_query($conn, $insert_query)) {
        echo "Order added successfully!";
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
}
?>
