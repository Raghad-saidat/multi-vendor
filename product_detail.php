<?php
// استقبال البيانات من الرابط
$product_name  = isset($_GET['name'])  ? $_GET['name']  : 'Premium Product';
$product_price = isset($_GET['price']) ? $_GET['price'] : '0.00';
$product_rate  = isset($_GET['rate'])  ? $_GET['rate']  : '5.0';

$product_desc = "This high-quality item is one of our best-sellers at NovaPixel. It combines modern design with practical functionality, making it a perfect choice for your daily needs.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product_name); ?> | NovaPixel</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css"> <link rel="stylesheet" href="product_detail.css"> </head>
<body>

    <div class="product-page-wrapper">
        <div class="product-visuals">
            <i class="fa-solid fa-image"></i>
        </div>

        <div class="product-details-content">
            <nav style="margin-bottom: 20px; font-size: 0.9rem; color: #888;">
                <a href="index.php" style="color: inherit; text-decoration: none;">Home</a> / 
                <span>Product Details</span>
            </nav>

            <h1><?php echo htmlspecialchars($product_name); ?></h1>
            
            <div class="product-meta">
                <div class="p-rating">
                    <i class="fa-solid fa-star"></i> <?php echo $product_rate; ?>
                </div>
                <span style="color: #ccc;">|</span>
                <span style="color: #28a745; font-weight: 600;">In Stock</span>
            </div>

            <div class="p-price"><?php echo $product_price; ?> JOD</div>

            <p class="p-description">
                <?php echo $product_desc; ?>
            </p>

            <form action="cart_process.php" method="POST" class="action-area">
                <div class="qty-box">
                    <span>Quantity:</span>
                    <input type="number" name="quantity" value="1" min="1" max="20">
                </div>

                <div class="btn-group">
                    <button type="submit" class="add-to-cart-btn">
                        <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                    </button>
                    <button type="button" class="wishlist-btn">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                </div>
            </form>
            
            <div style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;">
                <p style="font-size: 0.85rem; color: #777;">
                    <i class="fa-solid fa-truck-fast"></i> Delivery available in Jordan
                </p>
            </div>
        </div>
    </div>

</body>
</html>