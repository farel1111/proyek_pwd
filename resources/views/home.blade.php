<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory Bites</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <div class="logo">Savory Bites</div>
        <div class="search-bar">
            <input type="text" placeholder="Search Recipes">
            <button>Search</button>
        </div>
        </div>
    </header>
    <main>
        <!-- Background Rectangle for Slider -->
        <div class="background-rectangle " ></div>

        <div class="slider">
            <button class="prev">&lt;</button>
            <div class="slider-content">
                <img src="asset/SavoryBitesAds.png" alt="Dish 1">
                <img src="asset/2.png" alt="Dish 2">
                <img src="asset/1.png" alt="Dish 3">
            </div>
            <button class="next">&gt;</button>
        </div> 
        <div class="most" data-aos="fade-up">
            <h2>____________________Most Popular Recipes____________________</h2>
        </div>
        <div class="recipes">
            <div class="recipe">
                <img src="asset/pizza.jpg" alt="Recipe 1">
                <p>Pizza</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe">
                <img src="asset/spagetti.jpg" alt="Recipe 2">
                <p>Spagetti</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe">
                <img src="asset/burjer.jpg" alt="Recipe 3">
                <p>Burger</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe">
                <img src="asset/nasgoriklan.webp" alt="Recipe 4">
                <p>Nasgor</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe" data-aos="fade-up">
                <img src="asset/sate.jpg" alt="Recipe 5">
                <p>Sate Maranggi</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe" data-aos="fade-up">
                <img src="asset/sate 2.jpg" alt="Recipe 6">
                <p>Sate</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe" data-aos="fade-up">
                <img src="asset/mie goyeng.jpeg" alt="Recipe 7">
                <p>Mie goyeng</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
            <div class="recipe" data-aos="fade-up">
                <img src="asset/croissants.jpeg" alt="Recipe 8">
                <p>Croissant</p>
                <a href="resep.html">
                    <button>Click to get recipe</button>
                </a>
            </div>
        </div>
        <div class="most" data-aos="fade-up"><h2>_________________Upload Your Recipes________________</h2></div>
        <div class="container" data-aos="fade-up">
            <div class="recipe-card">
                <img src="asset/sate 2.jpg" alt="Nasi Goreng/Fried Rice">
                <div class="recipe-info">
                    <h2>Nasi Goreng/Fried Rice</h2>
                    <p><strong>Published by:</strong> Sho?</p>
                    <p>Resep Nasi goreng adalah menu andalan yang Mudah di buat untuk di makan bersama keluarga. Rasanya yang enak dan gurih membuat saya dan keluarga sangat nikmat untuk memakannya sebelum sekolah.</p>
                </div>
            </div>
            <div class="button-container">
                <button class="recipe-button">Looking for another recipes</button>
                <button class="recipe-button">Upload your recipe</button>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="js/script.js"></script>
</body>
</html>
