<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Categories | Nova Admin</title>
     <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="category.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="admin-layout">

    <nav class="sidebar">
        <div class="sidebar-logo">Nova<span>Admin</span></div>
        <ul>
            <li><a href="admin_dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
            <li><a href="approve.php"><i class="fa-solid fa-clipboard-check"></i> Approve Products</a></li>
            <li><a href="vendor_categories.php" class="active"><i class="fa-solid fa-store"></i> Vendor Types</a></li>
            <li><a href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <header class="dash-header">
            <div class="header-info">
                <h1>Vendor <span class="highlight">Classifications</span></h1>
                <p>Define the types of stores allowed on the platform (e.g., Freelancers, Studios, Manufacturers).</p>
            </div>
        </header>

        <div class="category-wrapper">
            <section class="add-category-card">
                <h3><i class="fa-solid fa-plus-circle"></i> Define New Vendor Type</h3>
                <form action="save_vendor_cat.php" method="POST">
                    <div class="form-group">
                        <label>Vendor Category Name</label>
                        <input type="text" name="v_cat_name" placeholder="e.g. Graphic Design Studio" required>
                    </div>
                    <div class="form-group">
                        <label>Registration Requirements</label>
                        <textarea name="v_cat_desc" rows="3" placeholder="What should vendors in this category provide? (e.g. Portfolio, ID)"></textarea>
                    </div>
                    <button type="submit" class="btn-add-cat">Add Vendor Category</button>
                </form>
            </section>

            <section class="category-list-card">
                <h3>Current Vendor Categories</h3>
                <table class="cat-table">
                    <thead>
                        <tr>
                            <th>Classification</th>
                            <th>Requirements / Description</th>
                            <th style="text-align: center;">Total Stores</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Digital Freelancers</strong></td>
                            <td>Independent designers and developers.</td>
                            <td style="text-align: center;"><span class="count-badge">24</span></td>
                            <td>
                                <button class="btn-delete-cat"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Manufacturing Labs</strong></td>
                            <td>Workshops with 3D printers and CNC machines.</td>
                            <td style="text-align: center;"><span class="count-badge">12</span></td>
                            <td>
                                <button class="btn-delete-cat"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

</body>
</html>
               

