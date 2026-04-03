<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed | Store نشمي</title>
    <link rel="stylesheet" href="confirm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="success-container">
        <div class="success-icon">
            <i class="fa-solid fa-check"></i>
        </div>

        <h1>Thank You!</h1>
        <p>Your order has been placed successfully. We are now processing it and will contact you shortly for delivery.</p>

        <div class="order-number">
            Order ID: #NSH-<?php echo rand(10000, 99999); ?>
        </div>

        <div class="btn-group">
            <a href="index.php" class="primary-btn">
                <i class="fa-solid fa-house"></i> Back to Home
            </a>
            <a href="my_orders.php" class="secondary-btn">
                Track My Order <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div style="margin-top: 40px; border-top: 1px solid #eee; padding-top: 20px;">
            <p style="font-size: 0.8rem; margin: 0;">A confirmation email has been sent to your inbox.</p>
        </div>
    </div>

</body>
</html>