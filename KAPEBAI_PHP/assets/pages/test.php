<?php
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/register.css"> 
    <link rel="stylesheet" href="../css/test.css">
</head>
<body>
    <div class="box-container">
            <div class="register-div">
                <h3 class="sub-title">PRODUCT</h3>
                <form action="../pages/orders.php" method="post">
                    <div class="box">
                        <img src="../img/caramel.png" alt="">
                        <input class="pname" type="name" name="pname" value="COFFEE" readonly>
                        <div class="pili">
                        <input type="radio" id="html" name="sugar" value="HTML">
                          <label for="html">10%</label>
                          <input type="radio" id="css" name="sugar" value="CSS">
                          <label for="css">20%</label>
                          <input type="radio" id="javascript" name="sugar" value="JavaScript">
                          <label for="javascript">30%</label>
                            <input type="int" name="quantity" placeholder="quantity">
                            <input class="add-order" type="submit" name="order" value="ADD ORDER">
                        </div>
                        <div class="box">
                        <img src="../img/caramel.png" alt="">
                        <input class="pname" type="name" name="pname" value="COFFEE" readonly>
                        <div class="pili">
                        <input type="radio" id="html" name="sugar" value="HTML">
                          <label for="html">10%</label>
                          <input type="radio" id="css" name="sugar" value="CSS">
                          <label for="css">20%</label>
                          <input type="radio" id="javascript" name="sugar" value="JavaScript">
                          <label for="javascript">30%</label>
                            <input type="int" name="quantity" placeholder="quantity">
                            <input class="add-order" type="submit" name="order" value="ADD ORDER">
                        </div>
                        <div class="box">
                        <img src="../img/caramel.png" alt="">
                        <input class="pname" type="name" name="pname" value="COFFEE" readonly>
                        <div class="pili">
                        <input type="radio" id="html" name="sugar" value="HTML">
                          <label for="html">10%</label>
                          <input type="radio" id="css" name="sugar" value="CSS">
                          <label for="css">20%</label>
                          <input type="radio" id="javascript" name="sugar" value="JavaScript">
                          <label for="javascript">30%</label>
                            <input type="int" name="quantity" placeholder="quantity">
                            <input class="add-order" type="submit" name="order" value="ADD ORDER">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>

