<?php
session_start();

// ملاحظة لـ رغد: هون مستقبلاً بنسحب البيانات الحقيقية من السلة (Cart Session)
// حالياً الداتا "Static" عشان العرض (Front-end Demo)
$subtotal = 75.00;
$shipping = 2.00;
$total = $subtotal + $shipping;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Store نشمي</title>
    
    <link rel="stylesheet" href="checkout.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="checkout-container">
        
        <form action="confirm.php" method="POST" id="checkout-form">
            
            <div class="checkout-card">
                <h2><i class="fa-solid fa-map-location-dot"></i> Shipping Details</h2>
                <div class="form-grid">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="Raghad" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Al-Sa'eedat" required>
                    </div>
                    <div class="form-group full-width">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" placeholder="07XXXXXXXX" required>
                    </div>
                    <div class="form-group full-width">
                        <label>City</label>
                        <select name="city" required>
                            <option value="Aqaba">Aqaba (العقبة)</option>
                            <option value="Amman">Amman (عمان)</option>
                            <option value="Irbid">Irbid (إربد)</option>
                            <option value="Zarqa">Zarqa (الزرقاء)</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label>Detailed Address</label>
                        <textarea name="address" rows="3" placeholder="Street name, Building No, Apartment No..." required></textarea>
                    </div>
                </div>
            </div>

            <div class="checkout-card">
                <h2><i class="fa-solid fa-credit-card"></i> Payment Method</h2>
                <div class="payment-methods">
                    
                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="cod" checked onclick="toggleCardInfo(false)">
                        <span><i class="fa-solid fa-money-bill-wave"></i> Cash on Delivery (الدفع عند الاستلام)</span>
                    </label>

                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="card" onclick="toggleCardInfo(true)">
                        <span><i class="fa-solid fa-card-visa"></i> Credit / Debit Card (بطاقة ائتمان)</span>
                    </label>

                    <div id="card-info-box">
                        <div class="form-group full-width">
                            <label>Card Number</label>
                            <input type="text" name="card_no" placeholder="1234 5678 9101 1121">
                        </div>
                        <div class="card-input-group">
                            <div class="form-group">
                                <label>Expiry Date</label>
                                <input type="text" name="exp_date" placeholder="MM/YY">
                            </div>
                            <div class="form-group">
                                <label>CVV</label>
                                <input type="password" name="cvv" placeholder="***">
                            </div>
                        </div>
                        <p style="font-size: 0.8rem; color: #666; margin-top: 10px;">
                            <i class="fa-solid fa-lock"></i> Your card information is encrypted and secure.
                        </p>
                    </div>
                </div>
            </div>
        </form>

        <aside>
            <div class="checkout-card">
                <h2>Your Order</h2>
                
                <div class="order-summary-list">
                    <div class="order-item">
                        <span>Smart Watch Series 8 (x1)</span>
                        <strong>JOD <?php echo number_format(45, 2); ?></strong>
                    </div>
                    <div class="order-item">
                        <span>Gaming Mouse (x2)</span>
                        <strong>JOD <?php echo number_format(30, 2); ?></strong>
                    </div>
                </div>

                <div class="summary-totals">
                    <div class="total-line">
                        <span>Subtotal</span>
                        <span>JOD <?php echo number_format($subtotal, 2); ?></span>
                    </div>
                    <div class="total-line">
                        <span>Shipping Fee</span>
                        <span>JOD <?php echo number_format($shipping, 2); ?></span>
                    </div>
                    <div class="total-line grand-total">
                        <span>Total</span>
                        <span>JOD <?php echo number_format($total, 2); ?></span>
                    </div>
                </div>

                <button type="submit" form="checkout-form" class="place-order-btn">
                    Confirm & Place Order
                </button>

                <div style="margin-top: 20px; text-align: center;">
                    <a href="cart.php" style="color: var(--nova-red); text-decoration: none; font-size: 0.9rem;">
                        <i class="fa-solid fa-chevron-left"></i> Return to Cart
                    </a>
                </div>
            </div>
        </aside>

    </div>

    <script>
        function toggleCardInfo(show) {
            const cardBox = document.getElementById('card-info-box');
            if (show) {
                cardBox.style.display = 'block';
                // تفعيل خاصية الـ Required لبيانات البطاقة عند ظهورها
                cardBox.querySelectorAll('input').forEach(input => input.required = true);
            } else {
                cardBox.style.display = 'none';
                // إلغاء الـ Required عند الاختفاء
                cardBox.querySelectorAll('input').forEach(input => input.required = false);
            }
        }
    </script>

</body>
</html>