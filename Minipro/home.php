<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/icon" href="/Pics/favicon.ico">
</head>
<body>
    <header>
        <h2 class="logo"><a href="home.php">Edibles</a></h2>
        <nav class="navigation">
            <a href="home.php">Home</a>
            <a href="">About</a>
            <a href="">Services</a>
            <a href="">Contact</a>
            <a href="index.php"><button class="bt">Logout</button></a>
        </nav>
    </header>
        <!-- Image Slider -->
        <section class="slider">
        <!-- Radio buttons for each slide -->
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        
        <!-- Slides -->
        <div class="slides">
        <figure class="slide" id="s1">
            <img src="./Pics/6 (3).jpg" alt="water">
            <figcaption>Edibles - Eat to your heart's content!</figcaption>
        </figure>
        <figure class="slide" id="s2">
            <img src="./Pics/6 (2).jpg" alt="white">
            <figcaption>Edibles - Eat more Fruits!</figcaption>
        </figure>
        <figure class="slide" id="s3">
            <img src="./Pics/6 (1).jpg" alt="black">
            <figcaption>Edibles - Find Best Quality Fruits!</figcaption>
        </figure>
        <figure class="slide" id="s4">
            <img src="./Pics/6 .jpg" alt="green">
            <figcaption>Edibles - Great Snack with Fries & Burger!</figcaption>
        </figure>
        </div>
        
        <!-- Navigation buttons -->
        <div class="nav">
            <label for="slide1" class="nav-button"></label>
            <label for="slide2" class="nav-button"></label>
            <label for="slide3" class="nav-button"></label>
            <label for="slide4" class="nav-button"></label>
        </div>

        <div class="controls">
            <!-- Slide 1 controls -->
            <label for="slide4" class="prev control1">&#10094;</label>
            <label for="slide2" class="next control1">&#10095;</label>

            <!-- Slide 2 controls -->
            <label for="slide1" class="prev control2">&#10094;</label>
            <label for="slide3" class="next control2">&#10095;</label>

            <!-- Slide 3 controls -->
            <label for="slide2" class="prev control3">&#10094;</label>
            <label for="slide4" class="next control3">&#10095;</label>

            <!-- Slide 4 controls -->
            <label for="slide3" class="prev control4">&#10094;</label>
            <label for="slide1" class="next control4">&#10095;</label>
        </div>
    </section>

<section class="image-grid">
    <h2>Our Products</h2>
    <div class="grid-container">
        <div class="grid-item">
            <img src="./Pics/8 (1).jpg" alt="Product 1">
            <p>Juicy Mangoes</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (2).jpg" alt="Product 2">
            <p>Green Grapes</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (3).jpg" alt="Product 3">
            <p>Organic Oranges</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (4).jpg" alt="Product 4">
            <p>Ripe Bananas</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (5).jpg" alt="Product 5">
            <p>Fresh Apples</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (6).jpg" alt="Product 5">
            <p>Burger & Fries Combo</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (7).jpg" alt="Product 5">
            <p>Chocolate</p>
        </div>
        <div class="grid-item">
            <img src="./Pics/8 (8).jpg" alt="Product 5">
            <p>Quick Yummy Snacks</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <p>&copy; 2024 Edibles. All Rights Reserved.</p>
        <p>Follow us on:
            <a href="#">Facebook</a> |
            <a href="#">Twitter</a> |
            <a href="#">Instagram</a>
        </p>
    </div>
</footer>
</body>
</html>