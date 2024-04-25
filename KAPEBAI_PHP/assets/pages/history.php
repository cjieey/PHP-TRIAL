<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/history.css">
        <link rel="stylesheet" href="../css/historyy.css">

        <title>Kape Bai History</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="../img/coffee.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-coffee-togo'></i>
                        <span class="nav__logo-name">KAPE BAI</span>
                    </a>

                    <div class="nav__list">
                        <a href="../pages/home.php" class="nav__link ">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="../pages/user.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        
                        <a href="../pages/menu.php" class="nav__link">
                            <i class='bx bx-food-menu nav__icon'></i>
                            <span class="nav__name">Menu</span>
                        </a>

                        <a href="../pages/order.php" class="nav__link">
                            <i class='bx bxs-calendar-check nav__icon'></i>
                            <span class="nav__name">Orders</span>
                        </a>

                        <a href="../pages/history.php" class="nav__link active">
                            <i class='bx bx-history nav__icon'></i>
                            <span class="nav__name">History</span>
                        </a>
                    </div>
                </div>

                <a href="../pages/index.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>

        <div class="orders-table">
    <h1>KAPE BAI "HISTORY"</h1>
    <table class="order-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Actions</th> <!-- New column for actions -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Step 1: Connect to your MySQL database
            $connection = mysqli_connect("localhost", "root", "", "kapebai_db");

            // Check connection
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Handle edit and delete actions
            if(isset($_GET['action']) && isset($_GET['id'])) {
                if($_GET['action'] == 'edit') {
                    $edit_id = $_GET['id'];
                    $edit_sql = "SELECT * FROM orders WHERE id = $edit_id";
                    $edit_result = mysqli_query($connection, $edit_sql);
                    $edit_row = mysqli_fetch_assoc($edit_result);
                    ?>
                    <tr>
                        <form method="post">
                            <td><?php echo $edit_row['id']; ?></td>
                            <td><input type="text" name="pname" value="<?php echo $edit_row['Pname']; ?>"></td>
                            <td><input type="number" name="quantity" value="<?php echo $edit_row['quantity']; ?>"></td>
                            <td><input type="number" name="total_price" value="<?php echo $edit_row['total_price']; ?>"></td>
                            <td><?php echo $edit_row['dates']; ?></td>
                            <td>
                                <input type="submit" name="update" value="Update">
                                <a href="?">Cancel</a>
                            </td>
                            <input type="hidden" name="edit_id" value="<?php echo $edit_row['id']; ?>">
                        </form>
                    </tr>
                    <?php
                    if(isset($_POST['update'])) {
                        $edit_id = $_POST['edit_id'];
                        $pname = $_POST['pname'];
                        $quantity = $_POST['quantity'];
                        $total_price = $_POST['total_price'];
                        $update_sql = "UPDATE orders SET Pname='$pname', quantity='$quantity', total_price='$total_price' WHERE id='$edit_id'";
                        if (mysqli_query($connection, $update_sql)) {
                            echo "<p>Record updated successfully.</p>";
                            // Redirect back to default view
                            echo "<script>window.location.href = '?';</script>";
                            exit;
                        } else {
                            echo "<p>Error updating record: " . mysqli_error($connection) . "</p>";
                        }
                    }
                }
            }

            // Retrieve data from the database
            $sql = "SELECT id, Pname, quantity, total_price, dates FROM orders";
            $result = mysqli_query($connection, $sql);

            // Display data in HTML table
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    if(isset($_GET['action']) && $_GET['action'] == 'edit' && $_GET['id'] == $row['id']) {
                        continue; // Skip rendering the row if it's being edited
                    }
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["Pname"]."</td>";
                    echo "<td>".$row["quantity"]."</td>";
                    echo "<td>".$row["total_price"]."</td>";
                    echo "<td>".$row["dates"]."</td>";
                    echo "<td>";
                    echo "<a href='?action=edit&id=".$row["id"]."'>Edit</a> | ";
                    echo "<a href='?action=delete&id=".$row["id"]."'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }

            mysqli_close($connection);
            ?>
        </tbody>
    </table>
</div>

    </div>
    </body>
</html>