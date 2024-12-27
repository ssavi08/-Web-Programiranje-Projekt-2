<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O.P.G. Savi | Proljetnice</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <!-- Gornji banner s naslovom i navigacijom -->
    <header class="header">
        <div class="title">
            <h1>O.P.G. SAVI</h1>
            <p>PROIZVODNJA I PRODAJA CVIJEĆA</p>
        </div>
        <nav class="nav-links">
            <div id="cart-icon">
                <img src="images/ikone/cart-icon.png" alt="KOŠARICA">
            </div> 
            <a href="home.php">POČETNA</a>
            <a href="login.php">LOGIN</a>
            <a href="register.php">REGIS1TER</a>
        </nav>
    </header>

    <!--Sadržaj stranice-->
    <div class="content">
        <div class="opisni-tekst">
            <p><h2>Proljetnice</h2></p>
            <br>
            <p>Proljeće obilježava buđenje prirode – od cvrkuta ptica do procvjetalih biljaka koje ukrašavaju krajolik i ispunjaju zrak prekrasnim mirisima. Rascvjetalo proljetno cvijeće može probuditi i vaš balkon ili vrt, a opcija imate mnogo.</p>
        </div>

        <main class="categories">
            <div class="category" data-name="Jaglac" data-price="3" data-color="crvena" data-hanging="no">
                <img src="images/proljetnice/jaglac.jpg" alt="Jaglac">
                <p>Jaglac</p>
                <p class="price">3 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Karanfil" data-price="2" data-color="crvena" data-hanging="no">
                <img src="images/proljetnice/karanfil.jpg" alt="Karanfil">
                <p>Karanfil</p>
                <p class="price">2 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Lobelija" data-price="18" data-color="plava" data-hanging="no">
                <img src="images/proljetnice/lobelija.jpg" alt="Lobelija">
                <p>Lobelija</p>
                <p class="price">18 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Petunija" data-price="10" data-color="crvena" data-hanging="yes">
                <img src="images/proljetnice/petunija.jpg" alt="Petunija">
                <p>Petunija</p>
                <p class="price">10 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>

            <div class="category" data-name="Potočnica" data-price="15" data-color="plava" data-hanging="no">
                <img src="images/proljetnice/potočnica.jpeg" alt="Potočnica">
                <p>Potočnica</p>
                <p class="price">15 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Salvija" data-price="15" data-color="plava" data-hanging="no">
                <img src="images/proljetnice/salvija.jpg" alt="Salvija">
                <p>Salvija</p>
                <p class="price">15 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
        </main>
    </div>

    <div id="cart-drawer">
        <div class="cart-header">
            <h2>Moja košarica</h2>
            <button id="close-cart">X</button>
        </div>
        <div id="cart-items">
        </div>
        <div id="cart-total">
            <strong>Ukupno: <span id="total-price">0</span></strong>
        </div>
    </div>

    <!--Podnožje-->
    <footer class="footer">
        <div class="footer-content">
            <p><strong>Adresa:</strong> ulica kucni broj 35400 Nova Gradiška</p>
            <p><strong>Kontakt:</strong> +385 091 232 2456 | info@opgsavi.hr</p>
            <p><strong>Radno vrijeme:</strong> Pon - Pet: 08:00 - 17:00 | Subota: 08:00 - 13:00</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>