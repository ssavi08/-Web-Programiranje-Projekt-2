<?php
// home.php
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
    echo "<script>alert('Odjava je uspješna!');
    window.history.replaceState({}, document.title, 'home.php');</script>";
}
?>
<?php
// home.php
session_start();
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O.P.G. Savi | Početna</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <!--<?php if (isset($_SESSION['username'])): ?>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>Welcome, guest!</p>
        <a href="login.php">Login</a>
    <?php endif; ?>-->

    <header class="header">
        <div class="title">
            <h1>O.P.G. SAVI</h1>
            <p>PROIZVODNJA I PRODAJA CVIJEĆA</p>
        </div>

        <nav class="nav-links">
            <div id="cart-icon">
                <img src="images/ikone/cart-icon.png" alt="KOŠARICA">
            </div>
            <?php if (isset($_SESSION['username'])): ?>
                <span>Prijavit: <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="logout.php">Odjava</a>
            <?php else: ?>
                <a href="login.php">Prijava</a>
                <!--<a href="register.php">Registracija</a>-->
            <?php endif; ?>
            <!--<a href="logout.php">Odjava</a>
            <a href="login.php">Prijava</a>
            <a href="register.php">Registracija</a>-->      
        </nav>
    </header>

    <div class="content">
        <div class="opisni-tekst">
            <p><h2>Dobrodošli na našu stranicu!</h2></p>
            <br>
            <p>Ovdje možete pronaći razno cvijeće koje će ukrasiti vaš dom, vrt i okolinu. Cvijeće je sađeno i zaljevano uz pomoć naših članova obitelji te svaki cvijet dobije jednaku dozu ljubavi.
            U našim se plastenicima temperatura pomno prati i regulira kako bi našim biljkama uvijek bilo najugodnije.
            </p>
        </div>
     
        <main class="categories">
            <a href="trajnice.php" class="category">
                <img src="images/trajnica_main.jpg" alt="trajnice">
                <p>TRAJNICE</p>
            </a>
            <a href="proljeće.php" class="category">
                <img src="images/proljetnice_main.jpeg" alt="proljetnice">
                <p>PROLJETNICE</p>
            </a>
            <a href="zima.php" class="category">
                <img src="images/bozicnica_main.jpeg" alt="zima">
                <p>BOŽIĆNICE I ZIMSKE TRAJNICE</p>
            </a>
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
            <strong>Ukupno: €<span id="total-price">0</span></strong>
        </div>
    </div>

    
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
