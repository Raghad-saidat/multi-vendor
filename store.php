<?php
// استقبال بيانات المتجر من الـ Index
$name = isset($_GET['name']) ? $_GET['name'] : 'Nova Vendor';
$desc = isset($_GET['desc']) ? $_GET['desc'] : 'Welcome to our store at NovaPixel.';
$rate = isset($_GET['rate']) ? $_GET['rate'] : '5.0';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | NovaPixel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> <style>
        /* ستايل الهيدر للمحل */
        .store-profile-header {
            background: #fff;
            padding: 40px 10%;
            display: flex;
            align-items: center;
            gap: 30px;
            border-bottom: 2px solid #f8f9fa;
        }
        .store-logo-circle {
            width: 100px;
            height: 100px;
            background: #001a3d;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }
        .store-text-info h1 { font-size: 2.2rem; color: #001a3d; margin: 0; }
        .store-text-info p { color: #666; margin: 5px 0; }
        .rating-badge { color: #f1c40f; font-weight: bold; }

        /* ستايل عرض المنتجات */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            padding: 40px 10%;
            background: #fdfdfd;
        }
        .product-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            border: 1px solid #eee;
            text-align: center;
            transition: 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        .product-img-box {
            height: 180px;
            background: #f9f9f9;
            border-radius: 10px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            font-size: 4rem;
        }
        .product-name { font-size: 1.2rem; color: #333; margin-bottom: 10px; }
        .product-price { color: #DC0000; font-weight: bold; font-size: 1.3rem; display: block; margin-bottom: 15px; }
        
        /* زر العرض - هذا هو الرابط لصفحة التفاصيل */
        .view-details-btn {
            display: block;
            background: #001a3d;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
        }
        .view-details-btn:hover { background: #DC0000; }
    </style>
</head>
<body>

    <header class="store-profile-header">
        <div class="store-logo-circle">
            <i class="fa-solid fa-shop"></i>
        </div>
        <div class="store-text-info">
            <h1><?php echo $name; ?></h1>
            <p><?php echo $desc; ?></p>
            <div class="rating-badge">
                <i class="fa-solid fa-star"></i> <?php echo $rate; ?> Verified Store
            </div>
        </div>
    </header>

    <main class="products-grid">
        
        <div class="product-card">
            <div class="product-img-box"><i class="fa-solid fa-headphones"></i></div>
            <h4 class="product-name">Wireless Headphones Pro</h4>
            <span class="product-price">55.00 JOD</span>
            <a href="product_detail.php?name=Wireless Headphones Pro&price=55.00&rate=4.9" class="view-details-btn">View Details</a>
        </div>

        <div class="product-card">
            <div class="product-img-box"><i class="fa-solid fa-keyboard"></i></div>
            <h4 class="product-name">Mechanical Keyboard</h4>
            <span class="product-price">75.00 JOD</span>
            <a href="product_detail.php?name=Mechanical Keyboard&price=75.00&rate=4.7" class="view-details-btn">View Details</a>
        </div>

        <div class="product-card">
            <div class="product-img-box"><i class="fa-solid fa-plug"></i></div>
            <h4 class="product-name">Fast Charger 65W</h4>
            <span class="product-price">12.00 JOD</span>
            <a href="product_detail.php?name=Fast Charger 65W&price=12.00&rate=4.5" class="view-details-btn">View Details</a>
        </div>

    </main>

</body>
</html>