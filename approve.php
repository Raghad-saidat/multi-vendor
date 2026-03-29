<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Products | Nova Admin</title>
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="approve.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="admin-layout">

    <nav class="sidebar">
        <div class="sidebar-logo">Nova<span>Admin</span></div>
        <ul>
            <li><a href="admin_dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
            <li><a href="approve_products.php" class="active"><i class="fa-solid fa-clipboard-check"></i> Approve Products</a></li>
             <li><a href="category.php"><i class="fa-solid fa-store"></i> Vendor Types</a></li>
            <li><a href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <header class="dash-header">
            <div class="header-info">
                <h1>Products <span class="highlight">Approval</span> Queue</h1>
                <p>Review new product submissions from vendors.</p>
            </div>
            <div class="pending-count">
                <span>Pending: <strong>8</strong></span>
            </div>
        </header>

        <section class="approval-grid">
            
            <div class="approval-card">
                <div class="product-preview">
                    <img src="uploads/pending_item1.jpg" alt="Product">
                    <span class="vendor-tag">Vendor: Zaid_Pixel</span>
                </div>
                <div class="card-details">
                    <h3>Modern Logo Design Kit</h3>
                    <div class="meta-info">
                        <span><i class="fa-solid fa-tag"></i> Graphic Design</span>
                        <span><i class="fa-solid fa-money-bill-wave"></i> $45.00</span>
                    </div>
                    <p class="desc-text">A complete set of minimalist logos for tech startups...</p>
                    
                    <div class="approval-actions">
                        <button class="btn-approve" onclick="confirmAction('approve', 'Product Name')">
                            <i class="fa-solid fa-check"></i> Approve
                        </button>
                        <button class="btn-reject" onclick="confirmAction('reject', 'Product Name')">
                            <i class="fa-solid fa-xmark"></i> Reject
                        </button>
                    </div>
                </div>
            </div>

            </section>
    </main>

    <script>
        function confirmAction(type, name) {
            return confirm(`Are you sure you want to ${type} "${name}"?`);
        }
    </script>
</body>
</html>