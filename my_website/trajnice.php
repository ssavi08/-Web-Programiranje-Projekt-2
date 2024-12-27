<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O.P.G. Savi | Trajnice</title>
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
            <a href="register.php">REGISTER</a>
        </nav>
    </header>

    <!--Sadržaj stranice-->
    <div class="content">
        <div class="opisni-tekst">
            <p><h2>Trajnice</h2></p>
            <br>
            <p>Trajnice, višegodišnja je svaka biljka koja postoji nekoliko godina, obično s novim zeljastim rastom iz dijela koji preživi od vegetacijske sezone do vegetacijske sezone.
                U našem osobnom vrtu možete pogledati trajnice stare čak i do 4 godine a koje idalje bruje svojom ljepotom i mirisom.
            </p>
        </div>
        
        <main class="categories">
            <div class="category" data-name="Lavanda" data-price="4">
                <img src="images/trajnica_main.jpg" alt="Lavanda">
                <p>Lavanda</p>
                <p class="price">4 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Tamjan" data-price="5">
                <img src="images/trajnice/tamjan.jpg" alt="Tamjan">
                <p>Tamjan</p>
                <p class="price">5 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Ukrasna kopriva" data-price="6">
                <img src="images/trajnice/ukrasna-kopriva.jpg" alt="Ukrasna kopriva">
                <p>Ukrasna kopriva</p>
                <p class="price">6 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Hortenzija" data-price="15">
                <img src="images/trajnice/hortenzija_crvena.jpg" alt="Hortenzija">
                <p>Hortenzija</p>
                <p class="price">15 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Fuksija" data-price="15">
                <img src="images/trajnice/fuksija.jpg" alt="Fuksija">
                <p>Fuksija</p>
                <p class="price">15 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Begonija" data-price="7">
                <img src="images/trajnice/begonija.jpg" alt="Begonija">
                <p>Begonija</p>
                <p class="price">7 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
        </main>
    </div>

    <!-- Košarica -->
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
