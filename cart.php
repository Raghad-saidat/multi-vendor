<?php
session_start();
// ملاحظة: هنا سنضع كود الـ PHP لاحقاً لجلب البيانات من الداتابيس
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Store نشمي</title>
    
    <link rel="stylesheet" href="cart.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="cart-container">
        
        <main class="cart-items-section">
            <div class="cart-header">
                <h2><i class="fa-solid fa-cart-shopping"></i> Shopping Cart</h2>
                <span>2 Items in your cart</span>
            </div>

            <div class="cart-item">
                <img src="https://via.placeholder.com/100" alt="Product">
                <div class="item-info">
                    <h3>Smart Watch Series 8</h3>
                    <p>Vendor: <span style="color: var(--nova-red);">Nashmi Store</span></p>
                </div>
                <div class="quantity-control">
                    <button class="quantity-btn"><i class="fa-solid fa-minus"></i></button>
                    <span>1</span>
                    <button class="quantity-btn"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="item-price">JOD 45.00</div>
                <div class="delete-item"><i class="fa-solid fa-trash-can"></i></div>
            </div>

            <div class="cart-item">
                <img src="https://via.placeholder.com/100" alt="Product">
                <div class="item-info">
                    <h3>Wireless Headphones</h3>
                    <p>Vendor: <span style="color: var(--nova-red);">Zaid Tech</span></p>
                </div>
                <div class="quantity-control">
                    <button class="quantity-btn"><i class="fa-solid fa-minus"></i></button>
                    <span>2</span>
                    <button class="quantity-btn"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="item-price">JOD 30.00</div>
                <div class="delete-item"><i class="fa-solid fa-trash-can"></i></div>
            </div>

            <a href="index.php" class="continue-shopping">
                <i class="fa-solid fa-arrow-left"></i> Continue Shopping
            </a>
        </main>

        <aside class="cart-summary">
            <h3>Order Summary</h3>
            
            <div class="summary-row">
                <span>Subtotal</span>
                <span>JOD 75.00</span>
            </div>
            
            <div class="summary-row">
                <span>Shipping Fee</span>
                <span>JOD 2.00</span>
            </div>
            
            <div class="summary-row total-row">
                <span>Total Amount</span>
                <span>JOD 77.00</span>
            </div>

            <a href="checkout.php" class="checkout-btn">
                <i class="fa-solid fa-credit-card"></i> Proceed to Checkout
            </a>
            
            <div style="margin-top:20px; text-align:center; font-size:0.8rem; opacity:0.7;">
                <i class="fa-solid fa-shield-halved"></i> 100% Secure Transaction
            </div>
        </aside>

    </div>

</body>
</html>