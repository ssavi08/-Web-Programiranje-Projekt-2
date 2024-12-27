<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O.P.G. Savi | Božićnice i zimske trajnice</title>
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
            <p><h2>Božićnice i zimske trajnice</h2></p>
            <br>
            <p>Božić je blagdansko vrijeme puno čarolije a božićnice koje nudimo će dodatno doprinjeti toj čaroliji i toplini vašem domu. U ponudi imamo i najbolje cvijeće koje će preživjeti i najoštrije zimske noći.</p>
        </div>
        
        <main class="categories">
            <div class="category" data-name="Božićna zvijezda" data-price="15">
                <img src="images/zima/bozicna_zvijezda.jpg" alt="Božićna zvijezda">
                <p>Božićna zvijezda</p>
                <p class="price">15 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Kukurijek" data-price="13">
                <img src="images/zima/kukurijek.jpg" alt="Kukurijek">
                <p>Kukurijek</p>
                <p class="price">13 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Vrijesak" data-price="10">
                <img src="images/zima/vrijesak.jpg" alt="Vrijesak">
                <p>Vrijesak</p>
                <p class="price">10 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Srdašce" data-price="10">
                <img src="images/zima/srdasce.jpg" alt="Srdašce">
                <p>Srdašce</p>
                <p class="price">10 €</p>
                <button class="add-to-cart">dodaj u košaricu</button>
            </div>
            <div class="category" data-name="Ciklama" data-price="10">
                <img src="images/zima/ciklama.jpg" alt="Ciklama">
                <p>Ciklama</p>
                <p class="price">10 €</p>
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
            <p><strong>Adresa:</strong> ulica kućni broj 35400 Nova Gradiška</p>
            <p><strong>Kontakt:</strong> +385 091 232 2456 | info@opgsavi.hr</p>
            <p><strong>Radno vrijeme:</strong> Pon - Pet: 08:00 - 17:00 | Subota: 08:00 - 13:00</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>