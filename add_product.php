<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product | Nova Pixel</title>
    <link rel="stylesheet" href="vendore css.css">
    <link rel="stylesheet" href="add_product.css">
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
                <h1>Add New <span class="highlight">Product</span></h1>
                <p>Upload a new item to your Nova Pixel shop.</p>
            </div>
            <button class="btn-secondary-nova" onclick="window.location.href='products_status.html'">
                Cancel
            </button>
        </header>

        <section class="form-card">
            <form action="save_product.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="prod_name" placeholder="e.g. 3D Printed Gear" required>
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category">
                            <option value="electronics">Electronics</option>
                            <option value="design">Graphic Design</option>
                            <option value="manufacturing">Manufacturing / 3D Print</option>
                            <option value="merch">Merchandise</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price ($)</label>
                        <input type="number" name="price" step="0.01" placeholder="0.00" required>
                    </div>

                    <div class="form-group">
                        <label>Stock Quantity</label>
                        <input type="number" name="stock" placeholder="e.g. 50" required>
                    </div>

                    <div class="form-group full-width">
                        <label>Product Description</label>
                        <textarea name="description" rows="4" placeholder="Describe your product details here..."></textarea>
                    </div>

                    <div class="form-group full-width">
                        <label>Product Image</label>
                        <div class="image-upload-box">
                            <input type="file" name="prod_image" id="file-input">
                            <label for="file-input">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <span>Click to upload image</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary-nova">Upload Product</button>
                </div>
            </form>
        </section>
    </main>
<script src="script.js"></script>
</body>
</html>
