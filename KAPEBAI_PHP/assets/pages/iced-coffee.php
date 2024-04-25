<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/iced-coffee.css">

        <title>Kape Bai Iced-Coffee</title>
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
                        
                        <a href="../pages/menu.php" class="nav__link active">
                            <i class='bx bx-food-menu nav__icon'></i>
                            <span class="nav__name">Menu</span>
                        </a>

                        <a href="../pages/order.php" class="nav__link">
                            <i class='bx bxs-calendar-check nav__icon'></i>
                            <span class="nav__name">Orders</span>
                        </a>

                        <a href="../pages/history.php" class="nav__link">
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

        <!-- MAIN -->
        <section>
            <div class="menu-category">
                <div class="box-container ">
                    <a href="../pages/menu.php" class="menu-link">
                        <img src="../img/1.png" alt="">
                        <p>HOT COFFEE</p>
                    </a>
                </div>
                <div class="box-container menu-active">
                    <a href="../pages/iced-coffee.php" class="menu-link">
                        <img src="../img/2.png" alt="">
                        <p>ICED COFFEE</p>
                    </a>
                </div>

                <div class="box-container">
                    <a href="../pages/pastries.php" class="menu-link">
                        <img src="../img/3.png" alt="">
                        <p>PASTRIES</p>
                    </a>
                </div>   
            </div>
            <h1 class="hot-coffee">Iced Coffee Menu</h1>
            <form action="insert_product.php" method="post" class="menu-list" id="order-form">
                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/mochafrappe.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Mocha Frappe</h2>
                            <p class="product_price">₱210.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-1" name="sugar" value="10%">
                            <label for="less-1">10%</label>
                            <input type="radio" id="medium-1" name="sugar" value="20%">
                            <label for="medium-1">20%</label>
                            <input type="radio" id="many-1" name="sugar" value="30%">
                            <label for="many-1">30%</label>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/strawberryvanillafrappe.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Strawberry Vanilla Frappe</h2>
                            <p class="product_price">₱215.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-2" name="sugar" value="10%">
                            <label for="less-2">10%</label><br>
                            <input type="radio" id="medium-2" name="sugar" value="20%">
                            <label for="medium-2">20%</label><br>
                            <input type="radio" id="many-2" name="sugar" value="30%">
                            <label for="many-2">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/Vanillamacademia.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Vanilla Macadamia Frappe</h2>
                            <p class="product_price">₱195.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-3" name="sugar" value="10%">
                            <label for="less-3">10%</label><br>
                            <input type="radio" id="medium-3" name="sugar" value="20%">
                            <label for="medium-3">20%</label><br>
                            <input type="radio" id="many-3" name="sugar" value="30%">
                            <label for="many-3">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/lemonlycheetea.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Lemon Lynchee Tea</h2>
                            <p class="product_price">₱185.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                    <div class="sugar-container">
                            <input type="radio" id="less-4" name="sugar" value="10%">
                            <label for="less-4">10%</label><br>
                            <input type="radio" id="medium-4" name="sugar" value="20%">
                            <label for="medium-4">20%</label><br>
                            <input type="radio" id="many-4" name="sugar" value="30%">
                            <label for="many-4">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/JavaChipFrappe.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Java Chip Frappe</h2>
                            <p class="product_price">₱215.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-5" name="sugar" value="10%">
                            <label for="less-5">10%</label><br>
                            <input type="radio" id="medium-5" name="sugar" value="20%">
                            <label for="medium-5">20%</label><br>
                            <input type="radio" id="many-5" name="sugar" value="30%">
                            <label for="many-5">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/icedtea.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Iced Tea</h2>
                            <p class="product_price">₱100.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-6" name="sugar" value="10%">
                            <label for="less-6">10%</label><br>
                            <input type="radio" id="medium-6" name="sugar" value="20%">
                            <label for="medium-6">20%</label><br>
                            <input type="radio" id="many-6" name="sugar" value="30%">
                            <label for="many-6">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/ice-caramel.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Iced Caramel Tea</h2>
                            <p class="product_price">₱115.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-7" name="sugar" value="10%">
                            <label for="less-7">10%</label><br>
                            <input type="radio" id="medium-7" name="sugar" value="20%">
                            <label for="medium-7">20%</label><br>
                            <input type="radio" id="many-7" name="sugar" value="30%">
                            <label for="many-7">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/ice-chocolate.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Iced Chocolate Tea</h2>
                            <p class="product_price">₱100.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar Level</h2>
                    <div class="coffee-2">
                        <div class="sugar-container">
                            <input type="radio" id="less-8" name="sugar" value="10%">
                            <label for="less-8">10%</label><br>
                            <input type="radio" id="medium-8" name="sugar" value="20%">
                            <label for="medium-8">20%</label><br>
                            <input type="radio" id="many-8" name="sugar" value="30%">
                            <label for="many-8">30%</label><br>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>
            </form>
        </section>

        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.addBtn input[type="submit"]').forEach(button => {
                    button.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent default form submission

                        // Get the parent container of the clicked button
                        const container = this.closest('.container');

                        // Extract values from the clicked container
                        const productName = container.querySelector('.content .product_name').innerText;
                        let productPrice = container.querySelector('.content .product_price').innerText;
                        const sugarLevel = container.querySelector('.coffee-2 input[name="sugar"]:checked').value;
                        const quantityInput = container.querySelector('.quantity input[name="pQuantity"]');

                        // Remove PHP peso sign and convert productPrice to integer
                        productPrice = parseInt(productPrice.replace('₱', '').trim());

                        // Create a new FormData object
                        const formData = new FormData();
                        formData.append('pName', productName);
                        formData.append('sugarLevel', sugarLevel);
                        formData.append('pPrice', productPrice);
                        formData.append('pQuantity', quantityInput.value);

                        // Send the form data to the server using AJAX
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'insert_product.php', true);
                        xhr.onload = function() {
                            // Handle the response from the server
                            if (xhr.status === 200) {
                                // Show alert
                                alert("Order added successfully!");

                                // Reset quantity and sugar level inputs
                                quantityInput.value = '1';
                                container.querySelectorAll('.coffee-2 input[name="sugar"]:checked').forEach(input => {
                                    input.checked = false;
                                });
                            } else {
                                console.log('Error:', xhr.statusText);
                            }
                        };
                        xhr.send(formData);
                    });
                });
            });


        </script>
    </body>
</html>