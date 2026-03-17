<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="vendore css.css"> <title>Vendor Dashboard</title>
</head>
<body class="dashboard-body">

    <nav class="sidebar">
    <div class="sidebar-logo">Nova<span>Vendor</span></div>
    <ul>
        <li><a href="vendor_dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
        
        <li class="has-submenu">
            <a href="#" onclick="toggleSubmenu()">
                <i class="fa-solid fa-tags"></i> Products 
                <i class="fa-solid fa-chevron-down" style="margin-left: auto; font-size: 0.8rem;"></i>
            </a>
            <ul id="product-submenu" style="display: none; list-style: none; padding-left: 30px; background: #001a3d;">
                <li><a href="product_status.php">status</a></li>
                <li><a href="add_product.php">add product</a></li>
                <li><a href="delete_update_product.php">delete and update</a></li>
            </ul>
        </li>

        <li><a href="orders.php"><i class="fa-solid fa-box"></i> Orders</a></li>
        <li><a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
        <li><a href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i>log out</a></li>
    </ul>
</nav>

    <main class="dashboard-content">
        <header class="dash-header">
            <h2>Welcome Back, Vendor!</h2>
            <button id="lang-toggle" onclick="toggleLanguage()">EN</button>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <h3>Total Revenue</h3>
                <p>$12,450.00</p>
                <i class="fa-solid fa-dollar-sign"></i>
            </div>
            <div class="stat-card">
                <h3>Total Orders</h3>
                <p>145</p>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </section>

        <section class="analytics">
            <h3>Sales Performance Analysis</h3>
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>
</html>