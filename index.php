<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaPixel | Multi-Vendor Marketplace</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                <i class="fa-solid fa-layer-group"></i> Nova<span>Pixel</span>
            </div>
            
            <div class="search-container">
                <form action="search.php" method="GET" class="search-bar">
                    <input type="text" name="query" placeholder="Search for products or brands...">
                    <button type="button" class="camera-btn" id="ai-search-btn" title="AI Image Search">
                        <i class="fa-solid fa-camera"></i>
                    </button>
                    <button type="submit" class="search-submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            <div class="nav-links">
                <div class="lang-switcher">
    <button id="lang-toggle" onclick="toggleLanguage()">
        <i class="fa-solid fa-earth-americas"></i> 
        <span id="lang-text">EN</span>
    </button>
</div>
                <div class="auth-buttons">
                    <a href="login.php" class="btn-login">Login</a>
                    <a href="register.php" class="btn-register">Register</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Find everything you need in one place.</h1>
            <p>The ultimate marketplace for vendors and shoppers.</p>
        </section>

        <section class="categories">
            <h2 class="section-title"><i class="fa-solid fa-grip"></i> Shop by Category</h2>
            <div class="category-grid">
                <div class="cat-card">
                    <i class="fa-solid fa-laptop"></i>
                    <p>Electronics</p>
                </div>
                <div class="cat-card">
                    <i class="fa-solid fa-shirt"></i>
                    <p>Fashion</p>
                </div>
                <div class="cat-card">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <p>Mobiles</p>
                </div>
                <div class="cat-card">
                    <i class="fa-solid fa-couch"></i>
                    <p>Home</p>
                </div>
                <div class="cat-card">
                    <i class="fa-solid fa-gamepad"></i>
                    <p>Gaming</p>
                </div>
                <div class="cat-card">
                    <i class="fa-solid fa-dumbbell"></i>
                    <p>Sports</p>
                </div>
            </div>
        </section>

        <section class="stores">
            <h2 class="section-title"><i class="fa-solid fa-award"></i> Best Seller Stores</h2>
            <div class="store-grid">
                <div class="store-card">
                    <div class="store-img"><i class="fa-solid fa-store"></i></div>
                    <h3>Tech Hub</h3>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i> 4.9 (2k+ Sales)
                    </div>
                    <a href="#" class="view-store">Visit Store</a>
                </div>
                <div class="store-card">
                    <div class="store-img"><i class="fa-solid fa-store"></i></div>
                    <h3>Urban Style</h3>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i> 4.8 (1.5k+ Sales)
                    </div>
                    <a href="#" class="view-store">Visit Store</a>
                </div>
                <div class="store-card">
                    <div class="store-img"><i class="fa-solid fa-store"></i></div>
                    <h3>Home Bliss</h3>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i> 4.7 (900 Sales)
                    </div>
                    <a href="#" class="view-store">Visit Store</a>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>