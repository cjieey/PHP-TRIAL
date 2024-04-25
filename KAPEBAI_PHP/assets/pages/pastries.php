<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/pastries.css">

        <title>Kape Bai Pastries</title>
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
                <div class="box-container ">
                    <a href="../pages/iced-coffee.php" class="menu-link">
                        <img src="../img/2.png" alt="">
                        <p>ICED COFFEE</p>
                    </a>
                </div>

                <div class="box-container menu-active">
                    <a href="../pages/pastries.php" class="menu-link">
                        <img src="../img/3.png" alt="">
                        <p>PASTRIES</p>
                    </a>
                </div>   
            </div>
            <h1 class="hot-coffee">Pastries Menu</h1>
            <form action="insert_product.php" method="post" class="menu-list" id="order-form">
                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/chocolate_cake.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Chocolate Cake</h2>
                            <p class="product_price">₱150.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img src="../img/Cinnamon_roll.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Cinnamon Roll</h2>
                            <p class="product_price">₱50.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img src="../img/empanada-borek-puff.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Empanada Borek Puff</h2>
                            <p class="product_price">₱50.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img src="../img/belgian-liege-waffle.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Belgian Liege Waffle</h2>
                            <p class="product_price">₱175.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img src="../img/Danish_Apricot.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Danish Apricot</h2>
                            <p class="product_price">₱180.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img src="../img/gluten-free-sliced-bread.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Gluten Sliced Bread</h2>
                            <p class="product_price">₱180.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img class="honey" src="../img/honey-almond-mini-muffins.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Honey Almond Muffins</h2>
                            <p class="product_price">₱205.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                            <img src="../img/toaster-pancakes.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="product_name">Toaster Pancakes</h2>
                            <p class="product_price">₱255.00</p>
                        </div>
                    </div>
                    <div class="coffee-2">
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
                        const quantityInput = container.querySelector('.quantity input[name="pQuantity"]');

                        // Remove PHP peso sign and convert productPrice to integer
                        productPrice = parseInt(productPrice.replace('₱', '').trim());

                        // Create a new FormData object
                        const formData = new FormData();
                        formData.append('pName', productName);
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