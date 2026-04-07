<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders | NovaPixel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="tracking.css"> 
</head>
<body>

    <div class="orders-container">
        <header class="orders-header">
            <h1><i class="fa-solid fa-box-archive"></i> My Orders</h1>
            <p>View and track your recent purchase history</p>
        </header>

        <div class="orders-list">
            
            <div class="order-card">
                <div class="order-top">
                    <div class="order-id-group">
                        <span class="label">Order ID</span>
                        <span class="value">#NSH-88291</span>
                    </div>
                    <div class="status-wrapper">
                        <span class="status-badge pending">Pending</span>
                    </div>
                </div>

                <div class="order-mid">
                    <div class="info-item">
                        <i class="fa-solid fa-calendar"></i>
                        <div class="text">
                            <label>Date</label>
                            <span>Oct 24, 2023</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-coins"></i>
                        <div class="text">
                            <label>Total</label>
                            <span>45.00 JOD</span>
                        </div>
                    </div>
                    <div class="info-item full">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div class="text">
                            <label>Shipping To</label>
                            <span>Aqaba, Al-Manara St, Bldg 5</span>
                        </div>
                    </div>
                </div>

                <div class="order-bottom">
                    <button class="btn-details">Order Details</button>
                    <button class="btn-track">Track Order</button>
                </div>
            </div>

            <div class="order-card">
                <div class="order-top">
                    <div class="order-id-group">
                        <span class="label">Order ID</span>
                        <span class="value">#NSH-77102</span>
                    </div>
                    <div class="status-wrapper">
                        <span class="status-badge delivered">Delivered</span>
                    </div>
                </div>

                <div class="order-mid">
                    <div class="info-item">
                        <i class="fa-solid fa-calendar"></i>
                        <div class="text">
                            <label>Date</label>
                            <span>Oct 15, 2023</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-coins"></i>
                        <div class="text">
                            <label>Total</label>
                            <span>120.50 JOD</span>
                        </div>
                    </div>
                    <div class="info-item full">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div class="text">
                            <label>Shipping To</label>
                            <span>Amman, Seventh Circle</span>
                        </div>
                    </div>
                </div>

                <div class="order-bottom">
                    <button class="btn-details">Order Details</button>
                    <button class="btn-track-disabled" disabled>Completed</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>