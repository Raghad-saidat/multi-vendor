<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor Profile | NovaPixel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="profile css.css">
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
        <li><a href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i>log out</a></li>
    </ul>
</nav>

    <main class="dashboard-content">
        <header class="dash-header">
            <h2><i class="fa-solid fa-user-gear"></i> Store Settings</h2>
        </header>

        <section class="profile-container">
            <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                <div class="profile-card">
                    <h3>Basic Information</h3>
                    <hr>
                    
                    <div class="form-group">
                        <label>Store Name</label>
                        <input type="text" name="store_name" value="Nova Pixel Store" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" value="vendor@example.com" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" value="+962 7XXXXXXXX">
                    </div>

                    <div class="form-group">
                        <label>Store Description</label>
                        <textarea name="description" rows="4">Premium tech and design tools.</textarea>
                    </div>

                    <button type="submit" class="btn-save">Update Profile</button>
                </div>
            </form>
        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>
</html>