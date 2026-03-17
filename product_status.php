<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Status | Nova Pixel</title>
    <link rel="stylesheet" href="product_status.css">
    <link rel="stylesheet" href="vendore css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="nova-layout">

   
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
            <div class="header-title">
                <h1>Product <span class="highlight">Status</span></h1>
                <p>Real-time inventory tracking for Nova Pixel.</p>
            </div>
            <button class="btn-primary-nova" onclick="window.location.href='add_product.php'">
                <i class="fa-solid fa-plus"></i> Add New Product
            </button>
        </header>

        <section class="status-card">
            <table class="nova-table">
                <thead>
                    <tr>
                        <th>Product Details</th>
                        <th>Category</th>
                        <th>Stock Level</th>
                        <th>Status</th>
                        <th>Visibility</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>3D Printed Gear</strong></td>
                        <td>Manufacturing</td>
                        <td>45</td>
                        <td><span class="badge st-in">In Stock</span></td>
                        <td><i class="fa-solid fa-eye" style="color: #2ecc71;"></i> Public</td>
                    </tr>
                    <tr>
                        <td><strong>Custom Logo Design</strong></td>
                        <td>Graphic Design</td>
                        <td>2</td>
                        <td><span class="badge st-low">Low Stock</span></td>
                        <td><i class="fa-solid fa-eye" style="color: #2ecc71;"></i> Public</td>
                    </tr>
                    <tr>
                        <td><strong>Nova Pixel Sticker</strong></td>
                        <td>Merchandise</td>
                        <td>0</td>
                        <td><span class="badge st-out">Out of Stock</span></td>
                        <td><i class="fa-solid fa-eye-slash" style="color: #DC0000;"></i> Hidden</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
  <script src="script.js"></script>
</body>
</html>