<?php
// register.php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO userdata (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "<script>
            alert('Registracija uspješna. Prosljeđujemo vas na stranicu za prijavu...');
            window.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: " . addslashes($stmt->error) . "');
        </script>";
    }
    

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="styles/login_register.css">
</head>
<body>
    <div class="form-container">
        <h2>REGISTRACIJA</h2>
        
        <form method="POST" action="">
            <div>
                <input type="text" name="username" id="username-input" placeholder="Korisničko ime" required>
                <input type="email" name="email" id="email-input" placeholder="Email adresa" required>
                <input type="password" name="password" id="password-input" placeholder="Lozinka" required>
                <br>
                <button type="submit">Registracija</button>
            </div>
        </form>
        <p>Već imate račun? <a href="login.php">Prijavite se ovdje.</a></p>
        <p><a href="home.php">Nazad na početnu.</a></p>
    </div>
</body>
</html>
