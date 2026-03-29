<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Nova Pixel</title>
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="admin-layout">

    <nav class="sidebar">
        <div class="sidebar-logo">Nova<span>Admin</span></div>
        <ul>
            <li><a href="admin_dashboard.php" class="active"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
            <li><a href="approve.php"><i  class="fa-solid fa-clipboard-check"></i> Approved products</a></li>
            <li><a href="category.php"><i class="fa-solid fa-store"></i> Vendor Types</a></li>
            <li><a href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <header class="dash-header">
            <div class="header-info">
                <h1>Global <span class="highlight">Vendors</span> Schedule</h1>
                <p>Overview of all registered stores and their current status.</p>
            </div>
            <div class="admin-profile">
                <span>Welcome, <strong>Raghad</strong></span>
                <i class="fa-solid fa-circle-user"></i>
            </div>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <h3>Total Vendors</h3>
                <p>42</p>
            </div>
            <div class="stat-card">
                <h3>Pending Approval</h3>
                <p class="warning">5</p>
            </div>
            <div class="stat-card">
                <h3>Active Stores</h3>
                <p class="success">37</p>
            </div>
        </section>

        <section class="table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Store Name</th>
                        <th>Vendor Name</th>
                        <th>Join Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Pixel Art Studio</strong></td>
                        <td>Zaid Ahmed</td>
                        <td>2026-03-10</td>
                        <td><span class="status-badge active">Active</span></td>
                        <td><button class="btn-manage">Details</button></td>
                    </tr>
                    <tr>
                        <td><strong>Tech Gear Jordan</strong></td>
                        <td>Omar Khalid</td>
                        <td>2026-03-20</td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td><button class="btn-manage">Review</button></td>
                    </tr>
                    <tr>
                        <td><strong>Creative Designs</strong></td>
                        <td>Laila Ali</td>
                        <td>2026-02-15</td>
                        <td><span class="status-badge closed">Suspended</span></td>
                        <td><button class="btn-manage">Manage</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>