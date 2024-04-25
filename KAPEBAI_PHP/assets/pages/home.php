<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/styles.css">

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
                        <a href="../pages/home.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="../pages/user.php" class="nav__link ">
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
    </body>
</html>