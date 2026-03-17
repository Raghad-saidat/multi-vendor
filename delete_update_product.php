<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Inventory | Nova Pixel</title>
    <link rel="stylesheet" href="vendore css.css">
    <link rel="stylesheet" href="delete_update_product.css">
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
                <h1>Edit <span class="highlight">Inventory</span></h1>
                <p>Modify product details directly in the table below.</p>
            </div>
            <div class="header-actions">
                <button class="btn-save-nova">Save All Changes</button>
            </div>
        </header>

        <section class="inventory-container">
            <table class="nova-edit-table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Product Name</th>
                        <th style="width: 15%;">Category</th>
                        <th style="width: 10%;">Price ($)</th>
                        <th style="width: 10%;">Qty</th>
                        <th style="width: 35%;">Short Description</th>
                        <th style="width: 10%; text-align: center;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" value="3D Printed Prototype" class="row-input"></td>
                        <td>
                            <select class="row-input">
                                <option selected>Manufacturing</option>
                                <option>Graphic Design</option>
                                <option>Electronics</option>
                            </select>
                        </td>
                        <td><input type="number" value="25.00" class="row-input"></td>
                        <td><input type="number" value="45" class="row-input"></td>
                        <td><input type="text" value="High-quality resin finish, durable." class="row-input"></td>
                        <td style="text-align: center;">
                            <button class="delete-btn" onclick="return confirm('Permanently delete this item?')">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" value="Nova Branding Kit" class="row-input"></td>
                        <td>
                            <select class="row-input">
                                <option>Manufacturing</option>
                                <option selected>Graphic Design</option>
                                <option>Electronics</option>
                            </select>
                        </td>
                        <td><input type="number" value="150.00" class="row-input"></td>
                        <td><input type="number" value="5" class="row-input"></td>
                        <td><input type="text" value="Full logo set and social media assets." class="row-input"></td>
                        <td style="text-align: center;">
                            <button class="delete-btn">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
  <script src="script.js"></script>
</body>
</html>