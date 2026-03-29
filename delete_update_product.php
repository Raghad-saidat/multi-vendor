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
                <ul id="product-submenu" style="display: block; list-style: none; padding-left: 30px; background: #001a3d;">
                    <li><a href="product_status.php">Status</a></li>
                    <li><a href="add_product.php">Add Product</a></li>
                    <li><a href="delete_update_product.php" class="active">Delete & Update</a></li>
                </ul>
            </li>
            <li><a href="orders.php"><i class="fa-solid fa-box"></i> Orders</a></li>
            <li><a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </nav>

    <main class="dashboard-content">
        <header class="dash-header">
            <div class="header-title">
                <h1>Edit <span class="highlight">Inventory</span></h1>
                <p>Manage your products visually. Changes are saved globally.</p>
            </div>
            <button class="btn-save-nova" type="submit" form="inventory-form">
                <i class="fa-solid fa-floppy-disk"></i> Save All Changes
            </button>
        </header>

        <form id="inventory-form" action="update_logic.php" method="POST">
            <section class="inventory-grid">
                
                <div class="inventory-card">
                    <div class="card-img-container">
                        <img src="uploads/product_example.jpg" alt="Product Image">
                        
                        <div class="delete-overlay">
                            <a href="delete_product.php?id=1" class="delete-btn" onclick="return confirm('Are you sure you want to delete this product?')">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-content">
                        <h3>Product Name Here</h3>
                        
                        <div class="row-flex">
                            <div class="input-group">
                                <label>Price ($)</label>
                                <input type="number" name="price[]" value="29.99" step="0.01" class="card-input">
                            </div>
                            <div class="input-group">
                                <label>Stock Qty</label>
                                <input type="number" name="stock[]" value="15" class="card-input">
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Short Description</label>
                            <textarea name="desc[]" class="card-input" rows="2">High-quality design asset for your project.</textarea>
                        </div>
                        
                        <input type="hidden" name="product_id[]" value="1">
                    </div>
                </div>
                </section>
        </form>
    </main>

    <script>
        function toggleSubmenu() {
            const submenu = document.getElementById('product-submenu');
            submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'block' : 'none';
        }
    </script>
</body>
</html>