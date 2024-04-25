<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/user.css">

        <title>Kape Bai Users</title>
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

                        <a href="../pages/user.php" class="nav__link active">
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

        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>

        <style>
    /* CSS for product divs */
    .product-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .product {
        border: 1px solid #ddd;
        padding: 20px;
        width: calc(33.33% - 20px);
        box-sizing: border-box;
        text-align: center;
    }

    .product img {
        max-width: 100px;
        height: auto;
    }

    .product h3 {
        margin-top: 10px;
        margin-bottom: 5px;
        font-size: 1.2rem;
    }

    .product p {
        margin: 5px 0;
    }

    .product input[type="number"] {
        width: 50px;
        text-align: center;
    }

    .product button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .product button:hover {
        background-color: #45a049;
    }

    /* CSS for cart */
    .cart-container {
        position: fixed;
        top: 0;
        right: 0;
        width: 300px;
        background-color: #f9f9f9;
        border-left: 1px solid #ddd;
        padding: 20px;
        box-sizing: border-box;
        height: 100%;
        overflow-y: auto;
        transition: transform 0.3s ease-in-out; /* Smooth transition when showing/hiding */
        transform: translateX(100%); /* Initially hidden */
    }

    .show-cart {
        transform: translateX(0); /* Show cart */
    }

    .cart-item {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .cart-item img {
        max-width: 50px;
        height: auto;
        margin-right: 10px;
    }

    .place-order-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .place-order-button:hover {
        background-color: #45a049;
    }

    /* CSS for the visible button */
    .cart-toggle-button {
        top: 20px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>

<!-- Display Products as Divs -->
<div class="product-container">
    <?php
    // Retrieve products from the database
    $connection = mysqli_connect("localhost", "root", "", "kapebai_db");
    if($connection) {
        $selectSql = "SELECT * FROM products";
        $result = mysqli_query($connection, $selectSql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="product" data-id="<?php echo $row['id']; ?>" data-quantity="<?php echo $row['quantity']; ?>">
                    <img src="uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>">
                    <h3><?php echo $row['product_name']; ?></h3>
                    <p>Price: <?php echo $row['price']; ?></p>
                    <p>Quantity: <?php echo $row['quantity']; ?></p>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $row['quantity']; ?>" value="1">
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <?php
            }
        } else {
            echo "<p>No products found.</p>";
        }
        mysqli_close($connection);
    } else {
        echo "<p>Failed to connect to database.</p>";
    }
    ?>
</div>

<!-- Cart Section -->
<button class="cart-toggle-button">Toggle Cart</button>
<div class="cart-container">
    <h2>Cart</h2>
    <div class="cart-items">
        <!-- Cart items will be added dynamically via JavaScript -->
    </div>
    <button class="place-order-button">Place Order</button>
</div>

<script>
    // JavaScript for toggling cart visibility
    const cartToggleButton = document.querySelector('.cart-toggle-button');
    const cartContainer = document.querySelector('.cart-container');

    cartToggleButton.addEventListener('click', () => {
        cartContainer.classList.toggle('show-cart');
    });

    // JavaScript for adding products to cart and placing order
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsContainer = document.querySelector('.cart-items');
    const placeOrderButton = document.querySelector('.place-order-button');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const product = button.parentElement;
            const productId = product.dataset.id;
            const productName = product.querySelector('h3').textContent;
            const productPrice = parseFloat(product.querySelector('p:nth-of-type(1)').textContent.replace('Price: ', ''));
            const productQuantity = parseFloat(product.querySelector('input[type="number"]').value);
            const productImage = product.querySelector('img').src;

            const existingCartItem = document.querySelector(`.cart-item[data-id="${productId}"]`);
            if (existingCartItem) {
                const existingQuantity = parseFloat(existingCartItem.querySelector('.quantity').textContent);
                const newQuantity = existingQuantity + productQuantity;
                if (newQuantity <= parseFloat(product.dataset.quantity)) {
                    existingCartItem.querySelector('.quantity').textContent = newQuantity;
                } else {
                    alert(`The product ${productName} only has ${product.dataset.quantity} available.`);
                }
            } else {
                if (productQuantity <= parseFloat(product.dataset.quantity)) {
                    const cartItem = document.createElement('div');
                    cartItem.classList.add('cart-item');
                    cartItem.dataset.id = productId;
                    cartItem.innerHTML = `
                        <img src="${productImage}" alt="${productName}">
                        <span>${productName}</span>
                        <span class="quantity">${productQuantity}</span>
                        <button class="remove-from-cart">Remove</button>
                    `;
                    cartItemsContainer.appendChild(cartItem);
                } else {
                    alert(`The product ${productName} only has ${product.dataset.quantity} available.`);
                }
            }
        });
    });

    placeOrderButton.addEventListener('click', () => {
        const cartItems = document.querySelectorAll('.cart-item');
        if (cartItems.length === 0) {
            alert('Your cart is empty.');
        } else {
            // Your code to place the order
            alert('Order placed successfully.');
            // Clear the cart after placing the order
            cartItemsContainer.innerHTML = '';
        }
    });

    // Remove product from cart
    cartItemsContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-from-cart')) {
            e.target.parentElement.remove();
        }
    });
</script>
    </body>
</html>