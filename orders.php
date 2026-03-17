
<?php
// Top of orders.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database update logic goes here
    // Then the rest of the page loads...
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor Orders | NovaPixel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="orders css.css">
    <link rel="stylesheet" href="vendore css.css">
</head>
<body>

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
        <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>log out</a></li>
    </ul>
</nav>

    <main class="dashboard-content">
        <header class="dash-header">
            <h2>Customer Orders</h2>
        </header>

        

        <section class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Update Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1024</td>
                        <td>Ahmad Ali</td>
                        <td>Gaming Mouse</td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td>
                            <form action="update_status.php" method="POST" class="status-form">
                                <input type="hidden" name="order_id" value="1024">
                                <select name="new_status" class="status-select">
                                    <option value="pending">Pending</option>
                                    <option value="shipping">Shipping</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                                <button type="submit" class="btn-update">Update</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>
</html>
     