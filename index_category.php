<?php
// استلام نوع الكاتيغوري من الرابط
$category_type = isset($_GET['type']) ? $_GET['type'] : 'General';

// مصفوفة بسيطة للبيانات (عشان العرض)
$categories = [
    'electronics' => ['title' => 'Electronics', 'icon' => 'fa-laptop', 'color' => '#001a3d'],
    'fashion'     => ['title' => 'Fashion', 'icon' => 'fa-shirt', 'color' => '#ff4757'],
    'mobiles'     => ['title' => 'Mobiles', 'icon' => 'fa-mobile-screen-button', 'color' => '#2f3542'],
    'home'        => ['title' => 'Home Bliss', 'icon' => 'fa-couch', 'color' => '#ffa502'],
    'gaming'      => ['title' => 'Gaming Gear', 'icon' => 'fa-gamepad', 'color' => '#5f27cd'],
    'sports'      => ['title' => 'Sports Wear', 'icon' => 'fa-dumbbell', 'color' => '#2ecc71']
];

$current = isset($categories[$category_type]) ? $categories[$category_type] : ['title' => 'Our Stores', 'icon' => 'fa-store', 'color' => '#001a3d'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $current['title']; ?> | NovaPixel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* ستايل خاص بشريط البحث داخل الكاتيغوري */
        .category-header {
            background: <?php echo $current['color']; ?>;
            color: white;
            padding: 60px 10%;
            text-align: center;
        }

        .search-section {
            background: #f8f9fa;
            padding: 30px 10%;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #eee;
        }

        .category-search-bar {
            width: 100%;
            max-width: 600px;
            display: flex;
            background: #fff;
            padding: 5px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #ddd;
        }

        .category-search-bar input {
            flex: 1;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            outline: none;
            font-size: 1rem;
        }

        .category-search-bar button {
            background: #001a3d;
            color: white;
            border: none;
            padding: 0 25px;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s;
        }

        .category-search-bar button:hover {
            background: #DC0000;
        }

        .stores-container {
            padding: 40px 10%;
        }
    </style>
</head>
<body>

    <header class="category-header">
        <i class="fa-solid <?php echo $current['icon']; ?> fa-3x"></i>
        <h1 style="margin-top: 15px; font-size: 2.5rem;"><?php echo $current['title']; ?> Section</h1>
        <p>Browse all vendors specialized in <?php echo $current['title']; ?></p>
    </header>

    <section class="search-section">
        <form action="" method="GET" class="category-search-bar">
            <input type="hidden" name="type" value="<?php echo $category_type; ?>">
            <input type="text" name="search_query" placeholder="Search for stores in <?php echo $current['title']; ?>...">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Search
            </button>
        </form>
    </section>

    <main class="stores-container">
        <h2 style="color: #001a3d; margin-bottom: 30px;">Available Vendors</h2>
        <div class="store-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
            
            <div class="store-card" style="background: white; padding: 20px; border-radius: 15px; border: 1px solid #eee